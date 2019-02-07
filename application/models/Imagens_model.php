<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imagens_model extends CI_Model {

	public $titulo;
	public $link;
	public $imagem;

	public function __construct(){
		parent::__construct();
	}

	public function getAllImagens(){
		
		$this->db->order_by('titulo','ASC');
		return $this->db->get('imagens')->result();
	}

	public function insertImage($path,$post){ 
		$data = array( 
			'titulo' 	=> $post['titulo'], 
			'link' 		=> $post['link'], 
			'imagem'	=>'assets/images/'.$path 
		); 

		return $this->db->insert('imagens', $data); 
	}

	public function getImagem($id){
		$this->db->from('imagens');
		$this->db->where('md5(id)',$id);
		return $this->db->get()->unbuffered_row();
	}

	public function updateImagem($id,$p,$path){

		$data['titulo']  			= $p['titulo'];
		$data['link']  				= $p['link'];
		$data['imagem']  			= 'assets/images/'.$path; 
		$this->db->set($data);
		return $this->db->update('imagens', $data, array('md5(id)' => $id));


	}

	public function updateImagemSemImagem($id,$p){

		$data['titulo']  			= $p['titulo'];
		$data['link']  				= $p['link'];
		
		return $this->db->update('imagens', $data, array('md5(id)' => $id));
	}


	public function excluir($id,$caminho){
		$this->db->where('md5(id)',$id);
		unlink($caminho);
		return $this->db->delete('imagens');
	}

	public function excluirImagem($id,$caminho){
		
		$data = array('imagem' => '');
		$this->db->where('md5(id)',$id); 
		unlink($caminho);
		return $this->db->update('imagens', $data);

	}
}
