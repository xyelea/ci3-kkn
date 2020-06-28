<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
	function index()
	{
		$data['title'] = 'Covid Tracker |';
		$data['data'] = ' Indonesia';
		$this->load->view('landing_page', $data);
	}

	public function indonesia()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries/indonesia';
		$readAPI = file_get_contents($API);
		$data['indo'] = json_decode($readAPI, true);

		$data['title'] = 'Covid Tracker |';
		$data['data'] = ' Indonesia';

		$this->load->view('Templates/header', $data);
		$this->load->view('Ind/indo', $data);
		$this->load->view('Templates/footer');
	}

	public function provinsi()
	{
		$API = 'https://api.kawalcorona.com/indonesia/provinsi';
		$readAPI = file_get_contents($API);
		$data['provinsi'] = json_decode($readAPI, true);

		$data['title'] = 'Covid Tracker |';
		$data['data'] = ' Provinsi';

		$this->load->view('Templates/header', $data);
		$this->load->view('Ind/indo-prov', $data);
		$this->load->view('Templates/footer');
	}

	public function peta()
	{
		$API = 'https://api.kawalcorona.com/indonesia/provinsi';
		$readAPI = file_get_contents($API);
		$data['provinsi'] = json_decode($readAPI, true);

		$data['title'] = 'Covid Tracker |';
		$data['data'] = ' Provinsi';

		$this->load->view('Templates/header', $data);
		$this->load->view('Ind/peta', $data);
		$this->load->view('Templates/footer');
	}

	public function dunia()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries';
		$readAPI = file_get_contents($API);
		$data['world'] = json_decode($readAPI, true);

		$data['title'] = 'Covid Tracker |';
		$data['data'] = ' Dunia';

		$this->load->view('Templates/header', $data);
		$this->load->view('Ind/dunia', $data);
		$this->load->view('Templates/footer');
	}

	public function countries()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries';
		$readAPI = file_get_contents($API);
		$data['count'] = json_decode($readAPI, true);

		$data['num'] = count($data['count']);

		$data['title'] = 'Covid Tracker |';
		$data['data'] = ' Negara';

		$this->load->view('Templates/header', $data);
		$this->load->view('Ind/wrd-count', $data);
		$this->load->view('Templates/footer');
	}
	function faq()
	{
	}
	function informasi()
	{
		$data['title'] = 'Covid Tracker |';
		$data['data'] = ' Pusat Informasi';
		$this->load->view('informasi/base', $data);
	}
	function panduan()
	{
		$data['title'] = 'Covid Tracker |';
		$data['data'] = ' Panduan';
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
