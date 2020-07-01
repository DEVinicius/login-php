<?php 

namespace Source\App;

use League\Plates\Engine;
use Source\Models\Web;

class WebController{

    private $view;
    
    public function __construct()
    {
        $this->view = new Engine(__DIR__."/../../theme/View/", "php");
    }

    public function index(): void{
        echo $this->view->render("login", [
            "title" => "Login"
        ]);
    }

    public function error($data): void{
        echo  $this->view->render("error", [
            "title" => "Erro",
            "erro" => $data['errcode']
        ]);
    }

    public function signUp():void{
        echo $this->view->render("sign_up",[
            "title" => "Cadastro"
        ]);
    }

    //Funções de interação com a Model
    public function create($data){
        $web = new Web();
        //criptografar a senha
        $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
        $web->setUser($data['name'], $data['email'], $data['password']);
        $web->create();
    }
}