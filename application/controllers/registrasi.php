<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Registrasi extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();

 $this->load->helper('form');
 }

 public function index()
 {
 $ar_nama = array(
 'name'=>'nama',
 'id'=>'nama',
 'value'=>'',
 'class'=>'teks',
 'size'=>'40'
 );
 $data['f_nama'] = form_input($ar_nama);

 //membuat form nim
$ar_nim = array(
 'name'=> 'nim',
 'id'=>'nim',
 'value'=>'',
 'class'=>'teks',
 'size'=>'40'
 );
 $data['f_nim'] = form_input($ar_nim);

 //membuat form jekel
 $ar_jekel1 = array(
 'name'=>'jekel[]',
 'id'=>'jekel',
 'value'=>'Perempuan',
 );

 $ar_jekel2 = array(
 'name'=>'jekel[]',
 'id'=>'jekel',
 'value'=>''
 );

 $data['f_jekel1'] = form_radio($ar_jekel1);
 $data['f_jekel2'] = form_radio($ar_jekel2);

 //membuat form alamat
 $ar_alamat = array(
 'name'=>'alamat',
 'id'=>'alamat',
 'rows'=>'5',
 'cols'=>'40',
 'class'=>'teksarea'
 );
 $data['f_alamat'] = form_textarea($ar_alamat);

 //membuat form email
$ar_email = array(
 'name'=> 'email',
 'id'=>'email',
 'value'=>'',
 'class'=>'teks',
 'size'=>'40'
 );
 $data['f_email'] = form_input($ar_email);

//membuat form buku
$ar_buku = array(
 'name'=> 'buku',
 'id'=>'buku',
 'value'=>'',
 'class'=>'teks',
 'size'=>'40'
 );
 $data['f_buku'] = form_input($ar_buku);

//membuat form studi
 $ar_studi = array(
 'D3'=>'D3',
 'S1'=>'S1'
 );
 $data['f_studi'] = form_dropdown('studi', $ar_studi);

//membuat tombol
 $ar_tombol1 = array(
 'name'=>'submit',
 'id'=> 'submit',
 'value'=>'Simpan',
 'class'=>'tombol'
 );
 $ar_tombol2 = array(
 'name'=>'cancel',
 'id'=> 'cancel',
 'value'=>'Batal',
 'class'=>'tombol'
 );
 $data['f_tombol1'] = form_submit($ar_tombol1);
 $data['f_tombol2'] = form_reset($ar_tombol2);

 $this->load->view('input_registrasi', $data);

 }
//end of class
}
