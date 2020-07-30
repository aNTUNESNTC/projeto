<?php

class EmpresaController{

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

   public function create($request){ 
    $form = $request->getBody();
    $empresa = new EmpresaModel();
    $empresa->razaoSocial = $form['razaoSocial'];
    $empresa->cnpj = $form['cnpj'];
    $resultado = EmpresaDaoModel::getInstance()->create($empresa);

  }

  public function update(){
    $form = $request->getBody();
    $empresa = new EmpresaModel();
    $empresa->id = $form['id'];
    $empresa->razaoSocial = $form['razaoSocial'];
    $empresa->cnpj = $form['cnpj'];
    $resultado = EmpresaDaoModel::getInstance()->update($empresa);
  }

  public function delete($request){
    // $data = $request->getBody();
    $id_empresa = $request;
    $resultado = EmpresaDaoModel::getInstance()->delete($id_empresa);
  }

}