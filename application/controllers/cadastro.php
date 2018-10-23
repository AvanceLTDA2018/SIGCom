<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

 class Cadastro extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}

	public function funcionario(){
		$this->template->load('template','cadastro/funcionario');
	}

 }
