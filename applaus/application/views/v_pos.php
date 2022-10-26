
 <!DOCTYPE html>
<html>
<?php $this->load->view('admin/_partials/header.php') ?>
<head>
	<title>Point Of Sale</title>

</head>
<body>
	<div class="container">
		<div class="col-md-12 col-md-offset-1">
		<hr/>
			<form class="form-horizontal">
				<div class="form-group">
                    <label class="control-label col-xs-3" >Kode Barang</label>
                    <div class="col-xs-9">
                        <input name="id1" id="id1" class="form-control" type="text" placeholder="Kode Barang..." style="width:335px;">
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-xs-3" >Nama Barang</label>
                    <div class="col-xs-9">
                        <input name="divisi1" class="form-control" type="text" placeholder="Nama Barang..." style="width:335px;" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-xs-3" >Harga</label>
                    <div class="col-xs-9">
                        <input name="harga" class="form-control" type="text" placeholder="Harga..." style="width:335px;" readonly>
                    </div>
                </div>
				<div class="form-group">
                    <label class="control-label col-xs-3" >Satuan</label>
                    <div class="col-xs-9">
                        <input name="satuan" class="form-control" type="text" placeholder="Satuan..." style="width:335px;" readonly>
                    </div>
                </div>
			</form>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			 $('#id1').on('input',function(){
                
                var id1=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('index.php/pos/get_barang')?>",
                    dataType : "JSON",
                    data : {id1: id1},
                    cache:false,
                    success: function(data){
                        $.each(data,function(id1, divisi){
                            $('[name="divisi1"]').val(data.kode_unit_penerbit);
                            
                        });
                        
                    }
                });
                return false;
           });

		});
	</script>

</body>
</html>