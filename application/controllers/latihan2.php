<?php  
class Latihan2 extends CI_Controller
{
	public function index()

	public function penjumlahan($n1, $n2)
	{
		
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);
		$hasil = $this->Model_latihan1->jumlah($n1, $n2);

		$this->load->view('view-latihan1', $data); 	
	}
}
