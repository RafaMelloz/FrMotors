<?php
include('../topmenu.php');

$id = $_GET['id']; // Recupera o valor do ID da URL
$conn = mysqli_connect("Localhost", "root", '150605R$fa', "frmotors");
$resultado = mysqli_query($conn, "SELECT * FROM veiculos WHERE ID = $id");
$row = mysqli_fetch_assoc($resultado);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

    <style>
        body {
            background-color: rgb(32, 32, 32);
        }
    </style>
</head>

<body>
    <div class="container">
        <div style="height: 5px; width:10%; background-color: #d332157e; border-radius: 60px;"></div>
        <br>
        <div id="flex" style="display: flex;">
            <div id="Indicadores" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#Indicadores" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#Indicadores" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#Indicadores" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <img src="../painel/uploads/<?php echo $row["fotoUm"] ?>" class="d-block w-100" style="height: 100%!important;">
                    </div>
                    
                    <?php if (isset($row["fotoDois"]) && $row["fotoDois"] != "") { ?>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../painel/uploads/<?php echo $row["fotoDois"] ?>" class="d-block w-100" style="height: 100%!important;">
                        </div>
                    <?php } ?>

                    <?php if (isset($row["fotoTres"]) && $row["fotoTres"] != "") { ?>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="../painel/uploads/<?php echo $row["fotoTres"] ?>" class="d-block w-100" style="height: 100%!important;">
                        </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#Indicadores" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Anterior</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#Indicadores" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Proximo</span>
                </button>
            </div>

            <div class="formulario">
                <h2><?php echo $row["nomeVeiculo"] ?></h2>
                <h4><?php echo $row["valorVeiculo"] ?></h4>
                <form id="fmlProposta" action="https://formsubmit.co/rafaelmeloalvessouza@gmail.com" method="POST">
                    <h5>Nos envie sua proposta!</h6>
                        <input class="form-control" name="txtNome" id="txtNome" type="text" placeholder="Insira seu nome" onblur="validaForm()">
                        <input class="form-control" name="txtEmail" id="txtEmail" type="Email" placeholder="Insira seu email" onblur="validaForm()">
                        <input class="form-control" name="txtTel" id="txtTel" type="text" placeholder="Insira seu telefone" onblur="validaForm()">
                        <textarea class="form-control" name="txtComent" id="txtComent" rows="5" style="resize: none;" placeholder="Ola, gostaria de saber sobre..." onblur="validaForm()"></textarea>
                        <div id='recaptcha' class="g-recaptcha" data-sitekey="CHAVE DO SITE" data-callback="sendForm" data-size="invisible"></div>
                        <div class="d-grid gap-1">
                            <input type="hidden" name="_captcha" value="false">
                            <input type="hidden" name="_next" value="<?php echo INCLUDE_PATH ?>pages/agradecimento.php">
                            <input type="submit" id="envia" class="btn btn-primary" value="Enviar" disabled>

                        </div>
                </form>
            </div>
        </div>


        <br>
        <div style="height: 5px; width:10%; background-color: #d332157e; border-radius: 60px; float: right;"></div>
        <br>
        <div style="clear: both;"></div>
    </div>

    <div class="container" style="padding: 0 25px;">
        <div class="row" style="border-radius: 6px;border:1px solid #d332157e;padding: 15px;">
            <h3>Especificações:</h3>
            <div class="col-md-3">
                <ul>
                    <li><?php echo $row["EspeciUm"] ?></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><?php echo $row["EspeciDois"] ?></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><?php echo $row["EspeciTres"] ?></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li><?php echo $row["EspeciQuatro"] ?></li>
                </ul>
            </div>
        </div>
    </div>
    <br>
    <footer>

    </footer>



    <script>
        $(document).ready(function() {
            $('#txtTel').inputmask('(99)9999-9999');
        });

        //validação email
        var inputEmail = $('#txtEmail');

        inputEmail.on('blur', function() {

            var email = inputEmail.val();

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailRegex.test(email)) {
                alert('Por favor, insira um endereço de email válido.');
                inputEmail.val(''); // Limpa o campo de entrada
            }
        });
        ////////////////////////////////

        //mascara só para numero
        var input = $('#txtNome');

        input.on('keypress', function(event) {
            var charCode = event.which;

            if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123)) {
                return true;
            } else {
                event.preventDefault();
            }
        });
        ///////////////////////////////


        function validaForm() {
            var valNome = document.getElementById('txtNome').value;
            var valEmail = document.getElementById('txtEmail').value
            var valTel = document.getElementById('txtTel').value;
            var valComentario = document.getElementById('txtComent').value;
            var BotaoEnvio = document.getElementById("envia");


            if (valNome != '' && valEmail != '' && valTel != '' && valComentario != '') {
                BotaoEnvio.disabled = false;
            } else {
                BotaoEnvio.disabled = true;

            }
        }
    </script>


</body>



</html>