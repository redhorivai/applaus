<div class="content-wrapper">
	<section class="content">
		
		<?php foreach($dataunitkerja as $auditor) { ?>

		<form action="<?=base_url()?>admin/dataunit/update/<?=$auditor->id_unitkerja?>" method="post">

			<div class="form-group">
				<label>Direktorat</label>
				<input type="hidden" name="id_unitkerja" class="form-control" value="<?php echo $auditor->id_unitkerja ?>">
				<input type="text" name="direktorat" class="form-control" value="<?php echo $auditor->direktorat?>">
			</div>

			<div class="form-group">
				<label>Divisi</label>
				<input type="text" name="divisi" class="form-control" value="<?php echo $auditor->divisi ?>">
			</div>
			<div class="form-group">
				<label>Departemen</label>
				<input type="text" name="departemen" class="form-control" value="<?php echo $auditor->departemen ?>">
			</div>

			<div class="form-group">
				<label>Jabatan</label>
				<input type="text" name="jabatan" class="form-control" value="<?php echo $auditor->jabatan ?>">
			</div>
			<div class="form-group">
				<label>Kode Unit Penerbit</label>
				<input type="text" name="kodeunitkerja" class="form-control" value="<?php echo $auditor->kodeunitpenerbit ?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
			
		</form>

	<?php  } ?>
	</section>
</div>