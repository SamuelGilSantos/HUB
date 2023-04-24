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
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">

    <div class="container-fluid border text-center">
            <h1 class="text-white">Hub de arquivos</h1>
        </div>

    <div class="d-flex justify-content-around">

        <div class="card mt-5" style="width: 18rem; background-color:#282C33; border-color:#C778DD">
            <ul class="list-group list-group-flush" style="background-color:#282C33;">
                <li class="list-group-item text-white" style="background-color: #282C33; border-color:#C778DD;">
                    <h5 class="card-title">Funções</h5>
                </li>

                <a href="atividades.php?dir=Literais&file=string"><li class="list-group-item text-white"style="background-color:#282C33; border-color: #C778DD;">1. Primeira Função</li></a>
                <li class="list-group-item text-white"style="background-color:#282C33; border-color: #C778DD;">2. Função Anonima</li>
                <li class="list-group-item text-white"style="background-color:#282C33;">Item 03</li>
            </ul>   
        </div>

        <div class="card mt-5" style="width: 18rem; background-color:#282C33; border-color:#C778DD">
            <ul class="list-group list-group-flush" style="background-color:#282C33;">
                <li class="list-group-item text-white" style="background-color: #282C33; border-color:#C778DD;">
                    <h5 class="card-title">IF/ELSE</h5>
                </li>

                <a href="atividades.php?dir=else&file=Maior numero"><li class="list-group-item text-white"style="background-color:#282C33; border-color: #C778DD;">1. Maior Número</li></a>
                <li class="list-group-item text-white"style="background-color:#282C33; border-color: #C778DD;">2. Menor Número</li>
                <li class="list-group-item text-white"style="background-color:#282C33;">Item 03</li>
            </ul>   
        </div>

        <div class="card mt-5" style="width: 18rem; background-color:#282C33; border-color:#C778DD">
            <ul class="list-group list-group-flush" style="background-color:#282C33;">
                <li class="list-group-item text-white" style="background-color: #282C33; border-color:#C778DD;">
                    <h5 class="card-title">Tipos Literais</h5>
                </li>

                <a href="atividades.php?dir=else&file=media"></a><li class="list-group-item text-white"style="background-color:#282C33; border-color: #C778DD;">Média</li>
                <li class="list-group-item text-white"style="background-color:#282C33; border-color: #C778DD;">Inteiros</li>
                <li class="list-group-item text-white"style="background-color:#282C33;">Item 03</li>
            </ul>   
        </div>
        
        </div>

    </div>

</body>

</html>