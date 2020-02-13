<?php 

class Invoice_models extends CI_Model {

	public function index()
	{
		date_default_timezone_get('Asia/Jakarta');
		$name  = $this->input->post('name');
		$telp = $this->input->post('telp');

		$invoice = array (
				'name' =>$name,
				'telp' =>$telp,
				'tgl_pesan' => date('Y-m-d H:i:s'),
				'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'),date('i'), date('s'), date('m'),date('d')+1,date('Y'))),
		);

		$this->db->insert('invoice',$invoice);

		$id_invoice =$this->db->insert_id();

		foreach ($this->cart->contents() as $item){

		$data = array (

				'id_invoice' => $id_invoice,
				'id' =>$item['id'],
				'name' => $item['name'],
				'jumlah'=>$item['qty'],
				'harga' =>$item['price'],
			);

		$this->db->insert('pesanan', $data);

		}

		return true;
	}

	public function tampil_data()
	{
		$result = $this->db->get('invoice');

		if($result->num_rows() > 0)
		{
			return $result->result();

		} else {

			return false();
		}
	}

	public function ambil_id_invoice($id_invoice)
	{
			// return $this->db->get_where('invoice', ['id_invoice'=>
			// $id_invoice])->row_array();
		$result =$this->db->where('id_invoice', $id_invoice)->limit(1)->get('invoice');
		if($result->num_rows()>0){
			return $result->row();
		} else {
			return false;
		}
	}

	public function ambil_id_pesanan($id_invoice)
	{
		$result =$this->db->where('id_invoice',$id_invoice)->get('pesanan');
		if($result->num_rows()>0){
			return $result->result();
		} else {
			return false;
		}
	}
}