<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Master Peminjaman</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("master/peminjaman/form/base","#modal")','Add New Peminjaman','btn btn-success');
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
                <th>id</th>
                <th>Nama Kategori</th>
                <th>Nama Alat</th>
                <th>Keterangan</th>
                <th>Act</th>
              </thead>
              <tbody>
                    <tr style="text-align: center">
                        <td scope="row">2</td>
                        <td>301</td>
                        <td>ABC</td>
                        <td>GRD</td>
                        <td>Ready</td>
                        <td>
                            <button type="button" class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
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