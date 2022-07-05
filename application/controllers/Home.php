<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
    }

    public function index()
    {
        $data['datas'] = $this->data_model->get_all_data();
        $data['meta'] = [
            "title" => "Home"
        ];
        $this->load->view('home', $data);
    }
}
