<?php

include "conexao.php";


$function = $_GET['function'];

if ($function == "venda") {
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
    $cliente = $_POST['cliente'];
    $qtd = $_POST['qtd'];
    $f_pgto = $_POST['form_pgt'];
    $data = date('Y-m-d');
    $total = $qtd * $preco;
    echo $produto . "<br>" .
    $data . "<br>" .
    $cliente . "<br>" .
    $qtd . "<br>" .
    $f_pgto . "<br>" .
    $total;

    $incluir = $pdo->prepare("INSERT INTO venda (produto_venda,cliente_venda,qtd_venda,total_venda,data_venda,staus_venda) values (?,?,?,?,?,?)");
    $incluir->bindValue(1, $produto);
    $incluir->bindValue(2, $cliente);
    $incluir->bindValue(3, $qtd);
    $incluir->bindValue(4, $total);
    $incluir->bindValue(5, $data);
    $incluir->bindValue(6, $f_pgto);
    $incluir->execute();

//header('location:venda.php');
} elseif ($function == "produto") {
    $desc = $_POST['desc'];
    $custo = $_POST['custo'];
    $custo = str_replace(",", ".", $custo);
    $valor = $_POST['valor'];
    $valor = str_replace(",", ".", $valor);

    $incluir = $pdo->prepare("INSERT INTO produto (desc_produto,custo_produto,valor_produto) values (?,?,?)");
    $incluir->bindValue(1, $desc);
    $incluir->bindValue(2, $custo);
    $incluir->bindValue(3, $valor);
    $incluir->execute();

    header('location:produto.php');
} elseif ($function == "cliente") {
    $nome = $_POST['nome'];

    $incluir = $pdo->prepare("INSERT INTO cliente (nome_cliente) values (?)");
    $incluir->bindValue(1, $nome);
    $incluir->execute();

    header('location:cliente.php');
}
?>