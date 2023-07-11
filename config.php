<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "1986Tit@M@nt@s";
$dbname = "cadastro";


$conexao = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

if($conexao->connect_errno)
{
echo "erro";

};

else
{
 echo "conexao efectuada com sucesso";

}

?>