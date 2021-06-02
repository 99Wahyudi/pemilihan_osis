<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peserta extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('status')!='admin') {
			redirect('Login');
		}
	}


	public function insertPeserta()
	{
		$nama=htmlspecialchars($this->input->post('nama',true));
		$kelas=htmlspecialchars($this->input->post('kelas',true));
		$visi=htmlspecialchars($this->input->post('visi',true));
		$misi=htmlspecialchars($this->input->post('misi',true));
		$id=$this->random(8);
		$config['upload_path'] = './foto_peserta';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '8000';
		$this->load->library('upload',$config);
		if($this->upload->do_upload('foto')){
			$new_image=$this->upload->data('file_name');
			$insert=[
				'id_peserta'=>$id,
				'nama'=>strtoupper($nama),
				'foto'=>$new_image,
				'kelas'=>strtoupper($kelas),
				'visi'=>$visi,
				'misi'=>$misi ];
			$this->MainModel->insert('peserta',$insert);
			redirect('admin/peserta');
		}
		else{
			echo "gagal";
		}
	}
	
	public function delete()
	{
		$id=$_GET['id'];
		$data=$this->MainModel->getWhere('peserta',"WHERE id_peserta='$id'");
		unlink('foto_peserta/'.$data['foto']);
		$this->MainModel->delete('peserta',['id_peserta'=>$id]);
		redirect('admin/peserta');
	}

	public function edit()
	{
		$id=$_POST['id'];
		if ($_FILES['foto']['name']) {
			$config['upload_path'] = './foto_peserta';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '8000';
			$this->load->library('upload',$config);
			if($this->upload->do_upload('foto')){
				$new_image=$this->upload->data('file_name');
				$oldImg=$this->MainModel->getWhere('peserta',"WHERE id_peserta='$id'");
				unlink('foto_peserta/'.$oldImg['foto']);
				$this->MainModel->updateFoto($id,$new_image);
			}
			else{
				echo "gagal";
			}

		}
		$nama=htmlspecialchars($this->input->post('nama',true));
		$kelas=htmlspecialchars($this->input->post('kelas',true));
		$visi=htmlspecialchars($this->input->post('visi',true));
		$misi=htmlspecialchars($this->input->post('misi',true));
		$data=[
			'nama'=>strtoupper($nama),
			'kelas'=>strtoupper($kelas),
			'visi'=>$visi,
			'misi'=>$misi ];
		$this->MainModel->update($id,$data);
		redirect('admin/peserta');
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