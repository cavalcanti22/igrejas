<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagens extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('imagens_model','modelimagens');
    	$this->load->model('Igrejas_model','modeligrejas');
		
		if (!$this->session->userdata('userlogado')) {
			redirect(base_url('login'));
		}

	}

	public function index(){
		$this->load->helper('funcoes');
		$data['titulo']  = 'PAINEL DE CONTROLE | IMAGENS';
		$data['view'] 	 = 'imagens/index';
		$data['js']      = 'js/index';
    	$data['igrejas']      = $this->modeligrejas->listarigrejas();
		$data['imagens'] = $this->modelimagens->getAllImagens();
		$data['totalpendentes'] = $this->modeligrejas->totalPendentes();

		$this->load->view('layouts/admin',$data);
	}

	public function add(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'Título', 'required');
		if ($this->form_validation->run() === FALSE){
			$this->load->helper('funcoes');
			$data['titulo']  = 'PAINEL DE CONTROLE | ADD IMAGEM';
			$data['view'] 	 = 'imagens/add';
    		$data['igrejas']      = $this->modeligrejas->listarigrejas();
			$data['js']      = 'js/index';
		$data['totalpendentes'] = $this->modeligrejas->totalPendentes();

			$this->load->view('layouts/admin',$data);

		}else{
	        // Upload the files then pass data to your model
			$config['upload_path'] = 'assets/images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('imagem')){
	            // If the upload fails
				echo $this->upload->display_errors('<p>', '</p>');
			}else{
	            // Pass the file name and post data to the insertImage model
				$this->modelimagens->insertImage($this->upload->data('file_name'),$this->input->post());
				$_SESSION['feedback'] = '<div class="alert alert-success">IMAGEM CADASTRADA COM SUCESSO</div>';
				redirect(base_url('Imagens'));
			}
		}
	}

	public function edit($id){
		$this->load->helper('funcoes');
		$data['titulo']  = 'PAINEL DE CONTROLE | EDITAR IMAGEM';
		$data['view'] 	 = 'imagens/edit';
		$data['js']      = 'js/index';
    	$data['igrejas']      = $this->modeligrejas->listarigrejas();
		$data['totalpendentes'] = $this->modeligrejas->totalPendentes();

		$data['imagem'] = $this->modelimagens->getImagem($id);

		$this->load->view('layouts/admin',$data);
	}

	public function saveImagem($id){

		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'Título da imagem', 'required|min_length[3]');

		if (!$this->form_validation->run()) {
			$this->edit($id);
		}

		else {

			$config['upload_path'] = 'assets/images/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);


			if (!$this->upload->do_upload('imagem')){
				   // Se não for inserido imagem atualiza apenas o post,chamando um model especifico
				$this->modelimagens->updateImagemSemImagem($id,$this->input->post());
				$_SESSION['feedback'] = '<div class="alert alert-info">IMAGEM EDITADA COM SUCESSO</div>';
				redirect(base_url('Imagens'));
				// echo $this->upload->display_errors('<p>', '</p>');

			} else {
				$imagens = $this->modelimagens->getImagem($id);
				$arquivoAnterior = $imagens->imagem;
				unlink($arquivoAnterior);
				if (!$this->modelimagens->updateImagem($id,$this->input->post(),$this->upload->data('file_name'))) {
					
					die("ERRO AO ATUALIZAR!");
				} else{

					redirect(base_url('Imagens'));

				}
			}
		}
	}

	public function remove($id){

		$imagem = $this->modelimagens->getImagem($id);
		$caminho =  $imagem->imagem;

		if ($this->modelimagens->excluir($id,$caminho)) {
			$_SESSION['feedback'] = '<div class="alert alert-danger">IMAGEM REMOVIDA COM SUCESSO</div>';
			redirect(base_url('Imagens'));

		}else{
			echo "Erro no sistema";
		}
	}

	public function removeImagem($id){

		$imagem = $this->modelimagens->getImagem($id);
		$caminho =  $imagem->imagem;
    // print_r($caminho);
    // die('teste');
		if ($this->modelimagens->excluirImagem($id,$caminho)) {
			$_SESSION['feedback'] = '<div class="alert alert-danger">IMAGEM REMOVIDA COM SUCESSO</div>';
			redirect(base_url('imagens'));
		}else{
			echo "Erro no sistema";
		}
	}
}
