<?php

class FuncionarioModel{

    public $id;
    public $idPessoa;
    public $idEmpresa;
    public $salario;

    public function __construct(){   
    }
    public function __get($atributo){
        return $this->atributo;
    }
    public function __set($atributo,$valor){
        $this->atributo=$valor;
    }
}