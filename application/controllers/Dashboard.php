<?php

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_m');
	}

	public function index()
	{
		$site	= [
			'title' => 'Icon Plus | Dashboard'
		];

		$this->load->view('_layouts/top', $site);
		$this->load->view('dashboard/index');
		$this->load->view('_layouts/bottom');
	}
}

?>