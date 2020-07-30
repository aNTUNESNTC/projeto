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

     View::render('pessoas',$resposta);
   } 

   public function create($request){  
    $form = $request->getBody();
    $pessoa = new PessoaModel();
 
    $pessoa->nome = $form['nome'];
    $pessoa->cpf = $form['cpf'];
    $pessoa->dataNascimento = $form['dataNascimento'];
    $pessoa->dhGravacao = $form['dhGravacao'];
    $resultado = PessoaDaoModel::getInstance()->create($pessoa);
  }

  public function update(){
    $form = $request->getBody();
    $pessoa = new PessoaModel();
    $pessoa->id = $form['id'];
    $pessoa->nome = $form['nome'];
    $pessoa->cpf = $form['cpf'];
    $pessoa->dataNascimento = $form['dataNascimento'];
    $pessoa->dhGravacao = $form['dhGravacao'];
    $resultado = PessoaDaoModel::getInstance()->update($pessoa);
  }

  public function delete($request){
      // $data = $request->getBody();
      $id_pessoa = $request;
      FuncionarioController::getInstance()->delete($id_pessoa);
      $resultado = PessoaDaoModel::getInstance()->delete($id_pessoa);
  }

}