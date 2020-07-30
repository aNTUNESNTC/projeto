<?php

class FuncionarioDaoModel{

    private static $instance = NULL;

    public function __construct(){
        
    }

    public function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new FuncionarioDaoModel();
            return self::$instance;
        }
    }

    
    
    public function listAll(){

        require 'FuncionarioModel.class.php';
        
        $conn = PdoConnection::getInstance();

        $stmt = $conn->prepare("select * from funcionario");
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $funcionarios = array();
        
         if($resultado > 0){    
             foreach ($resultado as $linha) {
                $funcionario = new FuncionarioModel();
                foreach ($linha as $chave => $valor) {
                    $funcionario->$chave=$valor;   
                }  
                $funcionarios[] = $funcionario;
            }
            var_dump($funcionarios);
        }
        return $funcionarios;
    }

    public function create(){  
        $conn = PdoConnection::getInstance();
        
        $stmt = $conn->prepare("INSERT INTO funcionario(idPessoa,idEmpresa,salario) values (:IDP,:IDE,:S)");

        $idPessoa = 4;
        $idEmpresa = 2;
        $salario = (double)2.00;
       

        $stmt->bindParam(":IDP",$idPessoa);
        $stmt->bindParam(":IDE",$idEmpresa);
        $stmt->bindParam(":S",$salario);
       
        $resultado = $stmt->execute(); 
        $id = $conn->lastInsertId();
        echo $resultado;
    }

    public function update(){
        $conn = PdoConnection::getInstance();

        $stmt = $conn->prepare("UPDATE funcionario SET idPessoa=:IDP, idEmpresa=:IDE ,salario=:S WHERE id=:ID");
        $id = 1;
        $idPessoa = 4;
        $idEmpresa = 2;
        $salario = (double)300.00;
        
        $stmt->bindParam(":ID",$id);
        $stmt->bindParam(":IDP",$idPessoa);
        $stmt->bindParam(":IDE",$idEmpresa);
        $stmt->bindParam(":S",$salario);
       
        $resultado = $stmt->execute(); 
        echo $resultado;

    }

    public function delete($id_funcionario){
        $conn = PdoConnection::getInstance();

        $res = $conn->prepare("DELETE FROM funcionario WHERE id = :id");
        $res->bindParam(":id",$id_funcionario);
        $res->execute();
    }
    
}