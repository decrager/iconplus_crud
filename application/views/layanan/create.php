<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Tambah Layanan</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form action="<?php echo base_url('layanan/create') ?>" method="post">
			<div class="modal-body">
				<div class="form-group">
					<label for="Jenis">Jenis Layanan</label>
					<input type="text" class="form-control" name="jenis">
				</div>
				<div class="form-group">
					<label for="jumlah">Anggota</label>
					<input type="text" class="form-control" name="jumlah">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
	</div>
</div>
