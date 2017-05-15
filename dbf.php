<?php    
$db = dbase_open("C:\DROPBOX\cadacess.dbf", 0);
if (!$db) {
    print "o banco de dados especificado não pode ser aberto";
} else {
     // caso clientes.dbf esteja aberto ele fecha o mesmo
    dbase_close($db);
}
?>