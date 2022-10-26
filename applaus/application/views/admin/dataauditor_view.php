<?php $this->load->view('admin/_partials/header.php') ?>

<body>
    <?php $this->load->view('admin/_partials/sidebar.php') ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Data Auditor
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Data Auditor</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i>Tambah Data Auditor</button>
            <table id="dataauditor" class="table table-striped table-bordered" style="width:100%">
                <tr>
                        <th>No</th>
                        <th>Nama Auditor</th>
                        <th>Unit Kerja</th>
                        <th>Jabatan</th>
                        <th>AKSI</th>
                </tr>
                <?php

                $no = 1;
                foreach ($dataauditor as $auditor) : ?>

                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $auditor->nama_auditor ?></td>
                    <td><?php echo $auditor->unitkerja ?></td>
                    <td><?php echo $auditor->status ?></td>
                    <td onclick="javascript: return confirm('Anda yakin Hapus?')"><?php echo anchor('admin/Dataauditor/hapus_data/' .$auditor->id_auditor, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td><?php echo anchor('admin/Dataauditor/edit_data/' .$auditor->id_auditor,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                </tr>

            <?php endforeach; ?>
    
            </table>

        </section>
        
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA AUDITOR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/Dataauditor/tambah_aksi' ?>">
            <div class="form-group">
                <label>Nama Auditor</label>
                <input type="text" name="nama_auditor" class="form-control">
            </div>
            <div class="form-group">
                <label>Unit Kerja</label>
                <input type="text" name="unitkerja" class="form-control">
            </div>
            <div class="form-group">
                <label>Jabatan</label>
                <input type="text" name="status" class="form-control">
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

<?php $this->load->view('admin/_partials/footer.php') ?>

</html>