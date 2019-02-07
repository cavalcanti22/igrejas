<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Igrejas extends CI_Controller {

	public function __construct(){
		parent::__construct();
    $this->load->model('Igrejas_model','modeligrejas');
    if (!$this->session->userdata('userlogado')) {
      redirect(base_url('login'));
    }
  }

  public function index(){
    $this->load->helper('funcoes');
    $data['titulo']       = 'PAINEL DE CONTROLE | IGREJAS APROVADAS';
    $data['view'] 	      = 'Igrejas/index';
    $data['js']           = 'js/index';
    $data['igrejas']      = $this->modeligrejas->listarigrejas();
    $data['totalpendentes'] = $this->modeligrejas->totalPendentes();


    $this->load->view('layouts/admin',$data);
  }

  public function pendentes(){
    $this->load->helper('funcoes');
    $data['titulo']       = 'PAINEL DE CONTROLE | IGREJAS PENDENTES';
    $data['view']         = 'Igrejas/pendentes';
    $data['js']           = 'js/index';
    $data['igrejas']      = $this->modeligrejas->listarigrejas();
    $data['totalpendentes'] = $this->modeligrejas->totalPendentes();


    $this->load->view('layouts/admin',$data);
  }

  public function mudaStatus($id){

    $status   = $this->input->post('status');

    if ($this->modeligrejas->updateStatus($titulo,$id)) {
      $_SESSION['feedback'] = '<div class="alert alert-success">IGREJA APROVADA COM SUCESSO</div>';

      redirect(base_url('pendentes'));
    }else{
      echo "Erro no sistema";
    }
  }

  public function getOne($id){
    $this->load->helper('funcoes');
    $data['titulo']       = 'VISUALIZAR | IGREJA';
    $data['view']         = 'igrejas/one';
    $data['js']      = 'js/edit';
    $data['igrejas']      = $this->modeligrejas->listarigrejas();
    
    $data['igreja']       = $this->modeligrejas->getIgreja($id);
    $data['totalpendentes'] = $this->modeligrejas->totalPendentes();

    $this->load->view('layouts/admin',$data);
  }

  public function removeAprovada($id){

    $igrejas = $this->modeligrejas->getIgreja($id);
    $caminho =  $igrejas->image;


    if ($caminho == '') {
      if ($this->modeligrejas->excluir($id,$caminho)) {
       $_SESSION['feedback'] = '<div class="alert alert-danger">IGREJA REMOVIDA COM SUCESSO</div>';
       redirect(base_url('igrejas'));
     }else{
       echo "Erro no sistema";
     }
   }

   if ($this->modeligrejas->excluir($id,$caminho)) {
    unlink($caminho);

    $_SESSION['feedback'] = '<div class="alert alert-danger">IGREJA REMOVIDA COM SUCESSO</div>';
    redirect(base_url('igrejas'));
  }else{
   echo "Erro no sistema";
 }
}
public function removePendente($id){

  $igrejas = $this->modeligrejas->getIgreja($id);
  $caminho =  $igrejas->image;


  if ($caminho == '') {
    if ($this->modeligrejas->excluir($id,$caminho)) {
     $_SESSION['feedback'] = '<div class="alert alert-danger">IGREJA REMOVIDA COM SUCESSO</div>';
     redirect(base_url('pendentes'));
   }else{
     echo "Erro no sistema";
   }
 }

 if ($this->modeligrejas->excluir($id,$caminho)) {
  unlink($caminho);

  $_SESSION['feedback'] = '<div class="alert alert-danger">IGREJA REMOVIDA COM SUCESSO</div>';
  redirect(base_url('pendentes'));
}else{
 echo "Erro no sistema";
}
}


}

