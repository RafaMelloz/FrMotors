<style>
    .botaoCadastro {
        color: white;
        background: #ff26007e;
        border-radius: 6px;
        border: 1px solid black;
        width: 100%;
        padding: 7px;
    }

    .table-dark {
        --bs-table-striped-bg: #101418 !important;
        --bs-table-bg: #78291a47;

    }
</style>

<br><br>
<h3>Inserção de admins</h3>
<br>

<form method="post" enctype="multipart/form-data" class="row">


    <?php
    if (isset($_POST['cadastraUser'])) {
        $NovoUser = $_POST['user'];
        $NovaSenha = $_POST['senha'];
        $usuario = new Usuario();


        if (Usuario::userExists($NovoUser)) {
            echo '<script>alert("Esse usuário ja existe")</script>';
        } else {
            $usuario = new Usuario();
            $usuario->cadastrarUsuario($NovoUser, $NovaSenha);
            echo '<script>alert("Cadastro efetuado!")</script>';
        }
    }



    ?>
    <div class="col-md-4">
        <label>Usuário</label><span style="color:red"> *</span>
        <input class="form-control" type="text" name="user" id="user" onblur="validaForm()">
    </div>

    <div class="col-md-4">
        <label>Senha</label><span style="color:red"> *</span>
        <input class="form-control" type="password" name="senha" id="senha" onblur="validaForm()">
    </div>

    <div class="col-md-4">
        <label style="opacity:0">Senha</label>
        <input type="submit" disabled class="botaoCadastro" id="cadastraUser" name="cadastraUser" value="Cadastrar">
    </div>
</form>
<br><br>
<?php
// Criação da tabela HTML
// Conexão ao banco de dados
$conn = mysqli_connect("Localhost", "root", '150605R$fa', "frmotors");

// Execução da consulta SQL
$resultado = mysqli_query($conn, "SELECT * FROM users_admin");

// Criação da tabela HTML
echo "<table class='table table-dark table-striped table-bordered' style='color:white!important'>";
echo "<tr>
            <th>Usuários</th>
            <th>Senhas</th>
        </tr>";

// Loop pelos resultados
while ($row = mysqli_fetch_assoc($resultado)) {
    echo "<tr>
            <td>" . $row["user"] . "</td>
            <td>" . $row["senha"] . "</td>
          </tr>";
}

echo "</table>";

mysqli_close($conn); // Fechamento da conexão

?>



<script>
    function validaForm() {
        var valUser = document.getElementById('user').value
        var valSenha = document.getElementById('senha').value
        var botaoLogin = document.getElementById("cadastraUser")

        if (valUser != '' && valSenha != '') {
            botaoLogin.disabled = false;
        } else {
            botaoLogin.disabled = true;
        }
    }
</script>