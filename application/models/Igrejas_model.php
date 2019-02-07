<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Igrejas_model extends CI_Model {

	public $id;
	public $name;
	public $state;
	public $city;
	public $video;
	public $description;
	public $author;
	public $image;

	public function __construct(){
		parent::__construct();
	}

	public function listarIgrejas(){
		$this->db->order_by('state','ASC');
		return $this->db->get('igrejas')->result();
	}

	public function insertIgreja($path,$post){ 
		$data = array( 
			'name' 			=> $post['name'], 
			'state' 		=> $post['state'], 
			'city' 			=> $post['city'], 
			'video' 		=> $post['video'], 
			'description' 	=> $post['description'], 
			'author' 		=> $post['author'], 
			'image'			=>'assets/images/'.$path 
		); 

		return $this->db->insert('igrejas', $data); 
	}

	
    public function updateStatus($status,$id){

    $data['status']     = 1;
  
    return $this->db->update('igrejas', $data, array('md5(id)' => $id));
  }


	public function insertIgrejaSemImagem($post){ 
		$data = array( 
			'name' 			=> $post['name'], 
			'state' 		=> $post['state'], 
			'city' 			=> $post['city'], 
			'video' 		=> $post['video'], 
			'description' 	=> $post['description'], 
			'author' 		=> $post['author']
		); 

		return $this->db->insert('igrejas', $data); 
	}

	public function excluir($id,$caminho){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('igrejas');
	}

	public function excluirImagem($id,$caminho){
		
		$data = array('image' => '');
		$this->db->where('md5(id)',$id); 
		unlink($caminho);
		return $this->db->update('igrejas', $data);

	}


	public function getIgreja($id){
		$this->db->from('igrejas');
		$this->db->where('md5(id)',$id);
		return $this->db->get()->unbuffered_row();
	}

	public function totalPendentes(){

		$query = $this->db->query('SELECT * FROM igrejas WHERE status = 0');
		return $query->num_rows();
	}
}
