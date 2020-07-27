 <?php

 class PessoaController{
   
   private static $instance = NULL;

    public function __construct(){
    }

    public function getInstance(){
      if(is_null(self::$instance)){
         self::$instance = new PessoaController();
         return self::$instance;
      }
    }

   public function listAll(){
     $pessoas = PessoaDaoModel::getInstance()->listAll();
     $resposta = array('pessoas'=>$pessoas);

   }   
}