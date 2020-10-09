<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrosModel extends CI_Model {

    /*Validações Tela de Cadastro*/

    public function CadastrarUsuario($dados)
    {
        return $this->db->insert('Usuario', $dados);
    }

    public function VerificarUserName($userName)
    {
        $this->db->where('userName', $userName);
        $linhaUser = $this->db->get("Usuario")->row_array();
        return $linhaUser;
    }

    public function VerificarCPF($cpf)
    {
        $this->db->where('cpf', $cpf);
        $linhaCPF = $this->db->get("Usuario")->row_array();
        return $linhaCPF;
    }

    public function VerificarEmail($email)
    {
        $this->db->where('email', $email);
        $linhaEmail = $this->db->get("Usuario")->row_array();
        return $linhaEmail;
    }

}