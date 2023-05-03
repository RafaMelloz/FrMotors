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
    <div class="row">
        <div class="col-md-4">
            <label>Nome do veículo:</label>
            <input class="form-control" type="text" name="user" id="user" onblur="validaForm()">
        </div>

        <div class="col-md-2">
            <label>Preço:</label>
            <input class="form-control" type="text" name="user" id="user" onblur="validaForm()">
        </div>

        <div class="col-md-2">
            <label>Cambio:</label>
            <input class="form-control" type="text" name="user" id="user" onblur="validaForm()">
        </div>

        <div class="col-md-2">
            <label>Quilometragem:</label>
            <input class="form-control" type="text" name="user" id="user" onblur="validaForm()">
        </div>

        <div class="col-md-2">
            <label>Combustivel:</label>
            <input class="form-control" type="text" name="user" id="user" onblur="validaForm()">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-4">
            <label>Foto(1):</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <div class="col-md-4">
            <label>Foto(2):</label>
            <input class="form-control" type="file" id="formFile">
        </div>

        <div class="col-md-4">
            <label>Foto(3):</label>
            <input class="form-control" type="file" id="formFile">
        </div>
    </div>

    <br>

    <div class="row">
        <div class="col-md-3">
            <label>Especificações(1)</label>
            <input class="form-control" type="text" name="user" id="user" onblur="validaForm()">
        </div>

        <div class="col-md-3">
            <label>Especificações(2)</label>
            <input class="form-control" type="text" name="user" id="user" onblur="validaForm()">
        </div>

        <div class="col-md-3">
            <label>Especificações(3)</label>
            <input class="form-control" type="text" name="user" id="user" onblur="validaForm()">
        </div>

        <div class="col-md-3">
            <label>Especificações(4):</label>
            <input class="form-control" type="text" name="user" id="user" onblur="validaForm()">
        </div>
    </div>

    <br>

    <div class="row" style="justify-content: flex-end">
        <div class="col-md-3">
            <label style="opacity:0">;</label>
            <input type="submit" disabled class="botaoCadastro" id="cadastraUser" name="cadastraUser" value="Cadastrar">
        </div>
    </div>

</form>