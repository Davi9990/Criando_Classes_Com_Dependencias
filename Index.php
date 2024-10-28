<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Carrinho de Compras</title>
    </head>
    <body>
        <h1>Adicionar Produto ao Carrinho</h1>

        <form method="post">
            <label for="nome">Nome do Produto:</label>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="preco">Preço do Produto:</label>
            <input type="number" id="preco" name="preco" required><br><br>

            <label for="quantidade">Quantidade:</label>
            <input type="number" id="quantidade" name="quantidade" required><br><br>

            <button type="submit">Adicionar ao Carrinho</button>
        </form>

        <?php
            require_once 'Produto.php';
            require_once 'Carrinho.php';

            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $nome = $_POST['nome'];
                $preco = $_POST['preco'];
                $quantidade = $_POST['quantidade'];


                //Cria o objeto Produto
                $produto = new Produto($nome, $preco, $quantidade);

                //Adicionar o Produto ao Carrinho
                $carrinho->adicionar($produto);
            }

            //$carrinho->listarProdutos();
        ?>
    </body>
</html>

