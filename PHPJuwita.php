<!DOCTYPE html>
<html>
<head>
	<title>OOP Class User With PHP Native</title>
    <link rel="stylesheet" href="PHPJuwita.css">
</head>
<body>

	<div class="box">
		<h2 ><br> Pemrograman Berbasis Web</h2>
		<?php 

		// class parents
		class Users {
			public $username,
				   $nama,
				   $email,
				   $telepon;


			public function __construct( $username, $nama, $email, $telepon, $judul_laporan = "", $nomor_struk = "" , $biaya = "") {
				$this->username = $username;
				$this->nama = $nama;
				$this->email = $email;
				$this->telepon = $telepon;
				$this->judul_laporan = $judul_laporan;
				$this->nomor_struk = $nomor_struk;
				$this->biaya = $biaya;
			}

			public function __toString() 
			{
				return $this->username ."	:	" . $this->nama . "		: 	" . $this->email . "	:	" . $this->telepon;
			}
		}

		// child class
		class Admin extends Users {
			public $judul_laporan;
			public function getInfoAdmin() {
				$str = "({$this->username}) {$this->nama} dengan email {$this->email} dan nomor telepon {$this->telepon} membuat {$this->judul_laporan}";
				return $str;

			}
		}

		// child class 
		class EO extends Users {
			public $nomor_struk;
			public function getInfoEO() {
				$str = "({$this->username}) {$this->nama} dengan email {$this->email} dan nomor telepon {$this->telepon} mencetak struk nomor {$this->nomor_struk}";
				return $str;
				}
		} 

		// child class 
		class Peserta extends Users {
			public $biaya;
			public function getInfoPeserta() {
				$str = "({$this->username}) {$this->nama} dengan email {$this->email} dan nomor telepon {$this->telepon} membayar event sebesar Rp. {$this->biaya}";
				return $str;

			}
		} 


		$user1 = new Users("rizz", "Rizka Dwi", "rizkadca@gmail.com", "082139639932");
		$user2 = new Admin("Ayu", "S. Ayu", "ayuuu@gmail.com", "082139639931", "Laporan Pemasukan");
		$user3 = new EO("juww", "Juwita.P", "ajuwita@gmail.com", "082143513226", "", 56);
		$user4 = new Peserta("aajeng", "Dyah Ajeng" , "aajeng1@gmail.com" , "082153413662", "", "", 50000 );

		echo "<br>";
		echo "<hr>";
		echo "<br>";
		echo "USER <br><br> ". $user1;
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "Admin : " . $user2->getInfoAdmin();
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "Event Organizer : " . $user3->getInfoEO();
		echo "<br>";
		echo "<br>";
		echo "<br>";
		echo "Peserta : " . $user4->getInfoPeserta();
		?>
	</div>
</body>
</html>

