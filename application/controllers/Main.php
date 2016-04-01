<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
    
	public function index()
	{   
        $data['title'] = "Home";
        $this->load->view('header', $data);
        $this->load->view('menubalk');
        $this->load->view('homepage');
	    $this->load->view('footer');
    }
}