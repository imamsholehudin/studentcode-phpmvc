<?php 
	class Mahasiswa_model{
		private $table= 'mahasiswa';
		private $db;


		public function __construct(){
			$this->db= new Database;
		}
		

		// [
		// 	[
		// 		"nama" => "sandika ",
		// 		"nim" => "0882844",
		// 		"email" => "sandik@gmail.com",
		// 		"jurusan" => "Teknik Informatika"

		// 	],
		// 	[
		// 		"nama" => "sandi",
		// 		"nim" => "0882833",
		// 		"email" => "sandi@gmail.com",
		// 		"jurusan" => "Teknik Informatika"

		// 	],
		// 	[
		// 		"nama" => "dika ",
		// 		"nim" => "02844",
		// 		"email" => "dika@gmail.com",
		// 		"jurusan" => "Teknik Informatika"

		// 	]
		// ];

		public function getAllMahasiswa(){
			$this->db->query("SELECT * FROM ".$this->table);
			return $this->db->resultSet();
		}
		public function getMahasiswaById($id){
			$this->db->query('SELECT * FROM '.$this->table.' WHERE id=:id');
			$this->db->bind('id',$id);
			return $this->db->single();
		}
	}

 ?>