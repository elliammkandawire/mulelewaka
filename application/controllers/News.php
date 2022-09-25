<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller {
	private $data=array();
	private $per_page=8;
	private $pagenation=array('8',"10","20","50","100","all");
	public function __construct(){
		parent::__construct();
		$this->load->model('data_model');
		$this->load->helper('form');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data["data"]=$this->data_model->readData("news");
		$this->load->view('pages/header');
		$this->load->view('pages/news', $data);
		$this->load->view('pages/footer');
	}

	public function admin(){
		$this->load->library('session');
		$ref=null;
		if(isset($_GET['page'])){
			$ref=$_GET['page'];
		}
		if($this->check_if_logged_in()){
			$this->load_page_content($ref);
		}else{
			redirect("login","reflesh");
		}
	}
	public function check_if_logged_in(){
		if($_SESSION['logged_in']){
			return true;
		}else{
			return false;
		}
	}

	public function get_details($slug){
		echo json_encode($this->data_model->get_details("news","slug", $slug)[0]);
		return json_encode($this->data_model->get_details("news","slug", $slug)[0]);
	}

	public function details($slug){
		$data["data"]=json_encode($this->data_model->get_details("news","slug", $slug)[0]);
		$this->load->view('pages/header',$data);
		$this->load->view('pages/news_details');
		$this->load->view('pages/footer');
	}

	public function delete($slug){
		$this->data_model->delete("news","slug",$slug);
		echo true;
	}
	public function add(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=array(
			"slug"=>$this->url($this->input->post("title")).date(),
			"title"=>$this->input->post("title"),
			"author"=>$this->input->post("author"),
			"content"=>nl2br($this->input->post("content"))
		);
		/*check if logo is empty*/
		if ($_FILES['picture']['error']!=4) {
			$file_name=$this->do_upload("./images/news","picture")['upload_data']['file_name'];
			$data['picture_url']=$file_name;
		}
		$this->data_model->insert("news",$data);
		$_SESSION['message']="Record Updated successfully";

		redirect("news_admin");
	}

	function url($url) {
		$url = preg_replace('~[^\\pL0-9_]+~u', '-', $url);
		$url = trim($url, "-");
		$url = iconv("utf-8", "us-ascii//TRANSLIT", $url);
		$url = strtolower($url);
		$url = preg_replace('~[^-a-z0-9_]+~', '', $url);
		return $url;
	}

	public function update(){
		$this->load->library('session');
		if(!$this->check_if_logged_in()){
			redirect("login");
		}
		$data=array(
			"slug"=>$this->input->post("slug"),
			"title"=>$this->input->post("title"),
			"author"=>$this->input->post("author"),
			"picture_url"=>$this->input->post("current_picture"),
			"content"=>nl2br($this->input->post("content"))
		);
		/*check if logo is empty*/
		if ($_FILES['picture']['error']!=4) {
			$file_name=$this->do_upload("./images/news","picture")['upload_data']['file_name'];
			$data['picture_url']=$file_name;
		}

		$this->data_model->update("news",$data);
		$_SESSION['message']="Record Updated successfully";
		redirect("news_admin");
	}

	public function load_page_content($ref){
		$this->getData($ref);
		$this->data['pagenation']=$this->pagenation;
		$this->load->view('dashboard/dashboard_header',$this->data);
		$this->load->view('dashboard/news');
		$this->load->view('dashboard/dashboard_footer');
	}

	public function getData($ref){
		$all_data=$this->data_model->readData("news");
		$this->data['data']=array_slice($all_data, 0,$this->per_page);
		$this->data['page']=$this->per_page;
		if($ref!=null && $ref!="all"){
			$this->data['data']=array_slice($all_data, 0,$ref);
			$this->data['page']=$ref;
		}else if($ref=="all"){
			$this->data['data']=$all_data;
			$this->data['page']=$ref;
		}
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