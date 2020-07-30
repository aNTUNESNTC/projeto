<?php

class FuncionarioController{
    
    private static $instance = NULL;

    public function __construct(){
    }

    public function getInstance(){
      if(is_null(self::$instance)){
         self::$instance = new FuncionarioController();
         return self::$instance;
      }
    }

   public function listAll(){
     $funcionarios = FuncionarioDaoModel::getInstance()->listAll();
     $resposta = array('funcionarios'=>$funcionarios);

     View::render('funcionarios',$resposta);
   } 

   public function create(){  
  }

  public function update(){
  }

  public function delete($request){
    $data = $request->getBody();
    $id_funcionario = $request;
    $resultado = FuncionarioDaoModel::getInstance()->delete($id_funcionario);
  }
  

}