<?php include('config.php') ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH ?>style.css">
    <script src="<?php INCLUDE_PATH ?>Js/Jquery"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body {
            background-color: rgb(32, 32, 32);
        }
    </style>
</head>

<body>
    <div class="top-nav">
        <div class="container">
            <img src="<?php echo INCLUDE_PATH ?>/images/FRMotors.png">
            <div class="nav-botoes">
                <spam>Fale conosco:</spam>
                <a href="#" id="telefone"> <img src="<?php echo INCLUDE_PATH ?>/images/telefone.png"><span class="desapareceLink">TELEFONE</span> </a>
                <a href="#" id="whatsapp"><img src="<?php echo INCLUDE_PATH ?>/images/whatsapp.png" alt="..."><span class="desapareceLink">WHATSAPP</span></a>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" style="background-color: rgb(32, 32, 32)!important">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav justify-content-center" style="margin: auto!important;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?php echo INCLUDE_PATH ?>index.html">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ESTOQUE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">QUEM SOMOS</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>