<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Persebaran extends CI_Controller
{

	// Data Persebaran Indonesia
	public function index()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries/indonesia/';
		$readAPI = curl_get_file_contents($API);

		$data = array(
			'title' => 'Covid Tracker |',
			'data' => ' Indonesia',
			'isi' => 'Ind/indo',
			'indo' => json_decode($readAPI, true)
		);
		$this->load->view('Templates/wrapper_sebaran', $data, FALSE);
	}

	// Data persebaran Dunia
	public function dunia()
	{
		$API = 'https://coronavirus-19-api.herokuapp.com/countries/';
		$readAPI = curl_get_file_contents($API);

		$data = array(
			'world' => json_decode($readAPI, true),
			'title' => 'Covid Tracker |',
			'data' => ' Dunia',
			'isi' => 'Ind/dunia'
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
		$data['tb'] = 'Persebaran Covid-19 |';
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
			'tb' => 'persebaran Covid-19 |',
			//'isi' => 'Ind/negarakawal',
			'isi' => 'Ind/negarahero'
		);

		$this->load->view('Templates/wrapper_sebaran', $data, FALSE);
		// echo var_dump($data['negara']);
	}
}
