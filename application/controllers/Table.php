<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Table extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('data_model');
    }

    public function index()
    {
        $data['meta'] = [
            "title" => "Table Monitoring"
        ];
        $data['datas'] = $this->data_model->get_all_data();
        $this->load->view('table', $data);
    }
}
