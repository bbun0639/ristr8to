<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Bangkok');
        $this->datetime = date('Y-m-d H:i:s');
    }

    public function index()
    {
        $this->load->view('home_view');
    }

}
