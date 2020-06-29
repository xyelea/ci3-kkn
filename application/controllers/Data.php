<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{

	function index()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Indonesia',
		);
		$this->load->view('landing_page', $data);
	}

	public function indonesia()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries/indonesia';
		$readAPI = file_get_contents($API);

		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Indonesia',
			'indo' => json_decode($readAPI, true)
		);

		$this->load->view('Templates/header', $data);
		$this->load->view('Ind/indo', $data);
		$this->load->view('Templates/footer');
	}

	public function provinsi()
	{
		$API = 'https://api.kawalcorona.com/indonesia/provinsi';
		$readAPI = file_get_contents($API);

		$data = array(
			'provinsi' => json_decode($readAPI, true),
			'title' => 'Covid Tracker |',
			'data' => ' Provinsi'
		);

		$this->load->view('Templates/header', $data);
		$this->load->view('Ind/indo-prov', $data);
		$this->load->view('Templates/footer');
	}

	public function dunia()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries';
		$readAPI = file_get_contents($API);

		$data = array(
			'world' => json_decode($readAPI, true),
			'title' => 'Covid Tracker |',
			'data' => ' Dunia'
		);

		$this->load->view('Templates/header', $data);
		$this->load->view('Ind/dunia', $data);
		$this->load->view('Templates/footer');
	}

	public function countries()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries';
		$readAPI = file_get_contents($API);
		$data['count'] = json_decode($readAPI, true);

		$data = array(
			'count' => json_decode($readAPI, true),
			'num' => count($data['count']),
			'title' => 'Covid Tracker |',
			'data' => ' Negara'
		);
		$this->load->view('Templates/header', $data);
		$this->load->view('Ind/wrd-count', $data);
		$this->load->view('Templates/footer');
	}

	// Route Faq
	function faq()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Faq'
		);
		$this->load->view('Templates/wrapper_faq', $data, FALSE);
	}

	// Route Informasi
	function informasi()
	{

		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Pusat Informasi'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}

	// Route Panduan
	function panduan()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Panduan'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}

	// Route Peta
	function peta()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}

	function testing()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries';
		$readAPI = file_get_contents($API);

		$data = array(
			'world' => json_decode($readAPI, true),
			'title' => 'Covid Tracker |',
			'isi' => 'beta',
			'data' => ' Dunia'
		);

		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
}
