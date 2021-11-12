<!DOCTYPE html>
<html lang="en, pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Desenvolvedor Iniciante</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div>
                <a class="navbar-brand" href="index.php">Sebastião</a></div>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="index.php?pagina=pages/quemSou.php">Quem sou</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php?pagina=pages/contato.php">Contato</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <?php
            if (isset($_GET['pagina']) && !empty($_GET['pagina'])) {
                $pagina = $_GET['pagina'];
                include ($pagina);
            } else {
                include ('pages/home.php');
            };

        ?>
    </main>
    <footer>
        <p>Desenvolvido por: <strong>Sebastião Alves</strong></p>
        <p>RA : <strong>1651222-5</strong></p>
    </footer>
</body>

</html>