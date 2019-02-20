<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sites_model extends CI_Model {

	public $email;

	public function __construct(){
		parent::__construct();
	}

	public function getLastIgrejas(){

		$this->db->from('igrejas');
		$this->db->order_by('md5(id)',"DESC");
		$this->db->limit(10);
		return $this->db->get()->result();
	}


	public function insertNotification($email){ 
		$data = array( 
			'email' 	=> $_POST['email']
		); 

		return $this->db->insert('mensagens', $data); 
	}


}
