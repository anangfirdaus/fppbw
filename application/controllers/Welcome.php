<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		//$data = $this->mymodel->getData();
		//$this->load->view('tabel', array('data' => $data));
		$data['err_message'] = "";
		$this->load->view('login', $data);
	}

	public function insert(){
		$res = $this->mymodel->insertData();
	}

	public function update(){
		$res = $this->mymodel->updateData();
	}

	public function delete(){
		$res = $this->mymodel->deleteData();
	}

}
