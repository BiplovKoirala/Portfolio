<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		$this->load->database();
		$this->load->model('Blogmodel');
	}

    
    public function index()
    {
    	$this->data['blogs'] = $this->Blogmodel->getPosts();
        $this->load->view('includes/header');
        $this->load->view('blog', $this->data);
        $this->load->view('includes/footer');
    }
}

