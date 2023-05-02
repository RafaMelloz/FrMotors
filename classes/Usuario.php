<?php
	
	class Usuario{


		public static function userExists($NovoUser){
			$sql = MySql::conectar()->prepare("SELECT `id` FROM `users_admin` WHERE user=?");
			$sql->execute(array($NovoUser));
			if($sql->rowCount() == 1)
				return true;
			else
				return false;
		}

		public static function cadastrarUsuario($NovoUser, $NovaSenha){
			$sql = MySql::conectar()->prepare("INSERT INTO `users_admin` VALUES (null,?,?)");
			$sql->execute(array($NovoUser, $NovaSenha));
		}
	}
