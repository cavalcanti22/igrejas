<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidades extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('Cidades_model','modelcidades');
  }

  public function index($id){
    $this->load->helper('funcoes');
  $data['titulo']       = 'Cidade';
  $data['view']         = 'cidades/index';
  $data['igreja']       = $this->modelcidades->getCidade($id);
  $this->load->view('layouts/site',$data);
  }
}

