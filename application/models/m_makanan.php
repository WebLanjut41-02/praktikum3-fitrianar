<?php
class m_makanan extends CI_Model{
	function show_menu(){
		$dt=$this->db->query("SELECT * FROM makanan");
		return $dt;
	}
}
?>