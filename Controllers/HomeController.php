<?php
namespace Controllers;

use \Core\Controller;
use \Models\Usuario;

class HomeController extends Controller{
    public function index(){
        $usuario = new Usuario();

        $dados = array(
            'nome' => $usuario->getNome(),
        );

        $this->loadTemplate('home',$dados);
    }

}