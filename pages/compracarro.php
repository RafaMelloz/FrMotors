<?php include('../topmenu.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>

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
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../images/carroexenplo.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/carroexenplo.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../images/carroexenplo.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="formulario">
                <h2>V6 Comfortline</h2>
                <h4>R$100.000,00</h4>
                <form id="fmlProposta">
                    <h5>Nos envie sua proposta!</h6>
                        <input class="form-control" type="text" placeholder="Insira seu nome">
                        <input class="form-control" type="text" placeholder="Insira seu email">
                        <input class="form-control" type="text" placeholder="Insira seu telefone">
                        <textarea class="form-control" id="" rows="5" style="resize: none;" placeholder="Ola, gostaria de sabre sobre..."></textarea>
                        <div id='recaptcha' class="g-recaptcha" data-sitekey="CHAVE DO SITE" data-callback="sendForm" data-size="invisible"></div>
                        <div class="d-grid gap-1">
                            <input type="submit" class="btn btn-primary" value="Enviar">
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
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                    <li>.</li>
                </ul>
            </div>
        </div>
    </div>




    <br>
    <footer>

    </footer>




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</body>

</html>