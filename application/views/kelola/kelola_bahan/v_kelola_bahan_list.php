<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Pengelolaan Nama Bahan Laboratorium EDLABS</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("kelola/kelola_bahan/form/base","#modal")','Tambah kelola bahan','btn btn-success');
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
                <th>Nama Bahan</th>
                <th>Nama Satuan</th>
                <th>Kategori Bahan</th>
                <th>Merk</th>
                <th>Seri</th>
                <th>Pendanaan</th>
                <th>Stock</th>
                <th>Lokasi</th>
                <th>Kondisi</th>
                <th>Tipe</th>
                <th>Status</th>
                <th>Act</th>
              </thead>
              <tbody>
          <?php 
          $i = 1;
          foreach($kelola_bahan->result() as $row): ?>
          <tr>
            <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->nama_bahan?></td>
            <td align="center"><?=$row->nama_satuan?></td>
            <td align="center"><?=$row->kategori?></td>
            <td align="center"><?=$row->merk?></td>
            <td align="center"><?=$row->seri?></td>
            <td align="center"><?=$row->pendanaan?></td>
            <td align="center"><?=$row->stok?></td>
            <td align="center"><?=$row->lokasi?></td>
            <td align="center"><?=$row->kondisi?></td>
            <td align="center"><?=$row->tipe?></td>
            <td align="center"><?=$row->status?></td>
            <td align="center">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("kelola/kelola_bahan/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fw fa-edit','data-toggle="tooltip" title="Edit"');
              } else {
                # code...
              }
              ?>
              
              <a href="<?= site_url('kelola/kelola_bahan/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Anda Yakin Ingin Menghapus Nama Bahan Ini ?')"><i class="fa fa-fw fa-trash"></i></a>
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