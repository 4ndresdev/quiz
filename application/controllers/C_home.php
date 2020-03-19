<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_home extends CI_Controller
{


	public function index()
	{
		$this->load->view('home');
	}

	public function quiz()
	{
		$this->load->view('quiz');
	}
}
