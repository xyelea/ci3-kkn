<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Panduan extends CI_Controller
{
	// Route Panduan
	function index()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/masker',
			'data' => ' Panduan'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	function masker()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/masker',
			'data' => ' Panduan Menggunakan Dan Membuang Masker'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	function new_normal()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/new_normal',
			'data' => ' Panduan menjalani New Normal'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	function etika()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/etika',
			'data' => ' Panduan Etika ketika Bersin dan Batuk'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}

	function ibu_hamil()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/ibu_hamil',
			'data' => ' Panduan Bagi Ibu Hamil dan Menyusui'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	function gejala()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/jika_mengalami_gejala',
			'data' => ' Panduan Jika Mengalami gejala Virus COVID-19'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
}
