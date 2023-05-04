<?php include('topmenu.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FR MOTORS</title>
    <style>
        body {
            background-color: rgb(32, 32, 32);
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Veículos em destaque</h3>

        <div style="height: 5px; width:10%; background-color: #d332157e; border-radius: 60px;"></div>
        <br>

        <div class="row">

            <?php
                $conn = mysqli_connect("Localhost", "root", '150605R$fa', "frmotors");
                    $resultado = mysqli_query($conn, "SELECT * FROM veiculos");

                        // Loop pelos resultados
                        while ($row = mysqli_fetch_assoc($resultado)) {

                            echo '<div class="col-md-3" style="margin-bottom: 20px; min-width: 260px;">
                                    <div class="card h-100">
                                        <img src="painel/uploads/'.$row["fotoUm"]. '" class="card-img-top" style="min-height: 172.66!important; " alt="...">
                                        <div class="card-body">

                                            <h5 class="card-title">'. $row["nomeVeiculo"] . '</h5>
                                            <hr>
                                            <ul>
                                                <li><b>Cambio:</b> ' . $row["cambio"] . '</li>
                                                <li><b>Quilometragêm:</b> ' . $row["km"] . '</li>
                                                <li><b>Combustivel:</b> ' . $row["combustivel"] . '</li>
                                            </ul>
                                            <hr>
                                            <h5>Por: ' . $row["valorVeiculo"] . '</h5>
                                            <div class="d-grid gap-1">
                                                <a href="pages/compracarro.php?id='.$row["ID"].'" class="btn btn-primary">VER MODELO</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                        }

                mysqli_close($conn);
            ?>

        </div>
        <br>
        <div style="height: 5px; width:10%; background-color: #d332157e; border-radius: 60px; float: right;"></div>
    </div>

    <br>
    <footer>

    </footer>




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>