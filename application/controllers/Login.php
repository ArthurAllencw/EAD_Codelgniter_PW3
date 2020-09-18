<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function validarLogin(){

        $usuario = $this->input->post("user");
        //user e pass é o name do input da view/form
        $senha = $this->input->post("pass");

        if(empty($usuario)){
            echo "ErroUsuario";
            die();
        }

        if(empty($senha)){
            echo "ErroSenha";
            die();
        }

        echo "Sucesso";
        
    }
}