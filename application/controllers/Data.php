<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
	// default
	function index()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Indonesia',
		);
		$this->load->view('landing_page', $data);
	}
	// Data persebaran Dunia
	public function dunia()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries';
		$readAPI = curl_get_file_contents($API);

		$data = array(
			'world' => json_decode($readAPI, true),
			'title' => 'Covid Tracker |',
			'data' => ' Dunia',
			'isi' => 'Ind/dunia'
		);
		$this->load->view('Templates/wrapper_sebaran', $data, FALSE);
	}
	// Data Persebaran Indonesia
	public function indonesia()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries/indonesia';
		$readAPI = curl_get_file_contents($API);

		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Indonesia',
			'isi' => 'Ind/indo',
			'indo' => json_decode($readAPI, true)
		);

		$this->load->view('Templates/wrapper_sebaran', $data, FALSE);
	}
	// Data Persebaran Provinsi
	public function provinsi()
	{
		$bacaAPI = curl_get_file_contents('https://api.kawalcorona.com/indonesia/provinsi/');
		$data['provinsi'] = json_decode($bacaAPI, true);
		$data['title'] = 'Covid Tracker | ';
		$data['data'] = 'Provinsi';

		$data['isi'] = 'Ind/indo-prov';
		$data['tb'] = 'Covid Tracker';
		$this->load->view('Templates/wrapper_sebaran', $data,  FALSE);
		// echo var_dump($url);
	}

	public function negara()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries';
		// $API = 'https://api.kawalcorona.com/'; Main API
		$readAPI = curl_get_file_contents($API);

		$data = array(
			'negara' => json_decode($readAPI, true),
			'title' => 'Covid Tracker |',
			'data' => ' Negara',
			'tb' => 'Tabel persebaran Covid-19 |',
			//'isi' => 'Ind/negarakawal',
			'isi' => 'Ind/negarahero'
		);

		$this->load->view('Templates/wrapper_sebaran', $data, FALSE);
		// echo var_dump($data['negara']);
	}

	// Route Faq
	function faq()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'faq/faq',
			'data' => ' Pertanyaan yang sering di ajukan'
		);
		$this->load->view('Templates/wrapper_faq', $data, FALSE);
	}

	// Route Informasi
	function informasi()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/covid',
			'data' => ' Covid-19'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
	function informasi_simptomatik()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/simptomatik',
			'data' => ' simptomatik'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
	function informasi_asimptomatik()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/asimptomatik',
			'data' => ' Asimptomatik'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
	function informasi_new_normal()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/new_normal',
			'data' => ' New Normal'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
	function informasi_pasien()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/pasien',
			'data' => ' Pasien'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}

	function informasi_call_center()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/call',
			'data' => '  Call Center'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
	function informasi_psbb()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/psbb',
			'data' => ' PSBB'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}

	function informasi_infografis()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/infografis',
			'data' => ' Infografis'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}

	// Route Panduan
	function panduan()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/masker',
			'data' => ' Panduan'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	function panduan_masker()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/masker',
			'data' => ' Panduan Menggunakan Masker'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	function panduan_new_normal()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/new_normal',
			'data' => ' Panduan menjalani New Normal'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	function panduan_etika()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/etika',
			'data' => ' Panduan Etika ketika Bersin dan Batuk'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	function panduan_membuang_masker()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/membuang_masker',
			'data' => ' Panduan Membuang Masker'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	function panduan_ibu_hamil()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/ibu_hamil',
			'data' => ' Panduan Bagi Ibu Hamil dan Menyusui'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	function panduan_gejala()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'panduan/jika_mengalami_gejala',
			'data' => ' Panduan Jika Mengalami gejala Virus COVID-19'
		);
		$this->load->view('Templates/wrapper_panduan', $data, FALSE);
	}
	// Route Peta
	function peta()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/db_dunia',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
	function peta_db_id()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/db_id',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
	function peta_dunia()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/dunia',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
	function peta_tenaga_medis()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/tenaga_medis',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
	function peta_rentan()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/rentan',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
	function peta_rs()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/rs',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}


	function testing()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries';
		$readAPI = curl_get_file_contents($API);

		$data = array(
			'world' => json_decode($readAPI, true),
			'title' => 'Covid Tracker |',
			'isi' => 'beta',
			'data' => ' Indonesia'
		);
		$this->load->view('beta', $data, FALSE);
	}
}
