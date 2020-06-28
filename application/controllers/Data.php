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

	public function peta()
	{
		$API = 'https://api.kawalcorona.com/indonesia/provinsi';
		$readAPI = file_get_contents($API);

		$data = array(
			'provinsi' => json_decode($readAPI, true),
			'title' => 'Covid Tracker |',
			'data' => ' Provinsi'
		);

		$this->load->view('Templates/header', $data);
		$this->load->view('Ind/peta', $data);
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
	function faq()
	{
	}
	function informasi()
	{

		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Provinsi'
		);
		$this->load->view('informasi/base', $data);
	}
	function panduan()
	{

		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Provinsi'
		);
		$this->load->view('panduan/base', $data);
	}

	function beta()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries/indonesia';
		$readAPI = file_get_contents($API);
		$data['indo'] = json_decode($readAPI, true);

		$data['title'] = 'Covid Tracker |';
		$data['data'] = ' Testing Halaman';

		$this->load->view('beta', $data);
	}
}
