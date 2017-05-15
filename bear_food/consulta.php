<?php

include 'conexao.php';

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>bear coding</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">BEAR FOOD</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <div class="col-sm-offset-2 col-sm-8">
      <div class="conteiner">
        <div class="col-sm-offset-2 col-sm-10">
          <h1>Consultas</h1>
        </div> 
        <br>

        <form class="form-horizontal" name="venda" method="POST" action="result.php">

          <div class="form-group">
            <label for="" class="col-sm-2 control-label">Produto:</label>
            <div class="col-sm-2">
              <select name="produto" id="lst_produto"  class="form-control" >
                <option></option>
                <?php
                  $lst_produto =$pdo->query("SELECT *FROM produto ORDER BY desc_produto");
                  $lst_produto->execute;
                  while ($linha=$lst_produto->fetch(PDO::FETCH_ASSOC)) {
                    $id_produto=$linha['id_produto'];
                    $desc_produto=$linha['desc_produto'];
                    $valor_produto=$linha['valor_produto'];
                ?>
                  <option value="<?php echo $id_produto ?>"><?php echo $desc_produto ?></option>
                 
                <?php  
                  }
                ?>
              </select>
            </div> 
         
            <label class="col-sm-1 control-label">Cliente:</label>
            <div class="col-sm-2">
            <select class="form-control" name="cliente" id="lst_cliente">
              <option></option>
              <?php
                $lst_cliente =$pdo->query("SELECT *FROM cliente ORDER BY nome_cliente");
                $lst_cliente->execute;
                while ($linha=$lst_cliente->fetch(PDO::FETCH_ASSOC)) {
                  $id_cliente=$linha['id_cliente'];
                  $nome_cliente=$linha['nome_cliente'];
              ?>
                <option value="<?php echo $id_cliente ?>"><?php echo $nome_cliente ?></option>
               
              <?php  
                }
              ?>
            </select>
            </div>

            <label class="col-sm-1 control-label">Pgto:</label>
            <div class="col-sm-2">
	            <select class="form-control" name="form_pgt" id="lst_form_pgt">
	              <option></option>
	              <option value="A>">À PRAZO</option>  
	              <option value="P>">À VISTA</option>           
	            </select>
	            </div>
	          </div>


	          <div class="form-group" >
	             <label class="col-sm-2 control-label">Data De:</label>
	            <div class="col-sm-3" id="">
	              <input type='date' name='data_ini' value=''  class="form-control" >
	            </div>        
	         
	            <label class="col-sm-2 control-label">Até:</label>
	            <div class="col-sm-3">
	              <input type="date" name="data_fim" value=""  class="form-control" >
	            </div>
	          </div>

	         <div class="form-group">
	          <div class="col-sm-offset-2 col-sm-8"> 
	             <a href="index.php" class="btn btn-default" >VOLTAR</a>
	            <input type="submit" name="salvar" value="CONLSUTAR" class="btn btn-primary">
	          </div>
	        </div>
        </form>

       
	        <table class="table  table-condensed table-responsive">
	          <thead>
	            <tr>
	              <th>NOME</th>
	              <th>PRODUTO</th>
                <th>QTD.</th>
	              <th>VALOR</th>
	              <th>TOTAL</th>
                <th>DATA</th>
                <th>STATUS</th>
                	              
	            </tr>
	          </thead>
	          <tbody class="caps">
	           <?php
	           $lista = $pdo->query("SELECT venda.qtd_venda,venda.total_venda,venda.data_venda, venda.status_venda,produto.desc_produto,cliente.nome_cliente, produto.valor_produto FROM venda INNER JOIN cliente ON venda.cliente_venda=cliente.id_cliente INNER JOIN produto on venda.produto_venda=produto.id_produto ORDER BY  data_venda DESC limit 10");
	           $lista->execute();


	           while ($linha = $lista->fetch(PDO::FETCH_ASSOC)) {
              $nome = $linha['nome_cliente'];
              $produto = $linha['desc_produto'];
              $qtd = $linha['qtd_venda'];
	            $valor = $linha['valor_produto'];
              $total = $linha['total_venda'];
	            $data = $linha['data_venda'];	            
	            $status = $linha['status_venda'];
	            ?>

	            <tr>
                <td align="left"><?php echo $nome; ?></td>
                <td align="left"><?php echo $produto; ?></td>
                <td align="left"><?php echo $qtd; ?></td>
	              <td align="left">R$ <?php echo $valor = str_replace(".",",", $valor); ?></td>
                <td align="left">R$ <?php echo $total = str_replace(".",",", $valor); ?></td>
	              <td align="left"><?php echo date('d/m/Y',strtotime($data)); ?></td>
	              <td align="center"><?php echo $status; ?></td>
	            </tr>
	            <?php
	          }    
	          ?> 
	        </tbody>
	      </table>
    	</div>

    <div class="footer">
      <p>Copyright 2017 by <a href="http://bearcoding.com.br">Bear Coding</a></p>
    </div>
  </div>
      </div>  
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function () {
         $('input').keypress(function (e) {
            var code = null;
            code = (e.keyCode ? e.keyCode : e.which);                
            return (code == 13) ? false : true;
         });
      });
    </script>
  </body>
</html>