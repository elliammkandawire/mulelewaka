<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	private $data=array();
	private $per_page=8;
	private $pagenation=array('8',"10","20","50","100","all");

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('home_model');
		$this->load->library('session');
		$this->load->model('data_model');
	}

	public function index()
	{
		$data["events"]=$this->data_model->readData("event");
		$data["covids"]=$this->data_model->readData("covid");
		$data['company_details']=($this->home_model->company_data()[0]);
		$this->load->view('pages/header', $data);
		$this->load->view('pages/index');
		$this->load->view('pages/footer');
	}

	public function pagenotfound()
	{
		$this->load->view('pages/404');
	}
	public function dashboard(){
		$this->data['company_details']=($this->home_model->company_data()[0]);
		$this->load->view('dashboard/dashboard_header',$this->data);
		$this->load->view('dashboard/dashboard');
		$this->load->view('dashboard/dashboard_footer');
	}

	public function update_company(){
		    $this->load->library('session');
            //			if(!isset($_SESSION['userdata'])){
            //				redirect("login");
            //			}
			$data=array(
				"shortname"=>$this->input->post("shortname"),
				"name"=>$this->input->post("name"),
				"email"=>$this->input->post("email"),
				"phone"=>$this->input->post("phone"),
				"facebook_link"=>$this->input->post("facebook_link"),
				"vision"=>nl2br($this->input->post("vision")),
				"twitter_link"=>$this->input->post("twitter_link"),
				"mission"=>nl2br($this->input->post("mission")),
				"physical_location"=>$this->input->post("physical_location"),
				"logo"=>$this->input->post("current_logo"),
				"motto"=>$this->input->post("motto")
			);
			/*check if logo is empty*/
			if ($_FILES['logo']['error']!=4) {
				$file_name=$this->do_upload("./images","logo")['upload_data']['file_name'];
				$data['logo']=$file_name;
			}

			$this->home_model->update($data);
			$_SESSION['message']="Record inserted successfully";
			redirect("dashboard");
	}

	public function do_upload($location,$file)
	{
		$config['upload_path']          = $location;
		$config['allowed_types']        = 'pdf|gif|jpg|png|jpeg|mp3|mpeg';
		// $config['max_size']             = 1000;
		// $config['max_width']            = 1600;
		// $config['max_height']           = 768;
		$this->upload->initialize($config);

		if (!$this->upload->do_upload($file))
		{
			$error = array('error' => $this->upload->display_errors());
			return $error;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			return $data;
		}
	}
}
