<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_rooms extends CI_Model
{
	public function getAllRoom()
	{
		return $this->db->get('rooms')->result_array();
	}

	public function getRoomById($id)
	{
		return $this->db->get_where('rooms',['id'=>$id])->row_array();
	}

	public function find($id)
	{
		$result = $this->db->where('id',$id)
						->limit(1)
						->get('rooms');

		if($result->num_rows()>0)
		{
			return $result->row();

		} else {
			return array();
		}
	}
}