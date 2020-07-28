<?php

class EmpresaDaoModel{

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
    }

    public function update(){
    }

    public function delete(){
    }


}