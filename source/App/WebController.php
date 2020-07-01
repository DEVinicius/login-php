<?php 

namespace Source\App;

use League\Plates\Engine;

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
}