<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function roast8ry() {
        $this->load->view('about_ristr8o_view');
    }

    public function baristas() {
        $data['baristas'] = $this->db->query("SELECT * FROM ristr8to_baristas ORDER BY baristas_order ASC")->result_array();
        $this->load->view('about_baristas_view', $data);
    }

    public function djs() {
        $this->load->view('about_djs_view');
    }

    public function awards() {
        $this->load->view('about_awards_view');
    }
    
    // add new Page
    public function roasters() {
        $this->load->view('about_roasters_view');
    }

}
