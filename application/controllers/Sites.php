<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Paginas_model','modelpaginas');
		$this->load->model('Imagens_model','modelimagens');
		$this->load->model('Igrejas_model','modeligrejas');
		$this->load->model('Sites_model','modelsites');
	}


	public function index(){

		$data['titulo'] 		= 'IGREJAS | BRASIL';
		$data['view'] 			= 'sites/index';
		$data['header1'] 		= $this->modelpaginas->getPagina(md5(1));
		$data['header2'] 		= $this->modelpaginas->getPagina(md5(2));
		$data['header3'] 		= $this->modelpaginas->getPagina(md5(3));
		$data['sobre1'] 		= $this->modelpaginas->getPagina(md5(4));
		$data['sobre2'] 		= $this->modelpaginas->getPagina(md5(5));
		$data['sobre3'] 		= $this->modelpaginas->getPagina(md5(6));
		$data['sobre4'] 		= $this->modelpaginas->getPagina(md5(7));
		$data['sobre5'] 		= $this->modelpaginas->getPagina(md5(8));
		$data['menu']  			= $this->modelpaginas->getPagina(md5(9));
		$data['contato']  		= $this->modelpaginas->getPagina(md5(10));
		$data['igrejasTitulo']  = $this->modelpaginas->getPagina(md5(11));
		$data['galeriaTitulo']  = $this->modelpaginas->getPagina(md5(12));
		$data['imagens'] 		= $this->modelimagens->getAllImagens();
		// $data['lastigrejas'] 	= $this->modelimagens->getLastIgrejas();

		$this->load->view('layouts/site',$data);
	}

	public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('author', 'Nome do Autor', 'required|min_length[3]');
		$this->form_validation->set_rules('name', 'Nome da Igreja', 'required|min_length[3]');
		$this->form_validation->set_rules('state', 'Estado da Igreja', 'required');
		$this->form_validation->set_rules('city', 'Cidade da Igreja', 'required|min_length[3]');
		$this->form_validation->set_rules('description', 'Descrição da Igreja', 'required|min_length[10]');

		if ($this->form_validation->run() === FALSE){
			$this->load->helper('funcoes');
			$data['titulo']  = 'Cadastro de Igreja';
			$data['view']    = 'sites/form';
			$this->load->view('layouts/site',$data);

		}else{
          // Upload the files then pass data to your model
			$config['upload_path'] = 'assets/images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('image')){
              // If the upload fails
				echo $this->upload->display_errors('<p>', '</p>');
			}else{
              // Pass the file name and post data to the insertImage model
				$this->modeligrejas->insertIgreja($this->upload->data('file_name'),$this->input->post());
				$_SESSION['feedback'] = '<div class="alert alert-success">IGREJA CADASTRADA COM SUCESSO! AGUARDE MODERAÇÃO PARA VISUALIZAR NO SITE.</div>';
				redirect(base_url('cadastro'));
			}
		}
	}

	public function form(){

		$data['titulo'] 		= 'IGREJAS | BRASIL';
		$data['view'] 			= 'sites/form';
		$this->load->view('layouts/site',$data);


	}
}