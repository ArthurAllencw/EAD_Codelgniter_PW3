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
        $this->load->model('CadastrosModel');

        $confSenha = $this->input->post("confSenha");

        $this->session->email = $dados['email'];

        if(empty($dados['nome'])){
            echo "ErroNome";
            die();
        }

        if(empty($dados['userName'])){
            echo "ErroUserName";
            die();
        }

        $linhaUser = $this->CadastrosModel->VerificarUserName($dados['userName']);

        if(!empty($linhaUser['userName'])){
            echo "ErroUsuarioExiste";
            die();
        }

        if(empty($dados['cpf'])){
            echo "ErroCPF";
            die();
        }

        $linhaCPF = $this->CadastrosModel->VerificarCPF($dados['cpf']);

        if(!empty($linhaCPF['cpf'])){
            echo "ErroCpfExiste";
            die();
        }

        if(empty($dados['email'])){
            echo "ErroEmail";
            die();
        }

        $linhaEmail = $this->CadastrosModel->VerificarEmail($dados['email']);

        if(!empty($linhaEmail['email'])){
            echo "ErroEmailExiste";
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