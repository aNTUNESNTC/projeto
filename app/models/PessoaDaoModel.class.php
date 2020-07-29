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

    public function create(){  
        $conn = PdoConnection::getInstance();
        
        $stmt = $conn->prepare("INSERT INTO pessoa(nome,cpf,dataNascimento,dhGravacao) values (:N,:C,:D,:DN)");

        $nome = "joao";
        $cpf = "123";
        $dataNascimento = "2020-25-10";
        $dtGravacao = "2020-25-10 20:00:00";

        $stmt->bindParam(":N",$nome);
        $stmt->bindParam(":C",$cpf);
        $stmt->bindParam(":DN",$dataNascimento);
        $stmt->bindParam(":DG",$dtGravacao);
        $resultado = $stmt->execute(); 
        $id = $conn->lastInsertId();
        echo $resultado;

    }

    public function update(){
    }

    public function delete(){
    }

}