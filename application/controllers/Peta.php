<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Peta extends CI_Controller
{

	// Route Peta
	function index()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/db_dunia',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
	function dashboard_indonesia()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/db_id',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
	function dunia()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/dunia',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
	function tenaga_medis()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/tenaga_medis',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
	function kerentanan()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/rentan',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
	function rumahsakit()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'peta/rs',
			'data' => ' Peta Persebaran'
		);
		$this->load->view('Templates/wrapper_peta', $data, FALSE);
	}
}
