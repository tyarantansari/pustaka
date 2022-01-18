<?php  
class Contoh1 extends CI_Controller
{
	public function index()

	{
		echo "<h1>Perkenalkan</h1><br>";
		echo "=============================<br>";
		echo "*************************<br>";
		echo "Nama : Farin Rafida<br>
		      Kelas : 12.3A.12<br>
		      No.Telp : 085759798655<br>
		      Alamat : Ciledug<br>
		      Hoby : Menggambar<br>";
		echo "*************************<br>";
		echo "=============================<br>";
	}
	public function hasil()
	{
		$this->load->view('lihat_hasil');
	}

}