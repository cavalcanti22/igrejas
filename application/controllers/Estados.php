<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estados extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('Estados_model','modelestados');
  }

  public function index($estado){
    $this->load->helper('funcoes');
    $data['titulo']       = $estado;
    $data['view'] 	      = 'estados/index';
    $data['igrejas']      = $this->modelestados->listarestados($estado);

    $this->load->view('layouts/site',$data);
  }
  
  public function add(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('name', 'Nome da igreja', 'required|min_length[3]');
    $this->form_validation->set_rules('state', 'Estado', 'required|min_length[3]');
    $this->form_validation->set_rules('city', 'Cidade', 'required|min_length[3]');
    $this->form_validation->set_rules('description', 'Descrição da igreja', 'required|min_length[10]');
    $this->form_validation->set_rules('author', 'Autor da postagem', 'required|min_length[10]');

    if ($this->form_validation->run() === FALSE){
     $this->load->helper('funcoes');
     $data['titulo']  = 'Estados | CADASTRAR IGREJA';
     $data['view']    = 'estados/add';
     $this->load->view('layouts/sites',$data);

   }else{
        // Upload the files then pass data to your model
    $config['upload_path'] = 'assets/images/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('imagem')){
            // If the upload fails
      $this->modelestados->insertEstadoSemImagem($this->input->post());
      $_SESSION['feedback'] = '<div class="alert alert-success">CADASTRO DE IGREJA ENVIADO. AGUARDANDO MODERAÇÃO </div>';
      redirect(base_url('estados'));
        // echo $this->upload->display_errors('<p>', '</p>');
    }else{
            // Pass the file name and post data to the insertImage model
      $this->modelestados->insertEstado($this->upload->data('file_name'),$this->input->post());
      $_SESSION['feedback'] = '<div class="alert alert-success">CADASTRO DE IGREJA ENVIADO. AGUARDANDO MODERAÇÃO </div>';
      redirect(base_url('estados'));
    }
  }
}




}

