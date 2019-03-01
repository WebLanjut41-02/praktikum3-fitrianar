<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_makanan extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('m_makanan');
	}

	public function index(){
		$mkn['data']=$this->m_makanan->show_menu();
		$this->load->view('v_makanan', $mkn);
	}

}
?>