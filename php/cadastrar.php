<?php
if(isset($_POST['submit'])){

//print_r($_POST['nome']);
//print_r($_POST['telefone']);
//print_r($_POST['endereco']);
//print_r($_POST['email']);
//print_r($_POST['senha']);

include_once('config.php');
include_once('funcoes.php');


$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$senha = $_POST['senha'];


    verifica_cliente($conexao,$nome,$telefone,$senha,$endereco,$email);

}
?>
<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar</title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
<body>
    <nav>
      <a href="login.php">Login</a>
      <a href="home.php">home</a>
      <a href="">Configurações</a>
      <a href="carrinho.php">Meu pedidos</a>
    </nav>

    <form action="cadastrar.php" method="POST">
        <fieldset>
            <legend>Cadastrar clientes</legend>
                <table>
                    <tr>
                        <td>Insira seu nome: <input type="text" name="nome"></td>
                    </tr>
                    <tr>
                        <td>Insira seu Telefone: <input type="text" name="telefone"></td>
                    </tr>
                    <tr>
                        <td>Insira seu endereço: <input type="text" name="endereco"></td>
                    </tr>
                    <tr>
                        <td>Insira seu email: <input type="text" name="email"></td>
                    </tr>
                    <tr>
                        <td>Crie uma senha: <input type="password" name="senha"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit"></td>
                    </tr>
                </table>
        </fieldset>
    </form>
</body>
</html>