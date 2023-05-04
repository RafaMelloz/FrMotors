<?php include('../topmenu.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-color: rgb(32, 32, 32);
        }

        a {
            color: #d33215;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            color: #ff2d08;
        }

        #conteudo_agradecimento {
            height: 50vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
    </style>
    <title>Obrigado!</title>
</head>

<body>
    <div class="container" id="conteudo_agradecimento">
        <div class="row" style="text-align: center;">
            <h1 style="font-size: 65px;">Agradecemos o contato!</h1>
            <h4 style="font-size: 30px;font-weight: 400;">Retornaremos sua mensagem em breve </h4>
            <span style="font-size:20px"><a href="<?php INCLUDE_PATH ?>index.php">Clique aqui</a> para continuar navegando em nosso site</span>
        </div>
    </div>
</body>

</html>