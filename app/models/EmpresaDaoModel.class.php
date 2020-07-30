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

        $empresas = array();
        
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

    public function create($empresa){  
        $conn = PdoConnection::getInstance();
        
        $stmt = $conn->prepare("INSERT INTO empresa(razaoSocial,cnpj) values (:RZ,:CNPJ)");

        $stmt->bindParam(":RZ",$empresa->razaoSocial);
        $stmt->bindParam(":CNPJ",$empresa->cnpj);
        $resultado = $stmt->execute(); 
        // $id = $conn->lastInsertId();
        return $resultado;
        
    }

    public function update(){
        $conn = PdoConnection::getInstance();

        $stmt = $conn->prepare("UPDATE empresa SET razaoSocial=:RZ, cnpj=:CNPJ WHERE id=:ID");
        $id = 3;
        $razaoSocial = "eqeq";
        $cnpj = "1eqeqe23";
       
        
        $stmt->bindParam(":ID",$id);
        $stmt->bindParam(":RZ",$razaoSocial);
        $stmt->bindParam(":CNPJ",$cnpj);
        $resultado = $stmt->execute(); 
        echo $resultado;
    }

    public function delete($id_empresa){
        $conn = PdoConnection::getInstance();

        $res = $conn->prepare("DELETE FROM empresa WHERE id = :id");

        $res->bindParam(":id",$id_empresa);
        $res->execute();
    }
    
}