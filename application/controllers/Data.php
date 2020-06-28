<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{

    public function index()
    {
        $API = 'https://coronavirus-19-api.herokuapp.com/countries/indonesia';
        $readAPI = file_get_contents($API);
        $data['indo'] = json_decode($readAPI, true);

        $data['title'] = 'COVID-ID - ';
        $data['data'] = 'Indonesia';

        $this->load->view('templates/header', $data);
        $this->load->view('Ind/indo', $data);
        $this->load->view('templates/footer');
    }

    public function provinsi()
    {
        $API = 'https://api.kawalcorona.com/indonesia/provinsi';
        $readAPI = file_get_contents($API);
        $data['provinsi'] = json_decode($readAPI, true);

        $data['title'] = 'COVID-ID - ';
        $data['data'] = 'Province';

        $this->load->view('templates/header', $data);
        $this->load->view('Ind/indo-prov', $data);
        $this->load->view('templates/footer');
    }

    public function world()
    {
        $API = 'https://coronavirus-19-api.herokuapp.com/countries';
        $readAPI = file_get_contents($API);
        $data['world'] = json_decode($readAPI, true);

        $data['title'] = 'COVID-ID - ';
        $data['data'] = 'World';

        $this->load->view('templates/header', $data);
        $this->load->view('Ind/dunia', $data);
        $this->load->view('templates/footer');
    }

    public function countries()
    {
        $API = 'https://coronavirus-19-api.herokuapp.com/countries';
        $readAPI = file_get_contents($API);
        $data['count'] = json_decode($readAPI, true);

        $data['num'] = count($data['count']);

        $data['title'] = 'COVID-ID - ';
        $data['data'] = 'Countries';

        $this->load->view('templates/header', $data);
        $this->load->view('Ind/wrd-count', $data);
        $this->load->view('templates/footer');
    }
}
