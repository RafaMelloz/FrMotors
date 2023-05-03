<?php
if (isset($_GET['loggout'])) {
    Painel::loggout();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../css/stylePainel.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="sidebars.js"></script>
    <link href="../css/sidebars.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>




    <title>Painel</title>
</head>

<body>
    <!-------IMAGENS DA SIDEBAR--------------->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="home" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
        </symbol>

        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
            <path fill-rule="evenodd" d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </symbol>

        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </symbol>
    </svg>


    <main>
        <div class="d-flex flex-column flex-shrink-0" style="width: 4.5rem; background-color:#020000">
            <div class="d-block p-3 link-dark text-decoration-none" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
                <img src="../images/FRMotors.png" width="40" height="32" alt="">
            </div>

            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center">
                <li>
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>home" class="nav-link py-3 border-bottom" aria-current="page" title="Inicio" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi" width="24" height="24" role="img" aria-label="Inicio">
                            <use xlink:href="#home" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>adicionarVeiculo" class="nav-link py-3 border-bottom" title="Cadastro de veiculos" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi" width="24" height="24" role="img" aria-label="Cadastro de veiculos">
                            <use xlink:href="#speedometer2" />
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>adicionarUsuario" class="nav-link py-3 border-bottom" title="Usuários" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi" width="24" height="24" role="img" aria-label="Usuários">
                            <use xlink:href="#people-circle" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>


        <section style="width:100%">
            <header class="header_painel">
                <a href="<?php INCLUDE_PATH_PAINEL ?>?loggout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
            </header>


            <div class="container">
                <div class="content">
                    <?php Painel::carregarPagina(); ?>
                </div>
            </div>

        </section>
    </main>








</body>

</html>