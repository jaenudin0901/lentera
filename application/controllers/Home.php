<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_rooms');
	}
	public function index()
	{
		$data['title']='Halaman Home';
		$data['rooms'] =$this->Model_rooms->getAllRoom();
		$this->load->view('templates/header',$data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}
}