<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function logarUsuario($email, $senha)
    {
        $this->db->where("userName", $email);
        $this->db->or_where("email", $email);
        $this->db->where("senha", $senha);

        $resultado = $this->db->get("Usuario")->row_array();
        return $resultado;
    }
}