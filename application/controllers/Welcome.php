<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
    	$this->load->model('Igrejas_model','modeligrejas');

		if (!$this->session->userdata('userlogado')) {
			redirect(base_url('login'));
		}
	}

	public function index(){
		$data['titulo'] 	= 'PAINEL | PÁGINA INICIAL';
		$data['view'] 		= 'welcome/index';
		$data['js']        = 'js/index';
    	$data['igrejas']      = $this->modeligrejas->listarigrejas();
		$data['totalpendentes'] = $this->modeligrejas->totalPendentes();

		$this->load->view('layouts/admin',$data);
	}
}