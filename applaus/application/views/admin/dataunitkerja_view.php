<?php $this->load->view('admin/_partials/header.php') ?>

<body>
    <?php $this->load->view('admin/_partials/sidebar.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Unit Kerja
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Unit Kerja</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Unit Kerja</button>
            <table id="dataauditor" class="table table-striped table-bordered" style="width:100%">
                <tr>
                        <th>No</th>
                        <th>Direktorat</th>
                        <th>Divisi</th>
                        <th>Departemen</th>
                        <th>Jabatan</th>
                        <th>Kode Unit Penerbit</th>
                        <th>AKSI</th>
                </tr>
                <?php

                $no = 1;
                foreach ($datauk as $auditor) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $auditor->direktorat ?></td>
                    <td><?php echo $auditor->divisi ?></td>
                    <td><?php echo $auditor->departemen ?></td>
                    <td><?php echo $auditor->jabatan ?></td>
                    <td><?php echo $auditor->kodeunitpenerbit ?></td>
                    <td onclick="javascript: return confirm('Anda yakin Hapus?')"><?php echo anchor('admin/dataunit/hapus_data/' .$auditor->id_unitkerja, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('admin/Dataunit/edit_data/' .$auditor->id_unitkerja,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                </tr>

            <?php endforeach; ?>
    
            </table>

        </section>
        
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA UNIT KERJA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/Dataunit/tambah_aksi' ?>">
            <div class="form-group">
                <label>Direktorat</label>
                <input type="text" name="direktorat" class="form-control">
            </div>
            <div class="form-group">
                <label>Divisi</label>
                <input type="text" name="divisi" class="form-control">
            </div>
            <div class="form-group">
                <label>Departemen</label>
                <input type="text" name="departemen" class="form-control">
            </div>
                        <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="jabatan" class="form-control">
            </div>
            <div>
                            <label>Kode Unit Penerbit</label>
                <input type="text" name="kode_unit_penerbit" class="form-control">
            </div>
            <br>
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

<?php $this->load->view('admin/_partials/footer.php') ?>

</html>