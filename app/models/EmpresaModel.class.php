<?php

class EmpresaModel{

    public int $id;
    public string $razaoSocial;
    public string $cnpj;

    public function __construct(){   
    }
    public function __get($atributo){
        return this->atributo;
    }
    public function __set(){
        $this->atributo=$valor;
    }
}