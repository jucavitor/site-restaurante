<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
        
    </head>
<body>
    <nav>
      <a href="home.php">Home</a>
      <a href="cadastrar.php">Cadastrar</a>
      <a href="">Configurações</a>
      <a href="carrinho.php">Meu pedidos</a>
   </nav>

   <form action="testeLogin.php" method="POST">
    <fieldset>
        <legend>Insira seu Login</legend>
        <table>
            <tr>
                <td>Insira seu usuario: <input type="text" name="usuario"></td>
            </tr>
            <tr>
                <td>Insira sua senha: <input type="password" name="senha"></td>
            </tr>
            <tr>
                <td><a href="configuracoes.php">Esqueci minha senha</a></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Enviar "></td>
            </tr>
        </table>
    </fieldset>
   </form>

   <footer>
      <p>&copy; 2025 Restaurante Delicioso - Todos os direitos reservados</p>
   </footer>
   
</body>
</html>