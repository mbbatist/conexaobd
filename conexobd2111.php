<?php
error_reporting(0);
$conexao=mysql_connect("localhost","root","") or die ("Erro na conexão com banco de dados");
mysql_select_db("marianabd");


$nomeferramenta=$_POST["produto"];
$marcaferramenta=$_POST["marca"];

$string_sql="insert into ferramentas ('nomeferramenta','marcaferramenta') values('$nomeferramenta','$marcaferramenta')";
mysql_query($string_sql,$conexao);
mysql_close($conexao);
?>