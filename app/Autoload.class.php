<?php

class Autoload{

    public function __contruct(){
        spl_autoload_extensions('.class.php');
        spl_autoload_register(array($this,'load'));
    }

    private function splitClassName($className){
        return preg_split('/(?=[A-Z])/', $className);
    }

    private function getFolderName($className){
        $splitted = $this->splitClassName($className);
        $folder = strtolower(end($splitted)) .'s';
        return $folder;
    }

    private function load($className){
        $extension = spl_autoload_extensions();
        $folder = $this->getFolderName($className);
        $classPathFile = $_SERVER['DOCUMENT_ROOT'] .'/app/' .$folder .'/' .$className .$extension;
        require_once $classPathFile;
    }
    
}

$autoload = new Autoload();