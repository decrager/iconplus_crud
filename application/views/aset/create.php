<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Tambah Aset</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<form action="<?php echo base_url('aset/create') ?>" method="post">
			<div class="modal-body">
				<div class="form-group">
					<label for="tahun">Tahun</label>
					<input type="text" id="datepicker" class="form-control" name="tahun">
				</div>
				<div class="form-group">
					<label for="aset">Aset</label>
					<input type="text" class="form-control" name="aset">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Save changes</button>
			</div>
		</form>
	</div>
</div>