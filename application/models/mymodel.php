<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function getData($limit,$offset){
		$this->db->from('sepatu');
		$this->db->limit($limit,$offset);
		$data = $this->db->get();
		return $data -> result_array();
	}
	public function getDatapesanan($limit,$offset){
		$this->db->from('pesanan');
		$this->db->limit($limit,$offset);
		$data = $this->db->get();
		return $data -> result_array();
	}
	public function getDatakeyword($limit,$offset,$keyword){
		$this->db->from('sepatu');
		$this->db->like('nama_barang',$keyword);
		$this->db->limit($limit,$offset);
		$data = $this->db->get();
		return $data -> result_array();
	}

	public function getJumlahData(){
		$this->db->from('sepatu');
		$data = $this->db->get();
		return $data -> num_rows();
	}
	public function getJumlahDatapesanan(){
		$this->db->from('pesanan');
		$data = $this->db->get();
		return $data -> num_rows();
	}
	public function getJumlahDatakeyword($keyword){
		$this->db->from('sepatu');
		$this->db->like('nama_barang',$keyword);
		$data = $this->db->get();
		return $data -> num_rows();
	}

	public function insertData($nama_tabel, $data){
		$res = $this->db->insert($nama_tabel, $data);
	}
	public function login($username,$password){
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->from('admin');
		$this->db->limit(1);
		$query=$this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		}
		else{
			return false;
		}

	}
	function get1Data($where = "", $sepatu){
		$data = $this->db->query('select * from '.$sepatu ." ".$where);
		return $data -> result_array();
	}

	//public function updateData($nama_tabel, $data, $kode_barang, $nama_barang, $satuan,$jumlah,$harga,$kategori, $where){
		//$res = $this->db->update($nama_tabel, $data, $where);
	//}
	public function updateData($nama_tabel, $data, $where){
		$res = $this->db->update($nama_tabel, $data, $where);
		return $res;
	}

	public function deleteData($id){
		$res = $this->db->query("DELETE FROM sepatu WHERE id =".$id);
	}
	public function deleteDatapesanan($id){
		$res = $this->db->query("DELETE FROM pesanan WHERE id =".$id);
	}
	public function getDataid($id){
		$this->db->select('*');
		$this->db->where('id',$id);
		$this->db->from('sepatu');
		$this->db->limit(1);
		$query=$this->db->get();
		//echo '<pre>'; var_dump($query->row());
      	return $query;
  	}
  	function search($keyword){
        $this->db->like('nama_barang',$keyword);
        $query  = $this->db->get('sepatu');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    }
}
