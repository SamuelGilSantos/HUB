<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="text-white">
    <div class="container">
    <header class="text-white text-center" style="background-color: #C778DD; border-radius: 5px;">
    <h1>Lorem, ipsum.</h1>
    <h2>Visualização de atividades</h2>
    </header>

    <nav>
        <a href="index.php"style="text-decoration: none; color:#C778DD;">voltar</a>
    </nav>

    <main class="">
        <div class="conteiner">
            <?php
                include(__DIR__."/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    </div>



</body>
</html>