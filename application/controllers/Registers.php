<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registers extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('paginas_model','modelpaginas');
    $this->load->model('imagens_model','modelimagens');
    $this->load->model('sites_model','modelsites');
  }


  public function index(){

    $data['titulo']     = 'CADASTRAR NOVA IGREJA | IGREJAS';
    $data['contato']      = $this->modelpaginas->getPagina(md5(10));
    $data['view']       = 'sites/registers';
    $this->load->view('layouts/site',$data);
  }
}

