<?php
defined('BASEPATH') or exit('No direct script access allowed');
class faq extends CI_Controller
{
	function index()
	{
		$data = array(
			'title' => 'Covid Tracker |',
			'isi' => 'faq/faq',
			'data' => ' Pertanyaan yang sering di ajukan'
		);
		$this->load->view('Templates/wrapper_faq', $data, FALSE);
	}
}
