<style>
    .botaoCadastro {
        color: white;
        background: #ff26007e;
        border-radius: 6px;
        border: 1px solid black;
        width: 100%;
        padding: 7px;
    }
</style>
<br><br>
<h3>Inserção de veiculos</h3>

<form method="post" enctype="multipart/form-data">


    <?php
    if (isset($_POST['cadastraVeiculo'])) {
        $nomev = $_POST['txtNomeVeiculo'];
        $preco   = $_POST['txtPreco'];
        $cambio  = $_POST['txtCambio'];
        $km = $_POST['txtKm'];
        $combustivel = $_POST['txtCombs'];

        $imagem1 = $_FILES['fotoUm'];
        $imagem2 = $_FILES['fotoDois'];
        $imagem3 = $_FILES['fotoTres'];
        $imagem4 = $_FILES['fotoQuatro'];
        $imagem5 = $_FILES['fotoCinco'];

        $espec1 = $_POST['txtEspe1'];
        $espec2 = $_POST['txtEspe2'];
        $espec3 = $_POST['txtEspe3'];
        $espec4 = $_POST['txtEspe4'];
        $espec5 = $_POST['txtEspe5'];
        $espec6 = $_POST['txtEspe6'];
        $espec7 = $_POST['txtEspe7'];
        $espec8 = $_POST['txtEspe8'];
        $espec9 = $_POST['txtEspe9'];
        $espec10 = $_POST['txtEspe10'];


        $veiculo = new Veiculo();


        $veiculo = new Veiculo();
        $imagem1 = Painel::uploadFile($imagem1);
        $imagem2 = Painel::uploadFile($imagem2);
        $imagem3 = Painel::uploadFile($imagem3);
        $imagem4 = Painel::uploadFile($imagem4);
        $imagem5 = Painel::uploadFile($imagem5);
        $veiculo->cadastrarVeiculo($nomev, $preco, $cambio, $km, $combustivel, $imagem1, $imagem2, $imagem3, $imagem4, $imagem5, $espec1, $espec2, $espec3, $espec4, $espec5, $espec6, $espec7, $espec8, $espec9, $espec10);
        echo '<script>alert("Veículo inserido com sucesso!")</script>';
    }
    ?>


    <div class="row">
        <div class="col-md-4">
            <label>Nome do veículo:</label><span style="color:red"> *</span>
            <input class="form-control" type="text" name="txtNomeVeiculo" id="txtNomeVeiculo" onblur="validarForm()">
        </div>

        <div class="col-md-2">
            <label>Preço:</label><span style="color:red"> *</span>
            <input class="form-control" type="text" name="txtPreco" id="txtPreco" onblur="validarForm()">
        </div>

        <div class="col-md-2">
            <label>Cambio:</label><span style="color:red"> *</span>
            <input class="form-control" type="text" name="txtCambio" id="txtCambio" onblur="validarForm()">
        </div>

        <div class="col-md-2">
            <label>Quilometragem:</label><span style="color:red"> *</span>
            <input class="form-control" type="text" name="txtKm" id="txtKm" onblur="validarForm()">
        </div>

        <div class="col-md-2">
            <label>Combustivel:</label><span style="color:red"> *</span>
            <input class="form-control" type="text" name="txtCombs" id="txtCombs" onblur="validarForm()">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-2" style="width: 20%;">
            <label>Foto(1):</label><span style="color:red"> *</span>
            <input class="form-control" type="file" name="fotoUm" id="fotoUm" onblur="validarForm()">
        </div>

        <div class="col-md-2" style="width: 20%;">
            <label>Foto(2):</label>
            <input class="form-control" type="file" name="fotoDois" id=" fotoDois">
        </div>

        <div class="col-md-2" style="width: 20%;">
            <label>Foto(3):</label>
            <input class="form-control" type="file" name="fotoTres" id="fotoTres">
        </div>

        <div class="col-md-2" style="width: 20%;">
            <label>Foto(4):</label>
            <input class="form-control" type="file" name="fotoQuatro" id="fotoQuatro">
        </div>

        <div class="col-md-2" style="width: 20%;">
            <label>Foto(5):</label>
            <input class="form-control" type="file" name="fotoCinco" id="fotoCinco">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-3">
            <label>Especificações(1)</label>
            <input class="form-control" type="text" name="txtEspe1" id="txtEspe1">
        </div>

        <div class="col-md-3">
            <label>Especificações(2)</label>
            <input class="form-control" type="text" name="txtEspe2" id="txtEspe2">
        </div>

        <div class="col-md-3">
            <label>Especificações(3)</label>
            <input class="form-control" type="text" name="txtEspe3" id="txtEspe3">
        </div>

        <div class="col-md-3">
            <label>Especificações(4):</label>
            <input class="form-control" type="text" name="txtEspe4" id="txtEspe4">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-3">
            <label>Especificações(5)</label>
            <input class="form-control" type="text" name="txtEspe5" id="txtEspe5">
        </div>

        <div class="col-md-3">
            <label>Especificações(6)</label>
            <input class="form-control" type="text" name="txtEspe6" id="txtEspe6">
        </div>

        <div class="col-md-3">
            <label>Especificações(7)</label>
            <input class="form-control" type="text" name="txtEspe7" id="txtEspe7">
        </div>

        <div class="col-md-3">
            <label>Especificações(8):</label>
            <input class="form-control" type="text" name="txtEspe8" id="txtEspe8">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-3">
            <label>Especificações(9)</label>
            <input class="form-control" type="text" name="txtEspe9" id="txtEspe9">
        </div>

        <div class="col-md-3">
            <label>Especificações(10)</label>
            <input class="form-control" type="text" name="txtEspe10" id="txtEspe10">
        </div>
    </div>



    <div class="row" style="justify-content: flex-end">
        <div class="col-md-3">
            <label style="opacity:0">;</label>
            <input type="submit" class="botaoCadastro" disabled id="cadastraVeiculo" name="cadastraVeiculo" value="Cadastrar">
        </div>
    </div>

</form>


<script>
    $(function() {

        $('#txtPreco').maskMoney({
            prefix: 'R$',
            thousands: '.',
            decimal: ',',
            affixesStay: true
        });




    })

    function validarForm() {
        var valNome = document.getElementById('txtNomeVeiculo').value;
        var valPreco = document.getElementById('txtPreco').value;
        var valCambio = document.getElementById('txtCambio').value;
        var valkm = document.getElementById('txtKm').value;
        var valCombus = document.getElementById('txtCombs').value;
        var valFile = document.getElementById('fotoUm').value;
        var botaoCadastro = document.getElementById("cadastraVeiculo");

        if (valNome != '' && valPreco != '' && valCambio != '' && valkm != '' && valCombus != '' && valFile != '') {
            botaoCadastro.disabled = false;
        } else {
            botaoCadastro.disabled = true;
        }
    }


    const inputNome = document.getElementById("txtNomeVeiculo");

    inputNome.addEventListener("keyup", function(event) {
        let str = inputNome.value;
        str = str.charAt(0).toUpperCase() + str.slice(1);
        inputNome.value = str;
    });
</script>