<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_user');
	}
	public function index(){
		$data['user']=$this->m_user->user()->result();
		$this->load->view('v_user',$data);
	}
}


?>