<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('status')!='admin') {
			redirect('Login');
		}
	}

	public function index()
	{
		$_SESSION['dashboard']=true;
		unset($_SESSION['peserta']);
		unset($_SESSION['pemilih']);
		unset($_SESSION['hasil']);
		$data['aktif']=count($this->db->query("SELECT * FROM pemilih WHERE status=1")->result_array());
		$data['nonaktif']=count($this->db->query("SELECT * FROM pemilih WHERE status=0")->result_array());
		// var_dump($data); die();
		$this->load->view('adminPage/header.php');
		$this->load->view('adminPage/dashboard/indexAdmin.php',$data);
		$this->load->view('adminPage/footer.php');
	}

	public function hasil()
	{
		$_SESSION['hasil']=true;
		unset($_SESSION['peserta']);
		unset($_SESSION['pemilih']);
		unset($_SESSION['dashboard']);
		$data['suara']=$this->MainModel->jumlahSuara();
		// var_dump($data); die();
		$this->load->view('adminPage/hasil/index.php',$data);
	}

	public function peserta()
	{
		unset($_SESSION['hasil']);
		unset($_SESSION['pemilih']);
		unset($_SESSION['dashboard']);
		$_SESSION['peserta']=true;
		$data['peserta']=$this->MainModel->getData('peserta');
		$this->load->view('adminPage/header.php');
		$this->load->view('adminPage/peserta/index.php',$data);
		$this->load->view('adminPage/footer.php');		
	}


	public function pemilih()
	{
		$_SESSION['pemilih']=true;
		unset($_SESSION['dashboard']);
		unset($_SESSION['hasil']);
		unset($_SESSION['peserta']);
		$data['pemilih']=$this->MainModel->getData('pemilih');
		// $data[''];
		$this->load->view('adminPage/header.php');
		$this->load->view('adminPage/pemilih/index.php',$data);
		$this->load->view('adminPage/footer.php');
	}

	
}