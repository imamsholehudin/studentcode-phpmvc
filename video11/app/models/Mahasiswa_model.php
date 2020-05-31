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

		public function tambahDataMahasiswa($data){
			$query = "INSERT INTO mahasiswa
					VALUES	('',:nama, :nim, :email, :jurusan)";

			$this->db->query($query);
			$this->db->bind('nama', $data['nama']);
			$this->db->bind('nim', $data['nim']);
			$this->db->bind('email', $data['email']);
			$this->db->bind('jurusan', $data['jurusan']);
			//var_dump($this->db);
			//var_dump(nama);


			//$this->db->execute(array(':nama' => $data['nama'], ':nim' => $data['nim'],':email' => $data['email'],':jurusan' => $data['jurusan']));
			$this->db->execute();

			return $this->db->rowCount();
		}

		public function hapusDataMahasiswa($id){
			$query = "DELETE FROM mahasiswa where id = :id";
			$this->db->query($query);
			$this->db->bind('id',$id);
			$this->db->execute();
			return $this->db->rowCount();
		}

	}

 ?>