<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estados_model extends CI_Model {

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

	public function listarEstados($estado){
		$this->db->order_by('state','ASC');
		$this->db->where('state',$estado);
		return $this->db->get('igrejas')->result();
	}

	public function insertEstado($path,$post){ 
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

	public function insertEstadoSemImagem($post){ 
		$data = array( 
			'state' 		=> $post['state'], 
			'city' 			=> $post['city'], 
			'video' 		=> $post['video'], 
			'description' 	=> $post['description'], 
			'author' 		=> $post['author']
		); 

		return $this->db->insert('igreja', $data); 
	}


}
