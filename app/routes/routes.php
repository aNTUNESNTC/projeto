<?php

include_once 'Request.php';
include_once 'Router.php';

$routes = new Router(new Request);


$routes->get('/',function(){
    EmpresaController::getInstance()->listAll();
});

$routes->get('/teste',function(){
    header('Location: app/teste.php');
});

$routes->post('/funcionarios/create',function($request){
   FuncionarioController::getInstance()->create($request);
});

$routes->post('/empresas/create',function($request){
    EmpresaController::getInstance()->create($request);
});

$routes->post('/funcionarios/update',function(){

});

$routes->post('/empresa/edit',function($request){

});

$routes->get('/funcionarios/delete',function($id){
    FuncionarioController::getInstance()->delete($id);
});

$routes->get('/empresa/delete',function($request){
    var_dump($request); exit;
    EmpresaController::getInstance()->delete($request);
});