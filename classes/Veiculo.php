<?php 

    class Veiculo{

    public static function cadastrarVeiculo($nomev, $preco, $cambio, $km, $combustivel, $imagem1, $imagem2, $imagem3, $espec1, $espec2, $espec3, $espec4)
    {
        $sql = MySql::conectar()->prepare("INSERT INTO `veiculos` VALUES (null,?,?,?,?,?,?,?,?,?,?,?,?)");
        $sql->execute(array($nomev, $preco, $cambio, $km, $combustivel, $imagem1, $imagem2, $imagem3, $espec1, $espec2, $espec3, $espec4));
    }
    }

?>