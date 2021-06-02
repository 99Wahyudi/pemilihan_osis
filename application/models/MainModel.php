<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model {

	public function getData($table='',$where='')
	{
		$query="SELECT * FROM $table $where";
		$data=$this->db->query($query)->result_array();
		// $data=$this->db->get($table)->result_array();
		return $data;
	}

	public function getWhere($table='',$where='')
	{
		$query="SELECT * FROM $table $where";
		$data=$this->db->query($query)->row_array();
		return $data;
	}

	public function insert($table='',$data)
	{
		$this->db->insert($table,$data);
	}

	public function delete($table='',$where)
	{
		$this->db->delete($table,$where);
	}

	public function updateSuara($id)
	{
		$data=$this->db->get_where('peserta',['id_peserta'=>$id])->row_array();
		$newSuara=$data['jumlah_suara']+1;
		$this->db->set('jumlah_suara',$newSuara);
		$this->db->where('id_peserta',$id);
		$this->db->update('peserta');
	}

	public function updatePemilih($username='',$pilihan='')
	{
		// var_dump($username); die();
		$this->db->set('status',1);
		$this->db->set('pilihan',$pilihan);
		$this->db->where('username',$username);
		$this->db->update('pemilih');
	}

	public function update($id,$data)
	{
		// var_dump($data); die();
		$this->db->set('nama',$data['nama']);
		$this->db->set('kelas',$data['kelas']);
		$this->db->set('visi',$data['visi']);
		$this->db->set('misi',$data['misi']);
		$this->db->where('id_peserta',$id);
		$this->db->update('peserta');
	}

	public function updateFoto($id,$data)
	{
		$this->db->set('foto',$data);
		$this->db->where('id_peserta',$id);
		$this->db->update('peserta');
	}

	public function jumlahSuara()
	{
		$query = "SELECT pemilih.*, peserta.*, COUNT(pilihan) AS hasil FROM `pemilih` RIGHT JOIN peserta ON pemilih.pilihan = peserta.id_peserta GROUP BY id_peserta";
		$data = $this->db->query($query)->result_array();
		return $data;
	}
}