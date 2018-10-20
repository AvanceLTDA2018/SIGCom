<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('crud');//carrega as operaçoes com o banco
	}

	public function funcionario(){
		$this->template->load('template','cadastro/funcionario');
	}
	public function teste(){
		$this->template->load('template','home');
	}
}
