<?php
include "conexao.php";

$produto = $_GET['produto'];

$lista=$pdo->query("SELECT * FROM produto WHERE id_produto = '$produto'");
$lista->execute();
while ($linha=$lista->fetch(PDO::FETCH_ASSOC)) {
	       $valor_produto=$linha['valor_produto'];
	
	echo "<input type='text' name='preco' value='".$valor_produto."' class='form-control'>";
}

?>