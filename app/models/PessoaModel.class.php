<?php

class PessoaModel{  
    
    public int $id;
    public string $nome;
    public string $cpf;
    public string $dataNascimento;
    public string $dhGravacao;

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