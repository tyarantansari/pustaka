<?php  
defined('BASEPATH') or exit ('no direct script access allowed');

class Artis extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()

	{
		$data['judul'] = "";
		$this->load->view('login', $data);
		$this->load->view('stokbarang', $data);
	}
}