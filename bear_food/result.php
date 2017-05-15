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
                    <h1>Resultado das Consultas </h1>
                </div> 
                <br>

<?php
$cliente = $_POST['cliente'];
$produto = $_POST['produto'];
$forma = $_POST['form_pgt'];
$dataIni = $_POST['data_ini'];
$dataFim = $_POST['data_fim'];


if ($cliente && $produto && $forma && $dataIni && $dataFim != "") {
    
} elseif ($produto && $dataIni && $dataFim == "" && $forma && $cliente != "") {

//  }elseif ( ) {
//    # code...
//  }elseif () {
//    # code...
//  }elseif () {
//    # code...
//  }elseif () {
//    # code...
//  }elseif () {
//    # code...
//  }elseif () {
//    # code...
//  }elseif () {
//    # code...
//  }elseif () {
//    # code...
//  }elseif () {
//    # code...
//  }elseif () {
//    # code...
//  }elseif () {
//    # code...
}
?>

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