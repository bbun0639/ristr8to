<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

    function index() {
        redirect('shop/coffee');
    }

    public function coffee($type = "", $value = NULL) {

        $data['coffee_brew'] = "";
        $data['coffee_roast'] = "";
        $data['promo'] = "";

        if ($type == 'roast' && $value != NULL) {
            $data['roast'] = $value;
            $data['brewing'] = 0;
            if ($value == "acidity") {
                $data['coffee_roast'] = "AND (coffee_roast BETWEEN 0 AND 12) ";
            } elseif ($value == "sweetness") {
                $data['coffee_roast'] = "AND (coffee_roast BETWEEN 13 AND 38) ";
            } elseif ($value == "body") {
                $data['coffee_roast'] = "AND (coffee_roast BETWEEN 39 AND 62) ";
            } elseif ($value == "saltiness") {
                $data['coffee_roast'] = "AND (coffee_roast BETWEEN 63 AND 88) ";
            } elseif ($value == "bitterness") {
                $data['coffee_roast'] = "AND (coffee_roast BETWEEN 89 AND 100) ";
            } else {
                $data['roast'] = "body";
                $data['coffee_roast'] = "AND (coffee_roast BETWEEN 39 AND 62) ";
            }
        } else if ($type == 'brewing' && $value != NULL) {
            $data['brewing'] = $value;
            $data['roast'] = 0;
            $data['coffee_brew'] = "AND (coffee_brew LIKE '%" . $value . "%')";
        } else {
            $data['brewing'] = 0;
            $data['roast'] = "body";
            $data['coffee_roast'] = "AND (coffee_roast BETWEEN 39 AND 62) ";
        }

        $this->load->view('shop_coffee_view', $data);
    }

    public function coffee_single($coffee_id, $roast) {
        $sql = $this->db->query("SELECT * FROM ristr8to_coffee WHERE coffee_id = $coffee_id");
        if ($sql->num_rows() == 1) {
            $data['row'] = $sql->row_array();
            $data['roast'] = $roast;
            $this->load->view('shop_coffee_single_view', $data);
        } else {
            redirect('shop/coffee');
        }
    }

    public function coffee_blend($coffee_id, $roast) {
        $data['roast'] = $roast;
        $result = $this->db->query("SELECT * FROM ristr8to_coffee WHERE coffee_id = $coffee_id");
        if ($result->num_rows() == 1) {
            $data['row'] = $result->row_array();
            $this->load->view('shop_coffee_blend_view', $data);
        } else {
            redirect('shop/coffee');
        }
    }

    // add new Page
    public function coffee_shop() {
        $this->load->view('new_shop_coffee_view');
    }

    public function brewing_accessories() {
        $this->load->view('brewing_acc_view');
    }

    public function coffee_courses() {
        $this->load->view('coffee_courses_view');
    }

}
