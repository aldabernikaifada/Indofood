<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Supplier</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("kelola/supplier/form/base","#modal")','Add New Supplier','btn btn-success');
              } else {
                # code...
              }
              ?>
            </div>
          </div>
          <div class="box-body">
            <table width="100%" id="tableku" class="table table-striped">
              <thead>
                <th>No</th>
                <th>Kode Supplier</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>Nomor Telepon</th>
                <th>Keterangan</th>
                <th>Act</th>
              </thead>
              <tbody>
              <?php 
          $i = 1;
          foreach($supplier->result() as $row): ?>
          <tr>
          <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->kode_supplier?></td>
            <td align="center"><?=$row->nama_supplier?></td>
            <td align="center"><?=$row->alamat?></td>
            <td align="center"><?=$row->telepon?></td>
            <td align="center"><?=$row->keterangan?></td>
            <td align="center">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("kelola/supplier/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
 
              } else {
                # code...
              }
              ?>
              <a href="<?= site_url('kelola/supplier/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus Data Supplier ?')"><i class="fa fa-trash"></i></a>

            </td>
          </tr>

        <?php endforeach;?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<script type="text/javascript">
  $(document).ready(function() {
    var table = $('#tableku').DataTable( {
      "ordering": false,
    } );
  });
</script>
           