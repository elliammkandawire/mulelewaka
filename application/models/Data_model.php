<?php
class Data_model extends CI_Model {
	private $table="company_information";
	function __construct(){
		parent::__construct();
	}
	public function company_data(){
		$this->db->select("*");
		$this->db->from($this->table);
		return $this->db->get()->result();
	}

	public function update($table,$data){
		$this->db->replace($table,$data);
	}

	public function insert($table,$data){
		$this->db->insert($table,$data);
	}
	public function delete($table,$column_name, $colum_value){
		$this->db->where($column_name, $colum_value);
		$this->db->delete($table);
	}

	public function get_details($table_name,$column_name, $column_value){
		$this->db->select("*");
		$this->db->from($table_name);
		$this->db->where($column_name, $column_value);
		return $this->db->get()->result();
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
