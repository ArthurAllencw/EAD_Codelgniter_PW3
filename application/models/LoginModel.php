<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

    public function logarUsuario($usuario, $senha){

        $sqlLogin = "(email = '$usuario' OR userName = '$usuario') AND senha = '$senha' AND ativo=1 ";
        $this->db->where($sqlLogin);

        $resultado = $this->db->get("Usuario")->row_array();

        return $resultado;

    }
}