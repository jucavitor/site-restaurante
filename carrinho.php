<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="sistema.css">
</head>
<body>
    <nav>
        <img src="imagens/icone.jpg" alt="Ícone" style="width: 30px; height: 30px;" />
        <a href="login.php">Login</a>
        <a href="cadastrar.php">Cadastrar</a>
        <a href="#">Configurações</a>
        <a href="perfil.php" class="perfil">
            <img src="imagens/usuario.jpg" alt="Perfil do Usuário" style="width: 30px; height: 30px; border-radius: 50%;" />
        </a>
    </nav>

    <main>
        <h1>Carrinho de Compras</h1>
        <form action="finalizar.php" method="POST">
            <section class="carrinho">
                <div class="item-carrinho">
                    <h2>Frango Grelhado</h2>
                    <p>Preço (Pequena): R$ 12,00</p>
                    <p>Preço (Média): R$ 15,00</p>
                    <label for="frango_pequena">Quantidade de Pequenas:</label>
                    <input type="number" name="frango_pequena" value="0">
                    <label for="frango_media">Quantidade de Médias:</label>
                    <input type="number" name="frango_media" value="0">
                    <button type="button" class="remover-item">Remover</button>
                </div>

                <div class="item-carrinho">
                    <h2>Carne de Sol</h2>
                    <p>Preço (Pequena): R$ 14,00</p>
                    <p>Preço (Média): R$ 18,00</p>
                    <label for="carne_pequena">Quantidade de Pequenas:</label>
                    <input type="number" name="carne_pequena" value="0">
                    <label for="carne_media">Quantidade de Médias:</label>
                    <input type="number" name="carne_media" value="0">
                    <button type="button" class="remover-item">Remover</button>
                </div>

                <div class="item-carrinho">
                    <h2>Peixe Assado</h2>
                    <p>Preço (Pequena): R$ 16,00</p>
                    <p>Preço (Média): R$ 20,00</p>
                    <label for="peixe_pequena">Quantidade de Pequenas:</label>
                    <input type="number" name="peixe_pequena" value="0">
                    <label for="peixe_media">Quantidade de Médias:</label>
                    <input type="number" name="peixe_media" value="0">
                    <button type="button" class="remover-item">Remover</button>
                </div>

                <div class="item-carrinho">
                    <h2>Frango à Parmegiana</h2>
                    <p>Preço (Pequena): R$ 13,50</p>
                    <p>Preço (Média): R$ 17,50</p>
                    <label for="parmegiana_pequena">Quantidade de Pequenas:</label>
                    <input type="number" name="parmegiana_pequena" value="0">
                    <label for="parmegiana_media">Quantidade de Médias:</label>
                    <input type="number" name="parmegiana_media" value="0">
                    <button type="button" class="remover-item">Remover</button>
                </div>

                <div class="item-carrinho">
                    <h2>Vegetariana</h2>
                    <p>Preço (Pequena): R$ 11,00</p>
                    <p>Preço (Média): R$ 14,00</p>
                    <label for="vegetariana_pequena">Quantidade de Pequenas:</label>
                    <input type="number" name="vegetariana_pequena" value="0">
                    <label for="vegetariana_media">Quantidade de Médias:</label>
                    <input type="number" name="vegetariana_media" value="0">
                    <button type="button" class="remover-item">Remover</button>
                </div>

                <div class="total">
                    <h3>Total: <span id="total">R$ 0,00</span></h3>
                    <button type="submit">Finalizar Compra</button>
                </div>
            </section>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 Restaurante Delicioso - Todos os direitos reservados</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
