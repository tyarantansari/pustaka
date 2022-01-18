<?php  
class Latihan3 extends CI_Controller
{
	
	public function about($nama='ari', $pekerjaan='Dosen', $alamat='ciledug')
	{
		$data['nm'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['alamat'] = $alamat;

		$this->load->view('tampil_data', $data); 	
	}
}
