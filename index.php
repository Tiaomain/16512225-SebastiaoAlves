<!DOCTYPE html>
<html lang="en, pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Desenvolvedor Iniciante</title>
</head>

<body class="container-fluid">
    
        <header>
            
            <nav class="navbar navbar-expand-md bg-dark navbar-dark px-4">
                    <a class="navbar-brand" href="index.php">Sebastião</a>
                <div class="collapse navbar-collapse">    
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="index.php?pagina=pages/quemSou.php">Quem sou</a>
                        <a class="nav-item nav-link" href="index.php?pagina=pages/contato.php">Contato</a>
                    </div>
                </div>
            </nav>
        </header>
        <main class="container py-3">
            <?php
                if (isset($_GET['pagina']) && !empty($_GET['pagina'])) {
                    $pagina = $_GET['pagina'];
                    include ($pagina);
                } else {
                    include ('pages/home.php');
                };

            ?>
        </main>
        <footer class="modal-footer fixed-bottom">
            <p>Desenvolvido por: <strong>Sebastião Alves</strong></p>
            <p>RA : <strong>1651222-5</strong></p>
        </footer>
    
</body>

</html>