<?php

class PessoaModel{  
    
    public $id;
    public $nome;
    public $cpf;
    public $dataNascimento;
    public $dhGravacao;

    public function __construct(){
    }
    public function __get($atributo){
        return $this->atributo;
    }
    public function __set($atributo, $valor){
        $this->atributo=$valor;
    }
    public function getDate(){
        return $this->dataNascimento;
    }
}