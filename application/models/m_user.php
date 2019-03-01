<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_user extends CI_Model{
	public function user(){
		$data = array(
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'nama_pelanggan' => $this->input->post('nama_pelanggan')
		);
		$this->db->user('v_user', $data);
	}
}
?>