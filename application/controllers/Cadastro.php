<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

    public function validarCadastro(){

        $dados = [
            'nome' => $this->input->post("nome"),
            'email' => $this->input->post("email"),
            'userName' => $this->input->post("userName"),
            'senha' => $this->input->post("senha"),
            'tipo' => "cliente",
            'cpf' => $this->input->post("cpf"), 
        ];
        $confSenha = $this->input->post("confSenha");

        if(empty($dados['nome'])){
            echo "ErroNome";
            die();
        }

        if(empty($dados['userName'])){
            echo "ErroUserName";
            die();
        }

        if(empty($dados['cpf'])){
            echo "ErroCPF";
            die();
        }

        if(empty($dados['email'])){
            echo "ErroEmail";
            die();
        }

        if(empty($dados['senha'])){
            echo "ErroSenha";
            die();
        }

        if(empty($confSenha)){
            echo "ErroConfSenha";
            die();
        }

        if($confSenha != $dados['senha']){
            echo "ErroSenhaNaoConfere";
            die();
        }

        $this->load->model('CadastrosModel');

        if($this->CadastrosModel->CadastrarUsuario($dados)){
            echo "Sucesso";
            die();
        }
        else{
            echo "ErroCadastro";
            die();
        }
    }
}