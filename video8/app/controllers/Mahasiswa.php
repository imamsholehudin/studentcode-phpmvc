<?php 
	class Mahasiswa extends Controller{
		public function index(){
			$data['judul']= "Halaman Mahasiswa";
			$data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
			//$data['nama'] = $this->model('User_model')->getUser();
			$this->view('templates/header',$data);
			$this->view('mahasiswa/index',$data);
			$this->view('templates/footer');
		}

		public function detail($id){
			$data['judul']= "Detail Mahasiswa";
			$data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
			//$data['nama'] = $this->model('User_model')->getUser();
			$this->view('templates/header',$data);
			$this->view('mahasiswa/detail',$data);
			$this->view('templates/footer');
		}
	}
