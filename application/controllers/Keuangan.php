<?php

require('./sheet/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

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

	public function export()
	{
		$keuangan	= $this->Keuangan_m->getData()->result();
		$spreadsheet = new Spreadsheet();

		$spreadsheet->getProperties()->setCreator('Kelompok 7')
		->setLastModifiedBy('Kelompok 7 - Icon Plus')
		->setTitle('Laporan Keuangan Icon Plus')
		->setSubject('Pelaporan excel')
		->setDescription('Generate laporan excel dari websote')
		->setKeywords('excel openxml php')
		->setCategory('Test result file');

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'ID')
		->setCellValue('B1', 'Tahun')
		->setCellValue('C1', 'Pendapatan')
		->setCellValue('D1', 'Pengeluaran')
		->setCellValue('E1', 'Laba')
		;

		$i=2; foreach($keuangan as $data) {

		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A'.$i, $data->id)
		->setCellValue('B'.$i, $data->tahun)
		->setCellValue('C'.$i, $data->pendapatan)
		->setCellValue('D'.$i, $data->pengeluaran)
		->setCellValue('E'.$i, $data->laba);
		$i++;
		}

		$spreadsheet->getActiveSheet()->setTitle('Laporan keuangan '.date('d-m-Y H'));
		$spreadsheet->setActiveSheetIndex(0);

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="Laporan Keuangan Icon Plus.xlsx"');
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

	public function pdf()
	{
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdfgenerator');
		
        // filename dari pdf ketika didownload
        $file_pdf = 'laporan keuangan icon plus pdf';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
		$data['keuangan']	= $this->Keuangan_m->getData()->result();
		$html				= $this->load->view('keuangan/keuangan_pdf', $data, true);
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}
}
