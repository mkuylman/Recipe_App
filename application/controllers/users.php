<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public function index()
	{
		$this->load->view("index");
	}

	public function login()
	{
		//var_dump($this->input->post());
		//die();
		if($this->user->login($this->input->post())){
			// true: user found
			redirect('/recipes');
		}
		else {
			//false: user not found
			redirect('/');
		}
	}

	public function register()
	{
		//var_dump($this->input->post());
		//die();
		$this->user->register($this->input->post());
		redirect('/');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect("/");
	}
}