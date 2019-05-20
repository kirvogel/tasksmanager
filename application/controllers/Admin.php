<?php

class Admin extends CI_Controller{
	function index() {
		$data['_view'] = 'admin';
        $this->load->view('layouts/main',$data);
	}
}
