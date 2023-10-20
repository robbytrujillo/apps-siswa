<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index () {
        $data['title'] = 'Dashboard';

        $this->load->view('stemplates/header', $data); 
        $this->load->view('stemplates/sidebar', $data); 
        $this->load->view('dashboard'); 
        $this->load->view('stemplates/footer'); 
    }
}
