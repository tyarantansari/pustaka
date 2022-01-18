<?php  
class Perpustakaan extends CI_Controller
{
	public function index()
	{
		$this->load->view('input-buku');
}
	
	public function buku()
	{
		$data = [
				 'nama' => $this->input->post('nama'),
				 'nim' => $this->input->post('nim'),
				 'tanggal' => $this->input->post('tanggal'),
				 'buku' => $this->input->post('buku'),
				 'alamat' => $this->input->post('alamat'),
				 'jekel' => $this->input->post('jekel'),
				 'studi' => $this->input->post('studi')
				];

	$this->load->view('output-buku', $data);		

	}
}
