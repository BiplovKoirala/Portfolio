<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

    
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('portfolio');
        $this->load->view('includes/footer');
    }
}

