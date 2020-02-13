<?php 

class Invoice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_rooms');
		$this->load->model('Invoice_models');
	}

	public function index()
	{
		$data['invoice']= $this->Invoice_models->tampil_data();
		$this->load->view('templates/header');
		$this->load->view('admin/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail($id_invoice)
	{
		$data = array(
            'invoice' => $this->invoice_models->ambil_id_invoice($id_invoice),
            'pesanan' => $this->invoice_models->ambil_id_pesanan($id_invoice)
        );
		// $data['invoice'] = $this->Invoice_models->ambil_id_invoice($id_invoice);
		// $data['pesanan'] = $this->Invoice_models->ambil_id_pesanan($id_invoice);
		$this->load->view('templates/header');
		$this->load->view('admin/detail_invoice', $data);
		$this->load->view('templates/footer');
	}
}