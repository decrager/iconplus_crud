<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
		<div class="sidebar-brand-icon">
			<img src="<?php echo base_url('asset') ?>/pictures/iconplus.png" class="img-fluid" width="38%">
		</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item <?php if($this->uri->segment(1)=="dashboard"){echo "active";}?>">
		<a class="nav-link" href="<?php echo base_url('dashboard') ?>">
			<i class="fas fa-fw fa-table"></i>
			<span>Dashboard</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider">

	<!-- Heading -->
	<div class="sidebar-heading">
		Program
	</div>

	<li class="nav-item <?php if($this->uri->segment(1)=="layanan"){echo "active";}?>">
		<a class="nav-link" href="<?php echo base_url('layanan') ?>">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Layanan</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#"
			aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>KPI Korporat</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#"
			aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Program Strategis</span>
		</a>
	</li>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#"
			aria-expanded="true" aria-controls="collapseTwo">
			<i class="fas fa-fw fa-file-invoice"></i>
			<span>Program Kerja Direktorat</span>
		</a>
	</li>

	<hr class="sidebar-divider">

	<div class="sidebar-heading">
		Keuangan
	</div>

	<li class="nav-item <?php if($this->uri->segment(1)=="keuangan"){echo "active";}?>">
		<a class="nav-link" href="<?php echo base_url('keuangan') ?>">
			<i class="fas fa-money-bill-wave fa-chart-area"></i>
			<span>Laporan Keuangan</span></a>
	</li>

	<li class="nav-item <?php if($this->uri->segment(1)=="aset"){echo "active";}?>">
		<a class="nav-link" href="<?php echo base_url('aset') ?>">
			<i class="fas fa-money-bill-wave fa-chart-area"></i>
			<span>Aset</span></a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="#">
			<i class="fas fa-money-bill-wave fa-chart-area"></i>
			<span>Laba Rugi</span></a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="#">
			<i class="fas fa-money-bill-wave fa-chart-area"></i>
			<span>Arus Kas</span></a>
	</li>

	<li class="nav-item">
		<a class="nav-link" href="#">
			<i class="fas fa-money-bill-wave fa-chart-area"></i>
			<span>Revenue SBU</span></a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->