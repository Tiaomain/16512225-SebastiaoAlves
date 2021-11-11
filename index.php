<!DOCTYPE html>
<html lang="en, pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenvolvedor Iniciante</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo"><a href="index.php">Sebastião</a></div>
            <ul class="menu">
                <li><a href="#">Quem somos</a></li>
                <li><a href="index.php?pagina=pages/contato.php">Contato</a></li>
                <li><a href="#">Localização</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php
            if (isset($_GET['pagina']) && !empty($_GET['pagina'])) {
                $pagina = $_GET['pagina'];
                include ($pagina);
            }
        ?>
    </main>
    <footer>
        <p>Desenvolvido por: <strong>Sebastião Alves</strong></p>
        <p>RA : <strong>1651222-5</strong></p>
    </footer>
</body>
</html>