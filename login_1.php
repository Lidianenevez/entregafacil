<?php
include_once("pdo.php");
$pdo = conexao();
if (isset($_POST['btnlogin']) && ($_POST['btnlogin'])=="Login" )

 {

	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$senhalogin = md5($senha);

	$sql = $pdo->prepare("SELECT * FROM usuarios where email = :email and senha = :senha");

		$sql->bindParam(':email', $email, PDO::PARAM_STR);
		$sql->bindParam(':senha', $senhal, PDO::PARAM_STR);

		$login = $sql ->execute();
		if ($login) {
			header("Location:contact.php");

			
		}else{
			header("Location:index.php");
			echo "";
		}
}
		