<?php  

class Auth extends CI_Controller {

	public function login()
	{
		$this->form_validation->set_rules('username','Username','required',['required' =>'Username wajib diisi!']);
		$this->form_validation->set_rules('password','password', 'required', ['required' =>'Password wajib diisi!']);
		if ($this->form_validation->run()== false)
		{

			$this->load->view('form_login');
	
		} else {
			$auth = $this->auth_model->cek_login();
			if($auth == FALSE){
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 username dan password anda salah
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('auth/login');
			}else {
				$this->session->set_userdata('username', $auth->username);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch($auth->role_id){

					case 1 :redirect('invoice');
							break;

					case 2 :redirect('home');
							break;

					default: break;
				}
			}
		}
	}


public function logout(){

	$this->session->unset_userdata('username');
	$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> You have been logout</div>');
			redirect('home');


	}
}


