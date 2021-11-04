<?php

class Layanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Layanan_m');
	}

	public function index()
	{
		$site = [
			'title' => 'Icon Plus | Layanan'
		];

		$data['layanan'] = $this->Layanan_m->getData()->result();

		$this->load->view('_layouts/top', $site);
		$this->load->view('layanan/index', $data);
		$this->load->view('_layouts/bottom');
	}

	public function create()
	{
		$jenis	= $this->input->post('jenis');
		$jumlah	= $this->input->post('jumlah');

		$data	= array (
			'jenis'		=> $jenis,
			'jumlah'	=> $jumlah
		);

		$this->Layanan_m->inputData($data, 'layanan');
		redirect('layanan/index');
	}

	public function edit($id)
	{
		$site	= [
			'title' => 'Icon Plus | Edit'
		];

		$where	= array ('id' => $id);
		$data['layanan']	= $this->Layanan_m->editData($where, 'layanan')->result();

		$this->load->view('_layouts/top', $site);
		$this->load->view('layanan/edit', $data);
		$this->load->view('_layouts/bottom');
	}

	public function update()
	{
		$id		= $this->input->post('id');
		$jenis	= $this->input->post('jenis');
		$jumlah	= $this->input->post('jumlah');

		$data	= array (
			'jenis'		=> $jenis,
			'jumlah'	=> $jumlah
		);

		$where	= array (
			'id' => $id
		);

		$this->Layanan_m->updateData($where, $data, 'layanan');
		redirect('layanan/index');
	}

	public function delete($id)
	{
		$where	= array('id' => $id);
		$this->Layanan_m->deleteData($where, 'layanan');
		redirect('layanan/index');
	}

}
