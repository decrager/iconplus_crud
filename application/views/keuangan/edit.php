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
					<h1 class="h3 mb-0 text-gray-800">Ubah Data Keuangan</h1>
				</div>

				<div class="card">
					<div class="card-body">
						<?php foreach($keuangan as $row) { ?>
							<form action="<?php echo base_url('keuangan/update') ?>" method="post">
								<div class="modal-body">
									<div class="form-group">
										<label for="tahun">Tahun</label>
										<input type="hidden" name="id" value="<?php echo $row->id ?>">
										<input type="text" id="datepicker" class="form-control" name="tahun" value="<?php echo $row->tahun ?>">
									</div>
									<div class="form-group">
										<label for="pendapatan">Pendapatan</label>
										<input type="text" class="form-control" name="pendapatan" value="<?php echo $row->pendapatan ?>">
									</div>
									<div class="form-group">
										<label for="pendapatan">Pengeluaran</label>
										<input type="text" class="form-control" name="pengeluaran" value="<?php echo $row->pengeluaran ?>">
									</div>
									<div class="form-group">
										<label for="pendapatan">Laba</label>
										<input type="text" class="form-control" name="laba" value="<?php echo $row->laba ?>">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="submit" class="btn btn-primary">Save changes</button>
								</div>
							</form>
						<?php } ?>
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



