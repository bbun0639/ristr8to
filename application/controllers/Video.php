<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

    public function ristr8to() {
        $this->load->view('video_ristr8to_view');
    }

    public function lattearts() {
        $this->load->view('video_lattearts_view');
    }

    public function roast8ry() {
        $this->load->view('video_roast8ry_view');
    }

}
