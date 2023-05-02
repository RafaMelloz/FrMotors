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
    <title>Login</title>
</head>

<body>
    <div class="container" style="height:100vh;display: flex;flex-direction: column;justify-content: center;">
        <div class="row" style="justify-content: center">
            <div class="col-md-4" id="caixa">
                <img src="../images/FRMotors.png">
                <br><br>
                <?php
                if (isset($_POST['botaoLogin'])) {
                    $email = $_POST['user'];
                    $senha = $_POST['senha'];
                    $sql = MySql::conectar()->prepare("SELECT * FROM `users_admin` WHERE  user = ? AND senha = ?");
                    $sql->execute(array($email, $senha));
                    if ($sql->rowCount() == 1) {
                        $info = $sql->fetch();
                        //logado
                        $_SESSION['login'] = true;
                        $_SESSION['user'] = $email;
                        $_SESSION['password'] = $senha;
                        header('Location:' . INCLUDE_PATH_PAINEL);
                        die();
                    } else {
                        echo '<div class="erro"><i class="fa fa-times"></i> Usuário ou senha incorretos!</div><br>';
                    }
                }
                ?>
                <form method="POST">
                    <div class="inputs">
                        <input required="" type="text" name="user" id="user" autocomplete="off" class="input">
                        <label class="user-label">Usuário</label>
                    </div>
                    <br>
                    <div class="inputs">
                        <input required="" type="password" name="senha" id="senha" autocomplete="off" class="input">
                        <label class="user-label">Senha</label>
                    </div>
                    <br>
                    <input type="submit" onclick="validaForm()" class="botaoLogin" id="botaoLogin" name="botaoLogin" value="Entrar">
                </form>
            </div>
        </div>
    </div>
</body>

<script>
    function validaForm() {
        var valUser = document.getElementById('user').value
        var valSenha = document.getElementById('senha').value
        var botaoLogin = document.getElementById("botaoLogin")

        if (valUser != '' && valSenha != '') {

        } else {
            alert("Preencha os campos!")
            return false;
        }
    }
</script>

</html>