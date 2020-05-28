<?php 
	class Mahasiswa_model{
		private $dbh;
		private $stmt;

		public function __construct(){
			//data source name
			$dsn = 'mysql:host=localhost;dbname=phpmvc';

			try {
				$this->dbh = new PDO($dsn, 'root','');
			} catch (PDOException $e) {
				die($e->getMessage());
			}
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
			$this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
			$this->stmt->execute();

			return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}

 ?>