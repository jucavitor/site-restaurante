 <?php
 
//print_r($_REQUEST);

if(isset($_POST['submit']) and !empty($_POST['email']) and !empty($_POST['senha'])){

include_once('config.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

print_r($email);
print_r($senha);    
}   
else{
}

 ?> 