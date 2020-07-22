<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Locations extends CI_Controller {

    public function index() {
        $data['locations'] = $this->db->query("SELECT loc_id, loc_name FROM ristr8to_loc ORDER BY loc_id ASC")->result();
        $this->load->view('locations_view', $data);
    }

    function detail($loc_id) {
        $result = $this->db->query("SELECT * FROM ristr8to_loc WHERE loc_id = $loc_id");
        if ($result->num_rows() == 1) {
            $data['row'] = $result->row_array();
            $data['google_rate'] = $this->google_rate($data['row']['loc_googlerate']);
            $data['loc_tarate'] = $this->google_rate($data['row']['loc_tarate']);
            $data['loc_id'] = $data['row']['loc_id'];
            $this->load->view('locations_detail_view', $data);
        } else {
            redirect('locations');
        }
    }

    function google_rate($rate) {
//        $arr_rate = explode(".", $rate);
//
//
//        for ($i = 0; $i < $arr_rate[0]; $i++) {
//            echo "<i class='material-icons'>star</i>";
//        }
//
//        if ($arr_rate[1] < 3) {
//            echo "<i class='material-icons'>star_border</i>";
//        } elseif ($arr_rate[1] < 7) {
//            echo "<i class='material-icons'>star_half</i>";
//        } else {
//            echo "<i class='material-icons'>star</i>";
//        }
//
//        $rate_empty = 4 - $arr_rate[0];
//        for ($i = 0; $i < $rate_empty; $i++) {
//            echo "<i class='material-icons'>star_border</i>";
//        }
    }

    function ta_rate($rate) {
//        $arr_rate = explode(".", $rate);
//
//
//        for ($i = 0; $i < $arr_rate[0]; $i++) {
//            echo "<i class='material-icons'>radio_button_checked</i>";
//        }
//
//        if ($arr_rate[1] < 3) {
//            echo "<i class='material-icons'>radio_button_unchecked</i>";
//        } elseif ($arr_rate[1] < 7) {
//            echo "<i class='material-icons' style='position:relative;'><i class='material-icons' style='overflow:hidden;width:52%;position:absolute;top:0;left:0'>radio_button_checked</i>radio_button_unchecked</i>";
//        } else {
//            echo "<i class='material-icons'>radio_button_checked</i>";
//        }
//
//        $rate_empty = 4 - $arr_rate[0];
//        for ($i = 0; $i < $rate_empty; $i++) {
//            echo "<i class='material-icons'>radio_button_unchecked</i>";
//        }
    }

}
