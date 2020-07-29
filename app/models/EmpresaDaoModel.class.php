<?php

class EmpresaDaoModel{

    private static $instance = NULL;

    public function __construct(){
    }

    public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new EmpresaDaoModel();
            return self::$instance;
        }
    }

    public function listAll(){

        require 'EmpresaModel.class.php';
        
        $conn = PdoConnection::getInstance();

        $stmt = $conn->prepare("select * from empresa");
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pessoas = array();
        
         if($resultado > 0){    
             foreach ($resultado as $linha) {
                $empresa = new EmpresaModel();
                foreach ($linha as $chave => $valor) {
                    $empresa->$chave=$valor;   
                }  
                $empresas[] = $empresa;
            }
            
        }

        return $empresas;
    }

    public function create(){  
        $conn = PdoConnection::getInstance();
        
        $stmt = $conn->prepare("INSERT INTO empresa(razaoSocial,cnpj) values (:RZ,:CNPJ)");

        $razaoSocial = "teste";
        $cnpj = "teste";

        $stmt->bindParam(":RZ",$razaoSocial);
        $stmt->bindParam(":CNPJ",$cnpj);
        $resultado = $stmt->execute(); 
        $id = $conn->lastInsertId();
        echo $resultado;
        var_dump($resultado);
    }

    public function update(){
    }

    public function delete(){
        $conn = PdoConnection::getInstance();

        $res = $conn->prepare("DELETE FROM empresa WHERE id = :id");
        $id = 1;
        $res->bindParam(":id",$id);
        $res->execute();
    }
    
}