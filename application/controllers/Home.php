<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	
	public function TelaLogin()
	{
		$this->load->view('login');
	}
	
	public function TelaCadastro()
	{
		$this->load->view('cadastro');
	}
}