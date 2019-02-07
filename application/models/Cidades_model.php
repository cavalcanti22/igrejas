<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cidades_model extends CI_Model {

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

	public function getCidade($id){
		$this->db->from('igrejas');
		$this->db->where('md5(id)',$id);
		return $this->db->get()->unbuffered_row();
	}


}
