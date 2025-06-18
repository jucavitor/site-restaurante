<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cardapio do dia</title>
        <link rel="stylesheet" href="sistema.css">
    </head>
<body>
<nav>
    <img src="imagens/icone.jpg" alt="Ícone" style="width: 30px; height: 30px;" />
  <a href="login.php">Login</a>
  <a href="cadastrar.php">Cadastrar</a>
  <a href="#">Configurações</a>
  <a href="carrinho.php">Meu pedidos</a>
  <a href="perfil.php" class="perfil">
    <img src="imagens/usuario.jpg" alt="Perfil do Usuário" style="width: 30px; height: 30px; border-radius: 50%;" />
  </a>
</nav>

<main>
    <h1>Cardápio do Dia - Marmitas</h1>
    
    <form action="sistema.php" method="POST">
        <section class="marmitas">
            <div class="marmita">
                <h2>Frango Grelhado</h2>
                <p>Sabor: Frango grelhado com arroz e legumes</p>
                <p><strong>Preço (Pequena):</strong> R$ 12,00</p>
                <p><strong>Preço (Média):</strong> R$ 15,00</p>
                
                <label for="frango_pequena_qtd">Quantas Pequenas?</label>
                <input type="number" name="frango_pequena">
                
                <label for="frango_media_qtd">Quantas Médias?</label>
                <input type="number" name="frango_media">
            </div>
            <div class="marmita">
                <h2>Carne de Sol</h2>
                <p>Sabor: Carne de sol com feijão tropeiro e arroz</p>
                <p><strong>Preço (Pequena):</strong> R$ 14,00</p>
                <p><strong>Preço (Média):</strong> R$ 18,00</p>
                
                <label for="carne_pequena_qtd">Quantas Pequenas?</label>
                <input type="number"name="carne_pequena">
                
                <label for="carne_media_qtd">Quantas Médias?</label>
                <input type="number" name="carne_media">
            </div>

            <div class="marmita">
                <h2>Peixe Assado</h2>
                <p>Sabor: Peixe assado com purê de batata e salada</p>
                <p><strong>Preço (Pequena):</strong> R$ 16,00</p>
                <p><strong>Preço (Média):</strong> R$ 20,00</p>
                
                <label for="peixe_pequena_qtd">Quantas Pequenas?</label>
                <input type="number"name="peixe_pequena">
                
                <label for="peixe_media_qtd">Quantas Médias?</label>
                <input type="number" name="peixe_media">
            </div>

           
            <div class="marmita">
                <h2>Frango à Parmegiana</h2>
                <p>Sabor: Frango empanado com molho de tomate e queijo</p>
                <p><strong>Preço (Pequena):</strong> R$ 13,50</p>
                <p><strong>Preço (Média):</strong> R$ 17,50</p>
                
                <label for="parmegiana_pequena_qtd">Quantas Pequenas?</label>
                <input type="number" name="parmegiana_pequena">
                
                <label for="parmegiana_media_qtd">Quantas Médias?</label>
                <input type="number" name="parmegiana_media">
            </div>

            <div class="marmita">
                <h2>Vegetariana</h2>
                <p>Sabor: Berinjela grelhada com arroz integral e salada de folhas</p>
                <p><strong>Preço (Pequena):</strong> R$ 11,00</p>
                <p><strong>Preço (Média):</strong> R$ 14,00</p>
                
                <label for="vegetariana_pequena_qtd">Quantas Pequenas?</label>
                <input type="number" name="vegetariana_pequena">
                
                <label for="vegetariana_media_qtd">Quantas Médias?</label>
                <input type="number" name="vegetariana_media">
            </div>

            <button type="submit">Adicionar ao Carrinho</button><br><br><br><br>
        </section>
    </form>
</main>
<footer>
      <p>&copy; 2025 Restaurante Delicioso - Todos os direitos reservados</p>
</footer>
</body>
</html>
