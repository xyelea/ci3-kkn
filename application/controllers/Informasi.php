<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Informasi extends CI_Controller
{
	function index()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/covid',
			'data' => ' Covid-19'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}

	function simptomatik()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/simptomatik',
			'data' => ' simptomatik'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
	function asimptomatik()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/asimptomatik',
			'data' => ' Asimptomatik'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
	function new_normal()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/new_normal',
			'data' => ' New Normal'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
	function pasien()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/pasien',
			'data' => ' Pasien'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}

	function call_center()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/call',
			'data' => '  Call Center'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
	function psbb()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/psbb',
			'data' => ' PSBB'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}

	function website_resmi()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'informasi/infografis',
			'data' => ' Infografis'
		);
		$this->load->view('Templates/wrapper_informasi', $data, FALSE);
	}
}
