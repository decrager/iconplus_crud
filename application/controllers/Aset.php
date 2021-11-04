<?php

class Aset extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Aset_m');
	}

	public function index()
	{
		$site = [
			'title' => 'Icon Plus | aset'
		];

		$data['aset'] = $this->Aset_m->getData()->result();
		$this->load->view('_layouts/top', $site);
		$this->load->view('aset/index', $data);
		$this->load->view('_layouts/bottom');
	}

	public function create()
	{
		$tahun			= $this->input->post('tahun');
		$aset			= $this->input->post('aset');

		$data	= array (
			'tahun'			=> $tahun,
			'aset'			=> $aset
		);

		$this->Aset_m->inputData($data, 'aset');
		redirect('aset/index');
	}

	public function edit($id)
	{
		$site	= [
			'title' => 'Icon Plus | Edit'
		];

		$where	= array ('id' => $id);
		$data['aset']	= $this->Aset_m->editData($where, 'aset')->result();

		$this->load->view('_layouts/top', $site);
		$this->load->view('aset/edit', $data);
		$this->load->view('_layouts/bottom');
	}

	public function update()
	{
		$id				= $this->input->post('id');
		$tahun			= $this->input->post('tahun');
		$aset			= $this->input->post('aset');

		$data	= array (
			'tahun'			=> $tahun,
			'aset'			=> $aset
		);

		$where	= array (
			'id' => $id
		);

		$this->Aset_m->updateData($where, $data, 'aset');
		redirect('aset/index');
	}

	public function delete($id)
	{
		$where	= array('id' => $id);
		$this->Aset_m->deleteData($where, 'aset');
		redirect('aset/index');
	}
}
