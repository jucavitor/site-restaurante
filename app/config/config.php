<?php
$dbhost = "Localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "restaurante";

$conexao = new mysqli($dbhost,$dbusername,$dbpassword,$dbname);

if($conexao-> connect_errno){

   // print"Erro de conexão";
}

else{

   // print"Conexão efetuada com sucesso!";

}
?>