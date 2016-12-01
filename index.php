<html>
<head>
    <title>Curso Trilhando Caminho Com PHP - Módulo PHP: FOUNDATION</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php

require_once('menu.php');

$rota = $_GET['page'];

if (!empty($rota)):
    if (file_exists("pages/" . $rota . ".php")):
        require_once("pages/" . $rota . ".php");
    else:
        require_once('pages/404.php');
    endif;
else:
    ?>
    <div class="jumbotron">
        <h1 class="text-center">Bem Vindo!!</h1>
    </div>
    <?php
endif;

require_once('rodape.php');

?>
</body>
</html>