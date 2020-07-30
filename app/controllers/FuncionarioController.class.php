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

   public function create($request){  
    $form = $request->getBody();
    $funcionario = new FuncionarioModel();
    $funcionario->salario = $form['salario'];
    $resultado = FuncionarioDaoModel::getInstance()->update($funcionario);
  }

  public function update(){
    $form = $request->getBody();
    $funcionario = new FuncionarioModel();
    $funcionario->id = $form['id'];
    $funcionario->salario = $form['salario'];
    $resultado = FuncionarioDaoModel::getInstance()->update($funcionario);
  }

  public function delete($request){
    // $data = $request->getBody();
    $id_funcionario = $request;
    $resultado = FuncionarioDaoModel::getInstance()->delete($id_funcionario);
  }
  

}