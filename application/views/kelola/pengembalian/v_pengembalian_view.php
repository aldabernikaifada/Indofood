<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php require_once ('application/views/dasbord.php') ?>  
    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Pengembalian</h3>

            <div class="box-tools pull-right">
           
            </div>
          </div>
          <div class="box-body">
            <table width="100%" id="tableku" class="table table-striped">
              <thead>
                <th>No</th>
                <th>Kode Pengembalian</th>
                <th>Kode Produk</th>
                <th>Kode Supplier</th>
                <th>Tanggal Purchase</th>
                <th>Tanggal Pengembalian</th>
                <th>Jumlah Barang</th>
                <th>Keterangan</th>
                <th></th>
              </thead>
              <tbody>
              <?php 
          $i = 1;
          foreach($pengembalian->result() as $row): ?>
          <tr>
          <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->kode_pengembalian?></td>
            <td align="center"><?=$row->kode_produk?></td>
            <td align="center"><?=$row->kode_supplier?></td>
            <td align="center"><?=$row->tanggal_purchase?></td>
            <td align="center"><?=$row->tanggal_pengembalian?></td>
            <td align="center"><?=$row->jumlah_barang?></td>
            <td align="center"><?=$row->keterangan?></td>
            <td align="center">
           

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
           