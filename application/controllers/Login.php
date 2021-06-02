<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$this->load->view('login.php');
		if ($this->session->userdata('status')=='pemilih') {
			redirect('Pilih');
		}
		if ($this->session->userdata('status')=='admin') {
			redirect('Admin');
		}
	}

	public function loginUser()
	{
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		// echo "username=".$username." password=".$password;die();
		$user=$this->MainModel->getWhere('pemilih',"WHERE username = '$username'");
		// echo count($user['username']); die();
		if ($user) {
			if ($user['password']==$password) {
				if ($user['status']==0) {
					$data=['username'=>$username,
							'status'=>'pemilih'];
					$this->session->set_userdata($data);
					// $this->MainModel->updatePemilih($username);
					redirect('Pilih');
				}else{
	                $this->session->set_flashdata('msg_login', '<strong>Akun ini sudah digunakan.</strong>');
					redirect('Login');
				}
			}else{
	            $this->session->set_flashdata('msg_login', '<strong>Password salah.</strong>');
				redirect('Login');
			}
		}else{
			$admin=$this->MainModel->getWhere('admin',"WHERE username='$username'");
			if ($admin) {
				if (password_verify($password,$admin['password'])) {
					$data=['username'=>$username['username'],
						'status'=>'admin'];
					$this->session->set_userdata($data);
					redirect('admin');		
				}else{
	            	$this->session->set_flashdata('msg_login', '<strong>Password salah.</strong>');
					redirect('Login');
				}
			}else{
	            $this->session->set_flashdata('msg_login', '<strong>Username salah.</strong>');
	            redirect('Login');
			}
		}
	}

	public function logout()
	{
		session_destroy();
		redirect('Login');
	}

	// public function register()
	// {
	// 	$username="admin";
	// 	$password=password_hash("admin",true);
	// 	$data=['username'=>$username,'password'=>$password];
	// 	$this->db->insert('admin',$data);

	// }
}