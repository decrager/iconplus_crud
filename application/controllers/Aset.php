<?php

require('./sheet/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

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

	public function export()
	{
		$aset	= $this->Aset_m->getData()->result();
		$spreadsheet = new Spreadsheet();

		$spreadsheet->getProperties()->setCreator('Kelompok 7')
		->setLastModifiedBy('Kelompok 7 - Icon Plus')
		->setTitle('Laporan Aset Icon Plus')
		->setSubject('Pelaporan excel')
		->setDescription('Generate laporan excel dari websote')
		->setKeywords('excel openxml php')
		->setCategory('Test result file');

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'ID')
		->setCellValue('B1', 'Jenis')
		->setCellValue('C1', 'Jumlah')
		;

		$i=2; foreach($aset as $data) {

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A'.$i, $data->id)
		->setCellValue('B'.$i, $data->tahun)
		->setCellValue('C'.$i, $data->aset);
		$i++;
		}

		$spreadsheet->getActiveSheet()->setTitle('Laporan Aset '.date('d-m-Y H'));
		$spreadsheet->setActiveSheetIndex(0);

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Laporan Aset Icon Plus.xlsx"');
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
