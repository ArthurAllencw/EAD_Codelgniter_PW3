<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CadastrosModel extends CI_Model {

    public function CadastrarUsuario($dados)
    {
        return $this->db->insert('Usuario', $dados);
    }

}