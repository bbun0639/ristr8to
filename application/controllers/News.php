<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct() {

       		 parent::__construct();
        	date_default_timezone_set('Asia/Bangkok');
        	$this->datetime = date('Y-m-d H:i:s');
	}

    public function year($news_year = 2016, $news_id = 0) {

        if ($news_id != 0) {
            $news_id = $news_id;
            $row = $this->db->query("SELECT * FROM ristr8to_news WHERE news_id = $news_id AND news_year = $news_year");
        } else {
            $row = $this->db->query("SELECT * FROM ristr8to_news WHERE news_year = $news_year ORDER BY news_order DESC LIMIT 1");
        }

        if ($row->num_rows() == 1) {
            $data['row'] = $row->row_array();
            $data['news_id'] = $news_id;
            $data['news_year'] = $news_year;
            $data['found'] = TRUE;
            $this->load->view('news_view', $data);
        } else {
            $data['found'] = FALSE;
            $data['news_year'] = $news_year;
            $this->load->view('news_view', $data);
        }
    }

}
