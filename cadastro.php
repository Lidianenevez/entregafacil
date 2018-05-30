<?php 
include_once("pdo.php");


@$email = $_POST['email'];
@$senha = $_POST['senha'];
$senha = md5($senha);
$pdo = conexao();


			$stmt = $pdo->prepare('INSERT INTO usuarios 
			 VALUES (null, :email, :senha)');

$stmt->bindParam(':email', $email, PDO::PARAM_STR);
$stmt->bindParam(':senha', $senha,  PDO::PARAM_STR);


// Inserindo o arquivo no BD
$grava = $stmt->execute();

return $grava;

if (isset($_POST['btnlogin']) && ($_POST['btnlogin'])=="Login" )

 {

	$email = $_POST['email'];
	$senhal = $_POST['senha'];
	$senhal = md5($senhalogin);

	$sql = $pdo->prepare("SELECT * FROM usuarios where email = :email and senha = :senha");

		$sql->bindParam(':email', $emaillogin, PDO::PARAM_STR);
		$sql->bindParam(':senha', $senhalogin, PDO::PARAM_STR);

		$login = $sql ->execute();
		if ($login) {
			header("Location:contact.php");

			
		}else{
			header("Location:index.php");
			echo "";
		}
}

?>

