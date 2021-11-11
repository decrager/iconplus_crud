<!-- Page Wrapper -->
<div id="wrapper">

	<?php $this->load->view('_layouts/sidebar') ?>

	<!-- Content Wrapper -->
	<div id="content-wrapper" class="d-flex flex-column">

		<!-- Main Content -->
		<div id="content">

			<?php $this->load->view('_layouts/top') ?>
			<?php $this->load->view('_layouts/topnav') ?>

			<!-- Begin Page Content -->
			<div class="container-fluid">

				<!-- Page Heading -->
				<div class="d-sm-flex align-items-center justify-content-between mb-4">
					<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
				</div>

				<!-- Content Row -->
				<div class="row">

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
											Total Asset</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">Rp 13.721.580.000,-</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
											Total Pelanggan</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">268.039</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-user-friends fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Earnings (Monthly) Card Example -->
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-info shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Pendapatan
										</div>
										<div class="row no-gutters align-items-center">
											<div class="col-auto">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp 9.781.177.000,-</div>
											</div>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Pending Requests Card Example -->
					<div class="col-xl-3 col-md-6 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Laba
											</div>
										<div class="h5 mb-0 font-weight-bold text-gray-800">Rp 2.031.662.000,-</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Content Row -->

				<div class="row">
					<!-- Area Chart -->
					<div class="col-xl-6 col-lg-7">
						<div class="card shadow mb-4">
							<!-- Card Header - Dropdown -->
							<div
								class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-primary">Jumlah Aset Per Tahun</h6>
								<div class="dropdown no-arrow">
									<div class="d-flex justify-content-center my-2">
										<a href="<?php echo base_url('aset/export') ?>" class="btn btn-success m-2" onclick="alertAset()">Export Excel</a>
										<a href="<?php echo base_url('aset/pdf') ?>" class="btn btn-danger m-2">Export PDF</a>
									</div>
								</div>
							</div>
							<!-- Card Body -->
							<div class="card-body">
								<div class="chart-area">
									<div id="aset"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-7">
						<div class="card shadow mb-4">
							<!-- Card Header - Dropdown -->
							<div
								class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-primary">Pelanggan Layanan</h6>
								<div class="dropdown no-arrow">
									<div class="d-flex justify-content-center my-2">
										<a href="<?php echo base_url('layanan/export') ?>" class="btn btn-success m-2" onclick="alertAset()">Export Excel</a>
										<a href="<?php echo base_url('layanan/pdf') ?>" class="btn btn-danger m-2">Export PDF</a>
									</div>
								</div>
							</div>
							<!-- Card Body -->
							<div class="card-body">
								<div class="chart-area">
									<div id="layanan"></div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-7">
						<div class="card shadow mb-4">
							<!-- Card Header - Dropdown -->
							<div
								class="card-header py-0 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-primary">Keuangan Tahunan</h6>
								<div class="dropdown no-arrow">
									<div class="d-flex justify-content-center my-2">
										<a href="<?php echo base_url('keuangan/export') ?>" class="btn btn-success m-2" onclick="alertAset()">Export Excel</a>
										<a href="<?php echo base_url('keuangan/pdf') ?>" class="btn btn-danger m-2">Export PDF</a>  
									</div>
								</div>
							</div>
							<!-- Card Body -->
							<div class="card-body">
								<div class="chart-area">
									<div id="keuangan"></div>
								</div>
							</div>
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


