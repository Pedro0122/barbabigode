<?php
    if(isset($_POST['submit'])){

        include_once('conexao_bd.php');

        $descricao = $_POST['txtDescricao'];
        $preco = $_POST['txtPreco'];

        $result = mysqli_query($conn, "INSERT INTO servico(descricao,preco) VALUES('$descricao','$preco')");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Barba & Bigode</title>

        <!-- Inclusao dos arquivos de formatação CSS e JAVASCRIPT -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/formularios.css" />
        <link rel="stylesheet" type="text/css" href="css/mobile.css" media="screen and (max-width : 568px)" />
        <script type="text/javascript" src="js/mobile.js"></script>
    </head>
    <body>
        <!-- Inclusao do cabeçalho/topo que é padrão em todos as páginas do site -->
        <?php include 'cabecalho.php'; ?>

        <!-- CORPO DA PÁGINA -->

        <form name="formServico" action="servicos.php" method="post">
            <div id="body">

                <h1><span>Cadastrar serviços</span></h1>

                <ol>

                    <li><input type="text" name="txtDescricao" placeholder="Descrição do serviço" class="input"/>
                    </li>

                    <li><input type="number" name="txtPreco" placeholder="Valor do serviço (apenas números)" class="input"/>
                    </li>

                    <li><input type="submit" name="submit" value="Cadastrar" class="botao" />
                    </li>

                </ol>
            </div>
        </form>


        <!-- Inclusao do rodapé da página que é padrão em todos as páginas do site -->
        <?php include 'rodape.php'; ?>

    </body>
</html>
