<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';
mysql_close($link);
?>



 $local_server="localhost";
    $usuario_server = "root";
    $senha_server = "root";
    $banco_dados = "span";
    if ($conecta === @mysql_connect($local_server, $usuario_server, $senha_server)){
    if ($db === mysql_select_db($banco_dados, $conecta)){