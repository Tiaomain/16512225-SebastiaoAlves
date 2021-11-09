<!DOCTYPE html>
<html lang="en, pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doces Caseiros</title>
</head>
<body>
    <header>
        <nav>
            <ul class="menu">
                <li><a href="index.php">Quem somos</a></li>
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
            } else {
                //include ('home.php');
                echo "Página principal";
            };

        ?>
    </main>
    <footer>

    </footer>
</body>
</html>