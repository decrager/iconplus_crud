<!-- Page Wrapper -->
<div id="wrapper">

	<?php $this->load->view('_layouts/sidebar') ?>

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<?php $this->load->view('_layouts/topnav') ?>

			<!-- Begin Page Content -->
			<div class="container-fluid">

				<!-- Page Heading -->
				<div class="d-sm-flex align-items-center justify-content-between mb-2">
					<h1 class="h3 mb-0 text-gray-800">Layanan</h1>
				</div>
				<!-- Modal tambah -->
				
				<!-- Modal tambah -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<?php $this->load->view('layanan/create') ?>
				</div>
				<!-- end modal tambah -->
				<div class="card shadow mb-4">
					<div class="card-header py-3 d-flex justify-content-between">
						<h6 class="m-0 font-weight-bold text-primary d-inline-block pt-2">Layanan & Jumlah Pelanggan</h6>
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
						+ Tambah
						</button>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th class="col-sm-1" style="text-align: center">Nomor</th>
										<th>Jenis Layanan</th>
										<th>Jumlah Pelanggan</th>
										<th class="col-sm-1" style="text-align: center;">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$no	= 1;
										foreach ($layanan as $row) {
									?>
									<tr>
										<td class="col-sm-1" style="text-align: center"><?= $no++; ?></td>
										<td><?= $row->jenis ?></td>
										<td><?= $row->jumlah ?></td>
										<td style="text-align: center;">
										<a href="<?php echo base_url('layanan/edit/' .$row->id) ?>" class="btn btn-warning btn-sm">
										Edit
										</a>
										<a href="<?php echo base_url('layanan/delete/' .$row->id) ?>" class="btn btn-danger btn-sm">Hapus</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->

		</div>
		<!-- End of Main Content -->

		<!-- Footer -->
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
				<div class="copyright text-center my-auto">
					<span>Copyright &copy; Kelompok 7 INF B</span>
				</div>
			</div>
		</footer>
		<!-- End of Footer -->

	</div>
	<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->



