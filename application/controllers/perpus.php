<?php  
defined('BASEPATH') or exit ('no direct script access allowed');

class Perpus extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
	}

	public function daftar()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'jekel' => $this->input->post('jekel'),
			'alamat' => $this->input->post('alamat'),
			'studi' => $this->input->post('studi'),
			'tanggal' => $this->input->post('tanggal'),
			'telp' => $this->input->post('telp'),
			'buku' => $this->input->post('buku')];

		$this->load->view('d_input', $data);
}
}