<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('status')!='admin') {
			redirect('Login');
		}
	}

	public function insertPemilih()
	{
		$this->form_validation->set_rules('username','Username','is_unique[pemilih.username]|is_unique[admin.username]|required');
		$this->form_validation->set_rules('username','Username','required');
		if ($this->form_validation->run()==false) {
			redirect('Admin/pemilih');
		}
		$password=$this->input->post('password');
		$username=$this->input->post('username');
		$data=[
			'username'=>$username,
			'password'=>$password
		];
		$this->MainModel->insert('pemilih',$data);
		redirect('Admin/pemilih');
	}


	public function autoInsert()
	{
		$jumlah= $_POST['jumlah'];
		for ($i=0; $i < $jumlah; $i++) { 
			$username=$this->random(10);
			$password=$this->random(8);
			$data=[
				'username'=>$username,
				'password'=>$password
			];
			$this->MainModel->insert('pemilih',$data);
		}
		redirect('Admin/pemilih');
	}

	public function delete()
	{
		$username=$_GET['un'];
		$this->MainModel->delete('pemilih',['username'=>$username]);
		redirect('Admin/pemilih');
	}

	public function printExcel()
	{
		$data['choosers']=$this->MainModel->getData('pemilih',"WHERE status != 1");
		// echo count($data['choosers']); die();
		$this->load->view('data_excel.php',$data);
	}

	public function random($n='')
	{
		$random = '';
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    	for ($i = 0; $i < $n; $i++) { 
        	$index = rand(0, strlen($characters) - 1); 
		    $random .= $characters[$index];
	   	}
	   	return $random;
	}
}