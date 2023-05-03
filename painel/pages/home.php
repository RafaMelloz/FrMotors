
<style>
    .table-dark {
    --bs-table-striped-bg: #101418 !important;
    --bs-table-bg: #78291a47;

    }

    .lixin {
        background: none;
        border: none;
        color: white;
        width: 100%;
    }
</style>

<br><br>
<h3>Inserção de veiculos</h3>
<br>


<?php
// Conexão com o banco de dados
$conn = mysqli_connect("Localhost", "root", '150605R$fa', "frmotors");

// Verifica se o ID do registro foi enviado
if (isset($_POST['id'])) {
    // Remove caracteres perigosos do ID para evitar injeção de SQL
    $id = mysqli_real_escape_string($conn, $_POST['id']);

    // Executa a consulta para excluir o registro
    $sql = "DELETE FROM veiculos WHERE ID = $id";
    if (mysqli_query($conn, $sql)) {
        echo "Registro excluído com sucesso!";
    } else {
        echo "Erro ao excluir registro: " . mysqli_error($conn);
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>



<?php
// Criação da tabela HTML
// Conexão ao banco de dados
$conn = mysqli_connect("Localhost", "root", '150605R$fa', "frmotors");



// Execução da consulta SQL
$resultado = mysqli_query($conn, "SELECT * FROM veiculos");

// Criação da tabela HTML
echo "<table class='table table-dark table-striped table-bordered' style='color:white!important'>";
echo "<tr>
            <th>Nome do Veiculo</th>
            <th>Preço</th>
            <th>Cambio</th>
            <th>Quilometragem </th>
            <th>Combustivel</th>
            <th></th>
        </tr>";

// Loop pelos resultados
while ($row = mysqli_fetch_assoc($resultado)) {
    echo "<tr>
            <td>" . $row["nomeVeiculo"] . "</td>
            <td>" . $row["valorVeiculo"] . "</td>
            <td>" . $row["cambio"] . "</td>
            <td>" . $row["km"] . "</td>
            <td>" . $row["combustivel"] . "</td>
            <td> 
                <form method='post'>
                    <input type='hidden' name='id' value='" . $row['ID'] . "'>
                    <button class='lixin' type='submit' onclick='return confirm('Tem certeza que deseja excluir este registro?')'><i class='fa fa-trash' aria-hidden='true'></i></button>
                </form>
            </td>
          </tr>";
}

echo "</table>";

// Exibe a mensagem de sucesso ou erro se o formulário foi enviado
if (isset($mensagem)) {
    echo $mensagem;
}

mysqli_close($conn);
?>