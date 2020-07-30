<?php
class View {

    public function __construct() {
    }

    public static function render($str, $response = []){
        if(!isset($_SESSION)) session_start();
        foreach ($response as $key => $value) {
            $_SESSION[$key] = $value;
        }
        include ($_SERVER['DOCUMENT_ROOT'] . "/app/views/" . $str . ".php");
    }

    public static function redirect($str){
        if(!isset($_SESSION)) session_start();
        $_SESSION['response'] = $response;
        header('location: ' . $str);
    }

}