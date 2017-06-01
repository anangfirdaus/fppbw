<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct()
	 {
	 	parent::__construct();

                //load helper dan library
	        $this->load->library('session');
		$this->load->helper( array('captcha', 'url') );
	 }
	public function index(){
		$jumlah = $this->mymodel->getJumlahData();
		$config['base_url'] = 'http://localhost/codeigniter/crud/index';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 6;

		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = '&laquo; First';
	    $config['first_tag_open'] = '<li class="prev page">';
	    $config['first_tag_close'] = '</li>';
	 
	    $config['last_link'] = 'Last &raquo;';
	    $config['last_tag_open'] = '<li class="next page">';
	    $config['last_tag_close'] = '</li>';
	 
	    $config['next_link'] = 'Next &rarr;';
	    $config['next_tag_open'] = '<li class="next page">';
	    $config['next_tag_close'] = '</li>';
	 
	    $config['prev_link'] = '&larr; Prev';
	    $config['prev_tag_open'] = '<li class="prev page">';
	    $config['prev_tag_close'] = '</li>';
	 
	    $config['cur_tag_open'] = '<li class="active"><a href="">';
	    $config['cur_tag_close'] = '</a></li>';
	 
	    $config['num_tag_open'] = '<li class="page">';
	    $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

			
		$res['data']= $this->mymodel->getData($config['per_page'],$this->uri->segment(3));
		$this->load->view('home',$res);
	}
	public function viewadminhome(){
		if (!$this->session->userdata('loggedin')) {
			redirect('crud/viewlogin');
		}else{
			$jumlah = $this->mymodel->getJumlahData();
			$config['base_url'] = 'http://localhost/codeigniter/crud/viewadminhome';
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 3;

			$config['full_tag_open'] = '<ul class="pagination">';
		    $config['full_tag_close'] = '</ul>';
		    $config['first_link'] = '&laquo; First';
		    $config['first_tag_open'] = '<li class="prev page">';
		    $config['first_tag_close'] = '</li>';
		 
		    $config['last_link'] = 'Last &raquo;';
		    $config['last_tag_open'] = '<li class="next page">';
		    $config['last_tag_close'] = '</li>';
		 
		    $config['next_link'] = 'Next &rarr;';
		    $config['next_tag_open'] = '<li class="next page">';
		    $config['next_tag_close'] = '</li>';
		 
		    $config['prev_link'] = '&larr; Prev';
		    $config['prev_tag_open'] = '<li class="prev page">';
		    $config['prev_tag_close'] = '</li>';
		 
		    $config['cur_tag_open'] = '<li class="active"><a href="">';
		    $config['cur_tag_close'] = '</a></li>';
		 
		    $config['num_tag_open'] = '<li class="page">';
		    $config['num_tag_close'] = '</li>';

			$this->pagination->initialize($config);

			
			$res['data']= $this->mymodel->getData($config['per_page'],$this->uri->segment(3));

			$this->load->view('adminhome',$res);	
		}
	}
	public function viewadminhomepesanan(){
		if (!$this->session->userdata('loggedin')) {
			redirect('crud/viewlogin');
		}else{
			$jumlah = $this->mymodel->getJumlahDatapesanan();
			$config['base_url'] = 'http://localhost/codeigniter/crud/viewadminhomepesanan';
			$config['total_rows'] = $jumlah;
			$config['per_page'] = 3;

			$config['full_tag_open'] = '<ul class="pagination">';
		    $config['full_tag_close'] = '</ul>';
		    $config['first_link'] = '&laquo; First';
		    $config['first_tag_open'] = '<li class="prev page">';
		    $config['first_tag_close'] = '</li>';
		 
		    $config['last_link'] = 'Last &raquo;';
		    $config['last_tag_open'] = '<li class="next page">';
		    $config['last_tag_close'] = '</li>';
		 
		    $config['next_link'] = 'Next &rarr;';
		    $config['next_tag_open'] = '<li class="next page">';
		    $config['next_tag_close'] = '</li>';
		 
		    $config['prev_link'] = '&larr; Prev';
		    $config['prev_tag_open'] = '<li class="prev page">';
		    $config['prev_tag_close'] = '</li>';
		 
		    $config['cur_tag_open'] = '<li class="active"><a href="">';
		    $config['cur_tag_close'] = '</a></li>';
		 
		    $config['num_tag_open'] = '<li class="page">';
		    $config['num_tag_close'] = '</li>';

			$this->pagination->initialize($config);

			
			$res['data']= $this->mymodel->getDatapesanan($config['per_page'],$this->uri->segment(3));

			$this->load->view('adminhomepesanan',$res);	
		}
	}
	public function viewformadd(){
		if (!$this->session->userdata('loggedin')) {
			redirect('crud/viewlogin');
		}else{
			$this->load->view('formadd');	
		}
	}
	public function viewformpemesanan($id){
		$data['sepatu'] = $this->mymodel->getDataid($id)->row_array();
		//echo '<pre>';var_dump($data);die();
		//posisi folder untuk menyimpan gambar captcha
		$path = './captcha/';

		//membuat folder apabila folder captcha tidak ada
		if ( !file_exists($path) )
		{
			$create = mkdir($path, 0777);
			if ( !$create)
			return;
		}

		//Menampilkan huruf acak untuk dijadikan captcha
		$word = array_merge(range('0', '9'), range('A', 'Z'));
		$acak = shuffle($word);
		$str  = substr(implode($word), 0, 5);

		//Menyimpan huruf acak tersebut kedalam session
		$data_ses = array('captcha_str' => $str	);
		$this->session->set_userdata($data_ses);

		//array untuk menampilkan gambar captcha
		$vals = array(
		    'word'	=> $str, //huruf acak yang telah dibuat diatas
		    'img_path'	=> $path, //path untuk menyimpan gambar captcha
		    'img_url'	=> base_url().'captcha/', //url untuk menampilkan gambar captcha
		    'img_width'	=> '150', //lebar gambar captcha
		    'img_height' => 40, //tinggi gambar captcha
		    'expiration' => 7200 //expired time per captcha
		);

		$cap = create_captcha($vals);
		$data['captcha_image'] = $cap['image']; //variable array untuk menampilkan captcha pada view

		$this->load->view('formpemesanan',$data); //load view
	}

	public function viewformedit($id){
		if (!$this->session->userdata('loggedin')) {
			redirect('crud/viewlogin');
		}else{
			$spt = $this->mymodel->get1Data("where id = '$id' ", "sepatu");
			$data = array('id' => $spt[0]['id'], 
			'nama_barang' => $spt[0]['nama_barang'],
			'harga' => $spt[0]['harga'],
			'keterangan' => $spt[0]['keterangan'],
			'image' => $spt[0]['image']);
			$this->load->view('form_edit',$data);	
		}
	}
	public function viewlogin(){
			$this->load->view('login');
	}
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$isLogin = $this->mymodel->login($username, $password);
		if ($isLogin) {
			$data=array('id' => $isLogin[0]->id ,
						'username' => $isLogin[0]->username
			 );
			$this->session->set_userdata('loggedin',$data);
			$this->viewadminhome();
		}else{
			$this->session->set_flashdata('gagal','username atau password salah');
			$this->viewlogin();
		}
			
		
	}
	public function logout(){
		$this->session->unset_userdata('loggedin');
		$this->session->sess_destroy();
		$this->index();
	}
	public function viewdetails($id){

		$data['sepatu'] = $this->mymodel->getDataid($id)->row_array();
		//echo '<pre>';var_dump($data);die();
		$this->load->view('details',$data);
	}

	

	public function insert(){
		$this->load->library('upload');
		// $fileUpload = array();
		// $isUpload = FALSE;

		$userFile = array(
				'upload_path' => './gambar/',
				'allowed_types' => 'jpg|jpeg|png'
			);
		$this->upload->initialize($userFile);
		if ($this->upload->do_upload('userFile')) {
			$fileUpload = $this->upload->data();
			$isUpload = TRUE;
		} else{
			$isUpload =FALSE;
		}
		

		if ($isUpload) {
			$nama_barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
		$keterangan = $_POST['keterangan'];
		$data_insert = array('nama_barang' => $nama_barang , 'harga' => $harga,'keterangan' => $keterangan, 'image' => 'gambar/'.$fileUpload['file_name'] );

			$res = $this->mymodel->insertData('sepatu', $data_insert);
			$this->viewadminhome();
		}else{
			$this->session->set_flashdata('gagal','gagal menambahkan data');
			$this->viewformadd();
		}
		
		
	}
	function do_update($id){
		$url = $this->do_upload();
		$id = $_POST['id'];
		$nama_barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
		$keterangan = $_POST['keterangan'];
		$gambar = $url;
		if(empty($url))
			$gambar = $_POST['gambarlama'];
		
		$data_update = array('id' => $id, 
		'nama_barang' => $nama_barang,'harga' => $harga,'image'=>$gambar , 'keterangan'=>$keterangan );

		$where = array('id' => $id );
		$res = $this->mymodel->updateData('sepatu',$data_update,$where);

		if($res >= 1){
			redirect('crud/viewadminhome','refresh');
		}

	}
	function do_upload(){
		$type = explode(".", $_FILES['gambar']['name']);
		$type = $type [count($type)-1];
		$url = 'gambar/'.$type;
		if(in_array($type, array('jpg','jpeg','gif','png','JPG','PNG','JPEG')))
			if(is_uploaded_file($_FILES['gambar']['tmp_name']))
				if(move_uploaded_file($_FILES['gambar']['tmp_name'], $url))
					return $url;
			return "";
	}
	// public function update($kode_barang){
 //    $this->load->helper('form');
 //    $this->load->library('form_validation');
 //    $this->load->library('upload');

 //    $is_submit = $this->input->post('is_submit');

 //    if(isset($is_submit) && $is_submit == 1){
 //       $fileUpload = array();
 //       $isUpload = FALSE;
 //       $config = array(
 //         'upload_path' => './uploads/',
 //         'allowed_types' => 'jpg|jpeg|png',
 //         'max_size' => 512
 //       );
 //       $this->upload->initialize($config);
 //      if($this->upload->do_upload('userfile')){
 //        $fileUpload = $this->upload->data();
 //        $isUpload = TRUE;
 //      }
 //      if($isUpload){
 //        $data =array(
 //         'kode_barang' => $this->input->post('kode_barang'),
 //         'nama_barang' => $this->input->post('nama_barang'),
 //         'satuan' => $this->input->post('satuan'),
 //         'jumlah' => $this->input->post('jumlah'),
 //         'harga' => $this->input->post('harga'),
 //         'kategori' => $this->input->post('kategori'),
 //         'img_src' => $fileUpload['file_name']
 //       );
 //      $this->barang_model->update_barang($kode_barang,$data);
 //       redirect('barang');
 //      }
 //    }else{
 //          $data['barang'] = $this->barang_model->get_barang_id($kode_barang);
 //         $this->load->view('views/update',$data);
 //    }
 //  }

	// function do_edit($kode_barang){
	// 	$brg = $this->mymodel->getData(" where kode_barang = '$kode_barang' ");
	// 	$data = array('kode_barang' => $brg[0]['kode_barang'], 
	// 		'nama_barang' => $brg[0]['nama_barang'],
	// 		'satuan' => $brg[0]['satuan'],
	// 		'jumlah' => null,
	// 		'harga' => $brg[0]['harga'],
	// 		'kategori' => $brg[0]['kategori']);
		
	// 	$this->load->view('form_edit', $data);
	// }

	// function do_update($kode_barang){
	// 	$brg = $this->mymodel->getData(" where kode_barang = '$kode_barang' ");
	// 	$data = array('jumlah' =>$brg[0]['jumlah'] );
	// 	$kode_barang = $_POST['kode_barang'];
	// 	$nama_barang = $_POST['nama_barang'];
	// 	$satuan = $_POST['satuan'];
	// 	$jumlah = $_POST['jumlah'] + $data['jumlah'];
	// 	$harga = $_POST['harga'];
	// 	$kategori = $_POST['kategori'];
	// 	$data_update = array( 
	// 	'nama_barang' => $nama_barang , 'satuan' => $satuan,'jumlah' => $jumlah, 'harga' => $harga, 'kategori' => $kategori );
		
	// 	$res = $this->mymodel->updateData($jumlah,$kode_barang);

	// 	if($res >= 1){
	// 		redirect('crud/index');
			
	// 	}

	// }

	public function delete($id){
		$res = $this->mymodel->deleteData($id);
		redirect('crud/viewadminhome');
	}
	public function deletepesanan($id){
		$res = $this->mymodel->deleteDatapesanan($id);
		redirect('crud/viewadminhomepesanan');
	}
	public function search_keyword()
    {	
    	$keyword=$this->input->post('keyword');
        $jumlah = $this->mymodel->getJumlahDatakeyword($keyword);
		$config['base_url'] = 'http://localhost/codeigniter/crud/search_keyword';
		$config['total_rows'] = $jumlah;
		$config['per_page'] = 12;

		$config['full_tag_open'] = '<ul class="pagination">';
	    $config['full_tag_close'] = '</ul>';
	    $config['first_link'] = '&laquo; First';
	    $config['first_tag_open'] = '<li class="prev page">';
	    $config['first_tag_close'] = '</li>';
	 
	    $config['last_link'] = 'Last &raquo;';
	    $config['last_tag_open'] = '<li class="next page">';
	    $config['last_tag_close'] = '</li>';
	 
	    $config['next_link'] = 'Next &rarr;';
	    $config['next_tag_open'] = '<li class="next page">';
	    $config['next_tag_close'] = '</li>';
	 
	    $config['prev_link'] = '&larr; Prev';
	    $config['prev_tag_open'] = '<li class="prev page">';
	    $config['prev_tag_close'] = '</li>';
	 
	    $config['cur_tag_open'] = '<li class="active"><a href="">';
	    $config['cur_tag_close'] = '</a></li>';
	 
	    $config['num_tag_open'] = '<li class="page">';
	    $config['num_tag_close'] = '</li>';

		$this->pagination->initialize($config);

			
		$res['data']= $this->mymodel->getDatakeyword($config['per_page'],$this->uri->segment(3),$keyword);
		$this->load->view('home',$res);

    }
    public function insertpemesanan(){
		//cek apakah secure code yang diinputkan oleh User sudah benar atau belum.
		if($this->input->post('input_captcha') != $this->session->userdata('captcha_str')){
			echo '
				<script>
					alert("Huruf Captcha yang Anda masukkan tidak sama. Silahkan coba sekali lagi");
					window.location = "'.site_url().'/crud";
				</script>
			';
		}else{
			$nama_barang = $_POST['nama_barang'];
			$harga = $_POST['harga'];
			$nama_pemesan = $_POST['nama_pemesan'];
			$email = $_POST['email'];
			$alamat = $_POST['alamat'];
			$nohp = $_POST['nohp'];
			$data_insert = array('nama_barang' => $nama_barang , 'harga' => $harga,'nama_pemesan' => $nama_pemesan, 'email' => $email, 'alamat' => $alamat, 'nohp' => $nohp);

			$res = $this->mymodel->insertData('pesanan', $data_insert);
			$this->index();
		}
	} 
}