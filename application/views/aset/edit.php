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
					<h1 class="h3 mb-0 text-gray-800">Ubah Data Aset</h1>
				</div>

				<div class="card">
					<div class="card-body">
						<?php foreach($aset as $row) { ?>
							<form action="<?php echo base_url('aset/update') ?>" method="post">
								<div class="modal-body">
									<div class="form-group">
										<label for="Jenis">Tahun</label>
										<input type="hidden" name="id" value="<?php echo $row->id ?>">
										<input type="text" id="datepicker" class="form-control" name="tahun" value="<?php echo $row->tahun ?>">
									</div>
									<div class="form-group">
										<label for="aset">Aset</label>
										<input type="text" class="form-control" name="aset" value="<?php echo $row->aset ?>">
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



