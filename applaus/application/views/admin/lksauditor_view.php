<?php $this->load->view('admin/_partials/header.php') ?>

<body>
    <?php $this->load->view('admin/_partials/sidebar.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                LKS Auditor
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">LKS Auditor</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>  Membuat LKS</button><br><br>
            <table id="tblksauditor" class="table table-striped table-bordered" style="width:100%">
                
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NO LKS</th>
                        <th>DIVISI</th>
                        <th>KLAUSUL</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                $no = 1;
                foreach ($datalks as $lks) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $lks->lks ?></td>
                    <td><?php echo $lks->divisi ?></td>
                    <td><?php echo $lks->klausul ?></td>
                    <td ><a onclick="return confirm('Anda Yakin Ingin Hapus?')" href="<?php echo base_url('admin/lksauditor/hapus_data/'.$lks->id)?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                    <a href="<?php echo base_url('admin/lksauditor/edit_data/'.$lks->id)?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a> </td>
                </tr>

            <?php endforeach; ?>
                </tbody>
            </table>


        </section>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Membuat LKS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype='multipart/form-data' action="<?php echo base_url().'admin/lksauditor/simpanlks' ?>">
            <div class="form-group">
                <label>Unit Kerja Auditee</label>
                <select class="form-control" name="id1" id="id1" required>
                <option value="">No Selected</option>
                <?php foreach($datauk as $row):?>
                        <option value="<?php echo $row->id_unitkerja;?>"><?php echo $row->divisi;?> - <?php echo $row->kodeunitpenerbit;?> </option>
                        <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label>No LKS</label>
                <input type="text" readonly="" name="lks" id="lks" class="form-control">
            </div>
            <div class="form-group">
                <label>Tanggal</label>
                <input type="date" name="tanggal" class="form-control">
            </div>
            <div class="form-group">
                <label>Divisi</label>
                <input type="text" readonly="" name="divisi" class="form-control">
            </div>
            <div class="form-group">
                <label>Ketua Tim Auditor</label>
                <select class="form-control" name="ketua" id="ketua" required>
                <option value="">No Selected</option>
                <?php foreach($dataau as $row):?>
                        <option value="<?php echo $row->id_auditor;?>"><?php echo $row->nama_auditor;?> - <?php echo $row->status;?> </option>
                        <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label>Uraian Ketidaksesuaian</label>
                <input type="text" name="uraian" class="form-control">
            </div>
            
            <div class="form-group">
                <label>lokasi</label>
                <select class="form-control" name="lokasi" id="lokasi" required>
                <option value="">No Selected</option>
                        <option value="Palembang">Palembang</option>
                        <option value="Baturaja">Baturaja</option>
                        <option value="Lampung">Lampung</option>
                </select>
            </div>
            <div class="form-group">
                <label>Standar Sistem</label>
                <select class="form-control" name="iso" id="iso" required>
                <option value="">No Selected</option>
                <?php foreach($dataiso as $row):?>
                        <option value="<?php echo $row->id_standar;?>"><?php echo $row->judulstandar;?> </option>
                        <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label>Klausul</label>
                <input type="text" name="klausul" class="form-control">
            </div>
            <div class="form-group">
                                    <label >Kategori</label>
                                    <div class="form-check">
                                            <input class="form-check-input" type="radio" name="kategori" value="Mayor" id="exampleRadios1">
                                            <label class="form-check-label" for="exampleRadios1">Mayor</label><br>
                                            <input class="form-check-input" type="radio" name="kategori" value="Minor" id="exampleRadios2">
                                            <label class="form-check-label" for="exampleRadios2">Minor</label><br>
                                            <input class="form-check-input" type="radio" name="kategori" value="Observasi" id="exampleRadios2">
                                            <label class="form-check-label" for="exampleRadios2">Observasi</label><br>
                                    </div>
                                </div>
                    <div class="form-group">
                                    <label >File</label>
                                    <input type="file" name="file" class="form-control">
                                </div>
            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
            
        </form>
      </div>
    </div>
  </div>
</div>
        <!-- /.content -->
    </div>
    
    <!-- /.content-wrapper -->
</body>
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
                        $.each(data,function(id1, divisi,lks){
                            $('[name="divisi"]').val(data.divisi);
                            $('[name="lks"]').val(data.kodeunitpenerbit);
                        });
                        
                    }
                });
                return false;
           });

        });
    </script>
<?php $this->load->view('admin/_partials/footer.php') ?>

</html>