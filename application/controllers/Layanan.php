<?php

require('./sheet/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

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

	public function export()
	{
		$layanan	= $this->Layanan_m->getData()->result();
		$spreadsheet = new Spreadsheet();

		$spreadsheet->getProperties()->setCreator('Kelompok 7')
		->setLastModifiedBy('Kelompok 7 - Icon Plus')
		->setTitle('Laporan Layanan Icon Plus')
		->setSubject('Pelaporan excel')
		->setDescription('Generate laporan excel dari websote')
		->setKeywords('excel openxml php')
		->setCategory('Test result file');

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'ID')
		->setCellValue('A1', 'Jenis')
		->setCellValue('C1', 'Jumlah')
		;

		$i=2; foreach($layanan as $data) {

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A'.$i, $data->id)
		->setCellValue('B'.$i, $data->jenis)
		->setCellValue('C'.$i, $data->jumlah);
		$i++;
		}

		$spreadsheet->getActiveSheet()->setTitle('Laporan Layanan '.date('d-m-Y H'));
		$spreadsheet->setActiveSheetIndex(0);

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Laporan Layanan Icon Plus.xlsx"');
		header('Cache-Control: max-age=0');
		header('Cache-Control: max-age=1');
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0


		$writer = IOFactory::createWriter($spreadsheet, 'Xlsx');
		$writer->save('php://output');
		exit;
		
		
	}

}
