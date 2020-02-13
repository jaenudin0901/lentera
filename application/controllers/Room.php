<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Room extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_rooms');
		$this->load->model('Invoice_models');
	}
	public function index()
	{
		$data['title']= 'Halaman Room';
		$data['rooms']= $this->Model_rooms->getAllRoom();
		$this->load->view('templates/header', $data);
		$this->load->view('room/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id)
	{
		$data['title']= 'Detail Data Room';
		$data['rooms']= $this->Model_rooms->getRoomById($id);
		$this->load->view('templates/header',$data);
		$this->load->view('room/detail', $data);
		$this->load->view('templates/footer');
	}

	public function tambah_keranjang($id)
	{
			$rooms =$this->Model_rooms->find($id);

			$data = array (

					'id'=>		$rooms ->id,
					'qty'=>		1,
					'price' =>	$rooms->price,
					'name' =>	$rooms->name
					);
			$this->cart->insert($data);
			redirect('home');
	}

	public function detail_keranjang()
	{

		$this->load->view('templates/header');
		$this->load->view('room/detail_keranjang');
		$this->load->view('templates/footer');
	}
	public function hapus_keranjang()
	{
		$this->cart->destroy();

		redirect('home');
	}
	public function pembayaran()
	{

		$this->load->view('templates/header');
		$this->load->view('room/pembayaran');
		$this->load->view('templates/footer');
	}

		public function proses_pesanan()
	{
			$id_user = $this->session->userdata('id_invoice');
		$data['invoice']= $this->db->get_where('invoice',['id_invoice' =>$this->session->userdata('id_invoice')])->row_array(); 
		$proses = $this->Invoice_models->index();

		if($proses){	
			$this->cart->destroy();
			$this->load->view('templates/header');
			$this->load->view('room/proses_pesanan', $data);
			$this->load->view('templates/footer');
		} else {
			echo "Maaf, Pesanan Anda Gagal di proses!";

		}
	}


}