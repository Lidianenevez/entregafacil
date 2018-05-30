<?php
function conexao(){
	
	try {
	  	$pdo = new PDO('mysql:host=localhost; dbname=entregafacil', 'root','');

	  } catch (PDOException $e){
	  	echo "Erro ao conectar com MYSQL: " . $e->getMessage();
	  }
	  return $pdo;
	}