<?php

include_once 'Request.php';
include_once 'Router.php';

$routes = new Router(new Request);
$routes->get('/',function(){
    View::render('empresa');
});

$routes->post('/funcionarios/create',function($request){
   FuncionarioController::getInstance()->create($request);
});

$routes->post('/empresas/create',function($request){
    EmpresaController::getInstance()->create($request);
});

$routes->post('/funcionarios/update',function(){

});

$routes->post('/empresas/update',function(){

});

$routes->get('/funcionarios/delete',function($id){
    FuncionarioController::getInstance()->delete($id);
});

$routes->get('/empresas/delete',function($id){
    EmpresaController::getInstance()->delete($id);
});