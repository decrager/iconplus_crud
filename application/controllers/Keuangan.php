<?php

class Keuangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Keuangan_m');
	}

	public function index()
	{
		$site = [
			'title' => 'Icon Plus | Keuangan'
		];

		$data['keuangan'] = $this->Keuangan_m->getData()->result();
		$this->load->view('_layouts/top', $site);
		$this->load->view('keuangan/index', $data);
		$this->load->view('_layouts/bottom');
	}

	public function create()
	{
		$tahun			= $this->input->post('tahun');
		$pendapatan		= $this->input->post('pendapatan');
		$pengeluaran	= $this->input->post('pengeluaran');
		$laba			= $this->input->post('pengeluaran');

		$data	= array (
			'tahun'			=> $tahun,
			'pendapatan'	=> $pendapatan,
			'pengeluaran'	=> $pengeluaran,
			'laba'			=> $laba
		);

		$this->Keuangan_m->inputData($data, 'keuangan');
		redirect('keuangan/index');
	}

	public function edit($id)
	{
		$site	= [
			'title' => 'Icon Plus | Edit'
		];

		$where	= array ('id' => $id);
		$data['keuangan']	= $this->Keuangan_m->editData($where, 'keuangan')->result();

		$this->load->view('_layouts/top', $site);
		$this->load->view('keuangan/edit', $data);
		$this->load->view('_layouts/bottom');
	}

	public function update()
	{
		$id				= $this->input->post('id');
		$tahun			= $this->input->post('tahun');
		$pendapatan		= $this->input->post('pendapatan');
		$pengeluaran	= $this->input->post('pengeluaran');
		$laba			= $this->input->post('laba');

		$data	= array (
			'tahun'			=> $tahun,
			'pendapatan'	=> $pendapatan,
			'pengeluaran'	=> $pengeluaran,
			'laba'			=> $laba
		);

		$where	= array (
			'id' => $id
		);

		$this->Keuangan_m->updateData($where, $data, 'keuangan');
		redirect('keuangan/index');
	}

	public function delete($id)
	{
		$where	= array('id' => $id);
		$this->Keuangan_m->deleteData($where, 'keuangan');
		redirect('keuangan/index');
	}
}
