<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pilih extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status')!='pemilih') {
			redirect('Login');
		}
		$this->load->model('MainModel');
	}

	public function index()
	{
		// var_dump($this->session->userdata('username')); die();
		$data['peserta']=$this->MainModel->getData('peserta');
		$this->load->view('pilih.php',$data);
	}

	public function pilih()
	{
		// var_dump($this->session->userdata('username')); die();
		$id=$_GET['id'];
		// $this->MainModel->updateSuara($id);
		$this->MainModel->updatePemilih($this->session->userdata('username'),$id);
		session_destroy();
		redirect('Login');
	}
}