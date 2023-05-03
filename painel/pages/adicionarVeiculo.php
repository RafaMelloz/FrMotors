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
<br>
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

        $espec1 = $_POST['txtEspe1'];
        $espec2 = $_POST['txtEspe2'];
        $espec3 = $_POST['txtEspe3'];
        $espec4 = $_POST['txtEspe4'];

        $veiculo = new Veiculo();


        $veiculo = new Veiculo();
        $imagem1 = Painel::uploadFile($imagem1);
        $imagem2 = Painel::uploadFile($imagem2);
        $imagem3 = Painel::uploadFile($imagem3);
        $veiculo->cadastrarVeiculo($nomev, $preco, $cambio, $km, $combustivel, $imagem1, $imagem2, $imagem3, $espec1, $espec2, $espec3, $espec4);
        echo '<script>Veículo inserido com sucesso!</script>';
    }
    ?>


    <div class="row">
        <div class="col-md-4">
            <label>Nome do veículo:</label>
            <input class="form-control" type="text" name="txtNomeVeiculo" id="txtNomeVeiculo" onblur="validarForm()">
        </div>

        <div class="col-md-2">
            <label>Preço:</label>
            <input class="form-control" type="text" name="txtPreco" id="txtPreco" onblur="validarForm()">
        </div>

        <div class="col-md-2">
            <label>Cambio:</label>
            <input class="form-control" type="text" name="txtCambio" id="txtCambio" onblur="validarForm()">
        </div>

        <div class="col-md-2">
            <label>Quilometragem:</label>
            <input class="form-control" type="text" name="txtKm" id="txtKm" onblur="validarForm()">
        </div>

        <div class="col-md-2">
            <label>Combustivel:</label>
            <input class="form-control" type="text" name="txtCombs" id="txtCombs" onblur="validarForm()">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-4">
            <label>Foto(1):</label>
            <input class="form-control" type="file" name="fotoUm" id="fotoUm" onblur="validarForm()">
        </div>

        <div class="col-md-4">
            <label>Foto(2):</label>
            <input class="form-control" type="file" name="fotoDois" id=" fotoDois">
        </div>

        <div class="col-md-4">
            <label>Foto(3):</label>
            <input class="form-control" type="file" name="fotoTres" id="fotoTres">
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
</script>