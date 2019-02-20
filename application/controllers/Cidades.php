<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidades extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('Cidades_model','modelcidades');
  }

  public function index($city,$id,$state){
    $this->load->helper('funcoes');
    $data['titulo']       = 'IGREJAS | '.$city;
    $data['view']         = 'cidades/index';
    $data['igreja']       = $this->modelcidades->getCidade($id);
    $data['lastigrejas']  = $this->modelcidades->lastIgrejasByCites($city);
    $data['lastigrejasStates']  = $this->modelcidades->lastIgrejasByStates($state);
    $this->load->view('layouts/site',$data);
  }
}

