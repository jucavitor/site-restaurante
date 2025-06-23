<?php
if(isset($_POST['submit'])){

//print_r($_POST['nome']);
//print_r($_POST['telefone']);
//print_r($_POST['endereco']);
//print_r($_POST['email']);
//print_r($_POST['senha']);

include_once('config.php');
include_once('funcoes.php');
$mensagem = "";
$classe_mensagem = "";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$senha = $_POST['senha'];

//função de inserir no banco de dados o cliente
verifica_cliente($conexao,$nome,$telefone,$senha,$endereco,$email);

if($resultado=="sucesso"){
    $mensagem = "Parabéns, você foi cadastrado com sucesso!";
    $classe_mensagem = "sucesso";
 }
 elseif($resultado=="erro"){
    $mensagem = "Erro ao cadastrar o cliente. Tente novamente.";
    $classe_mensagem = "erro";
 }
 elseif($resultado=="Ja_cadastrado"){
    $mensagem = "O seu email ou telefone já estão cadastrados.";
    $classe_mensagem = "erro";
 }
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

<?php if (!empty($mensagem)): ?>
    <div class="mensagem <?= $classe_mensagem ?>"><?= $mensagem ?></div>
<?php endif; ?>

<?php  if($classe_mensagem == "sucesso"):?>
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
    <?php endif; ?>
</body>
</html>