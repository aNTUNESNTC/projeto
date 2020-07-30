<?php

class EmpressaController{

    private static $instance = NULL;

    public function __construct(){
    }

    public function getInstance(){
      if(is_null(self::$instance)){
         self::$instance = new EmpresaController();
         return self::$instance;
      }
    }

   public function listAll(){
     $empresas = EmpresaDaoModel::getInstance()->listAll();
     $resposta = array('empresas'=>$empresas);

     View::render('empresas',$resposta);
   } 

   public function create(){  
  }

  public function update(){
  }

  public function delete($request){
    // $data = $request->getBody();
    $id_empresa = $request;
    $resultado = EmpresaDaoModel::getInstance()->delete($id_empresa);
  }
  
}