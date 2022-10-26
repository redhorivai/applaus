<div class="content-wrapper">
	<section class="content">
		
		<?php foreach($dataauditor as $auditor) { ?>

		<form action="<?=base_url()?>admin/dataauditor/update/<?=$auditor->id_auditor?>" method="post">

			<div class="form-group">
				<label>Nama Auditor</label>
				<input type="hidden" name="id_auditor" class="form-control" value="<?php echo $auditor->id_auditor ?>">
				<input type="text" name="nama_auditor" class="form-control" value="<?php echo $auditor->nama_auditor?>">
			</div>

			<div class="form-group">
				<label>UNIT KERJA</label>
				<input type="text" name="unitkerja" class="form-control" value="<?php echo $auditor->unitkerja ?>">
			</div>

			<div class="form-group">
				<label>JABATAN</label>
				<input type="text" name="status" class="form-control" value="<?php echo $auditor->status ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
			
		</form>

	<?php  } ?>
	</section>
</div>