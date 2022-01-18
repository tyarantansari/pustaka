<?php  
class Kerja extends CI_Controller
{
	public function index()
	{
		$this->load->view('input_lamar');
}
	
	public function baca()
	{
		$data = [
				 'nama' => $this->input->post('nama'),
				 'jekel' => $this->input->post('jekel'),
				 'tanggal' => $this->input->post('tanggal'),
				 'bln' => $this->input->post('bln'),
				 'tahun' => $this->input->post('tahun'),
				 'domisili' => $this->input->post('domisili'),
				 'posisi' => $this->input->post('posisi'),
				 'thn' => $this->input->post('thn'),
				 'skill' => $this->input->post('skill')
				];

	$this->load->view('output_lamar', $data);		

	}
}
