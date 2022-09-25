<?php
class Home_model extends CI_Model {
	private $table="company_information";
	function __construct(){
		parent::__construct();
	}
	public function company_data(){
		$this->db->select("*");
		$this->db->from($this->table);
		return $this->db->get()->result();
	}

	public function update($data){
		$this->db->replace($this->table,$data);
	}
	public function readData($table_name){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->order_by("date", "DESC");
		$this->db->where("status", true);
		return $this->db->get()->result();
	}
}
?>
