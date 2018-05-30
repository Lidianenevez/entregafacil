<?php
include_once("pdo.php");

$pdo = conexao();
if (isset($_POST['btn'])) {
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$celular = $_POST['celular'];
$pedido = $_POST['pedido'];


#@$data = now(); 
#@$hora = time(); 

// Preparando o INSERT
$stmt = $pdo->prepare("INSERT INTO dados_pedido
VALUES (null, :nome, :endereco, :cep, :celular, :pedido, NOW(), null");

$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':endereco', $endereco, PDO::PARAM_STR);
$stmt->bindParam(':cep', $cep, PDO::PARAM_STR);
$stmt->bindParam(':celular', $celular, PDO::PARAM_STR);
$stmt->bindParam(':pedido', $pedido, PDO::PARAM_STR) ;
 $linda = $stmt->execute();
 return $linda;
}
// Inserindo o arquivo no BD
#$pdo->beginTransaction();

#$stmt->execute();
#$pdo->commit();

			
