<?php

class View{

    public function __construct(){
    }

    public static function redirect($string){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION['respostas'] = $resposta;
        header('location: '. $string);
    }

    public static function render($string, $resposta = []){
        if(!isset($_SESSION)) session_start();
        foreach ($resposta as $chave => $valor) {
            $_SESSION[$chave] = $valor;
        }
        include($_SERVER['DOCUMENT_ROOT'] . "/app/views/" .$string . ".php");
    }
}