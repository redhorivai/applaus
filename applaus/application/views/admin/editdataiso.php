<div class="content-wrapper">
	<section class="content">
		
		<?php foreach($dataiso as $auditor) { ?>

		<form action="<?=base_url()?>admin/dataiso/update/<?=$auditor->id_standar?>" method="post">

			<div class="form-group">
				<label>Standar</label>
				<input type="hidden" name="id_standar" class="form-control" value="<?php echo $auditor->id_standar ?>">
				<input type="text" name="judulstandar" class="form-control" value="<?php echo $auditor->judulstandar?>">
			</div>

			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Simpan</button>
			
		</form>

	<?php  } ?>
	</section>
</div>