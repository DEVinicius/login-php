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
            "title" => "Login",
            "warning" => null
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
            "title" => "Cadastro",
            "warning" => null
        ]);
    }

    //Funções de interação com a Model
    public function create($data){
        $web = new Web();
        //criptografar a senha
        if(null !== $web->verify($data['email'])){
            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
            $web->setUser($data['name'], $data['email'], $data['password']);
            $web->create();

            echo $this->view->render("login",[
                "title" => "Cadastro",
                "warning" => null
            ]);
        }
        else{
            echo $this->view->render("sign_up",[
                "title" => "Cadastro",
                "warning" => "Usuario já existente"
            ]);
        }
    }

    public function login($data){
        $web = new Web();
        $verify = $web->verify($data['email']);

        if($data['email'] == $verify['email'] && password_verify($data['password'],$verify['passwd'])){
            session_start();
            $_SESSION['name'] = $verify['name'];
            $_SESSION['email'] = $verify['email'];

            echo $this->view->render("home",[
                "title" => "Home"
            ]);
        }
        else{
            echo $this->view->render("login",[
                "title" => "Cadastro",
                "warning" => "Usuario ou Senha incorretos"
            ]);
        }
    }
}