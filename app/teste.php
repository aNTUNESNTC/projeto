<?php

require 'connections/PdoConnection.class.php';
require 'models/PessoaDaoModel.class.php';

$pdo = PdoConnection::getInstance();


/*
$stmt = $pdo->prepare("select * from pessoa");
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);


$res = $pdo->prepare("INSERT INTO pessoa(nome, cpf, dataNascimento, dtGravacao) VALUES (:N,:C,:DN,:DG)");

$nome = "joao";
$cpf = "123";
$dataNascimento = "2020-25-10";
$dtGravacao = 2020-25-10 20:00:00;

$res->bindParam(":N",$nome);
$res->bindParam(":C",$cpf);
$res->bindParam(":DN",$dataNascimento);
$res->bindParam(":DG",$dtGravacao);
$resultado = $res->execute(); 
$id = $pdo->lastInsertId();
echo $resultado;


$res = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
$id = 1;
$res->bindParam(":id",$id);
$res->execute();
*/

$test = PessoaDaoModel::getInstance();
$test = PessoaDaoModel::listAll();


