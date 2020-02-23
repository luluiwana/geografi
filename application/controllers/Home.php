<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		
	}
	public function letakwilayah()
	{
		$this->load->view('header');
		$this->load->view('letakwilayah');
	}
	public function luasbatas()
	{
		$this->load->view('header');
		$this->load->view('luasbatas');
	}
		public function bentukwilayah()
	{
		$this->load->view('header');
		$this->load->view('bentukwilayah');
	}
			public function perairan()
	{
		$this->load->view('header');
		$this->load->view('perairan');
	}
			public function transportasi()
	{
		$this->load->view('header');
		$this->load->view('transportasi');
	}
	public function potensilaut()
	{
		$this->load->view('header');
		$this->load->view('potensilaut');
	}
}
