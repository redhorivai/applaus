<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url() ?>assets/img/noavatar.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('ses_nama'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i>
          <span>Dashboard</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>admin/dashboard"><i class="fa fa-home"></i>Home</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Data Master</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?php echo base_url('admin/dataunit') ?>"><i class="fa fa-circle-o"></i>Data Unit Kerja</a></li>
          <li><a href="<?php echo base_url('admin/dataauditor') ?>"><i class="fa fa-circle-o"></i>Data Auditor</a></li>
          <li><a href="<?php echo base_url('admin/dataiso') ?>"><i class="fa fa-circle-o"></i>Data Standar</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Dokumen Audit</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href=""><i class="fa fa-circle-o"></i>Program Audit SMSB</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i>AuditPlan SMSB</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i>Evaluasi Audit</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i>Profil Auditor</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i>Upload Dokumen Pelaksanaan</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Daftar Rencana Pemeriksaan</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href=""><i class="fa fa-circle-o"></i>ISO 9001:2015</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i>ISO 14001:2015</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i>SMK 3</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i>ISO 17025:2017</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i>ISO 37001:2016</a></li>
          <li><a href=""><i class="fa fa-circle-o"></i>ISO 50001:2018</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i>
          <span>Pertemuan Audit</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Auditor</a></li>
          <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Auditee</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Lembar Ketidaksesuaian</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="<?= base_url() ?>admin/lksauditor"><i class="fa fa-circle-o"></i> Auditor</a></li>
          <li><a href="<?= base_url() ?>admin/lksauditee"><i class="fa fa-circle-o"></i> Auditee</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-files-o"></i> <span>Rekapitulasi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Rekapitulasi Audit</a></li>
          <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Rekapitulasi Verifikasi</a></li>
        </ul>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-lock"></i> <span>Ganti Password</span>
          </a>
        </li>
        <li class="">
          <a href="<?= base_url('login/proses'); ?>">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>