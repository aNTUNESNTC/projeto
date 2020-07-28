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
    }

    public function update(){
    }

    public function delete(){
    }

}