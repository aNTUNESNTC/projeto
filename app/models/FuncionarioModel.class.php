<?php

class FuncionarioModel extends PessoaModel{

    public int $id;
    public int $idPessoa;
    public int $idEmpresa;
    public double $salario;

    public function __construct(){   
    }
    public function __get($atributo){
        return $this->atributo;
    }
    public function __set($atributo,$valor){
        $this->atributo=$valor;
    }
}