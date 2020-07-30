<?php

class PessoaDaoModel{

    private static $instance = NULL;

    public function __construct(){     
    }
    
    public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new PessoaDaoModel();
            return self::$instance;
        }
    }

    public function listAll(){

        require 'PessoaModel.class.php';
        
        $conn = PdoConnection::getInstance();

        $stmt = $conn->prepare("select * from pessoa");
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pessoas = array();
        
         if($resultado > 0){    
             foreach ($resultado as $linha) {
                $pessoa = new PessoaModel();
                foreach ($linha as $chave => $valor) {
                    $pessoa->$chave=$valor;   
                }  
                $pessoas[] = $pessoa;
            }
        }
        return $pessoas;
    }

    public function create($pessoa){  
        $conn = PdoConnection::getInstance();
        
        $stmt = $conn->prepare("INSERT INTO pessoa(nome,cpf,dataNascimento,dtGravacao) values (:N,:C,:DN,:DG)");

        $stmt->bindParam(":N",$nome);
        $stmt->bindParam(":C",$cpf);
        $stmt->bindParam(":DN",$dataNascimento);
        $stmt->bindParam(":DG",$dtGravacao);
        $resultado = $stmt->execute(); 
        // $id = $conn->lastInsertId();
        return $resultado;
    }

    public function update(){
        $conn = PdoConnection::getInstance();

        $stmt = $conn->prepare("UPDATE pessoa SET nome=:N, cpf=:C ,dataNascimento=:DN ,dtGravacao=:DG WHERE id=:ID");
        $id = 4;
        $nome = "SCHONS";
        $cpf = "789";
        $dataNascimento = "2020-25-04";
        $dtGravacao = "2020-25-10 20:20:00";
        
        $stmt->bindParam(":ID",$id);
        $stmt->bindParam(":N",$nome);
        $stmt->bindParam(":C",$cpf);
        $stmt->bindParam(":DN",$dataNascimento);
        $stmt->bindParam(":DG",$dtGravacao);
        $resultado = $stmt->execute(); 
        echo $resultado;

    }

    public function delete($id_pessoa){
        $conn = PdoConnection::getInstance();

        $res = $conn->prepare("DELETE FROM pessoa WHERE id = :id");
        $res->bindParam(":id",$id_pessoa);
        $res->execute();
    }
    
}