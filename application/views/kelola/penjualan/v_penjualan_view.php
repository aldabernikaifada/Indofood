<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php require_once ('application/views/dasbord.php') ?> 
    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Penjualan</h3>

            <div class="box-tools pull-right">
            
            </div>
          </div>
          <div class="box-body">
            <table width="100%" id="tableku" class="table table-striped">
              <thead>
                <th>No</th>
                <th>Kode Penjualan</th>
                <th>Kode Customer</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Tanggal Jual</th>
                <th>Jumlah</th>
                <th>Harga Satuan</th>
                <th>Total</th>
                <th></th>
              </thead>
              <tbody>
              <?php 
          $i = 1;
          foreach($penjualan->result() as $row): ?>
          <tr>
          <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->kode_penjualan?></td>
            <td align="center"><?=$row->kode_customer?></td>
            <td align="center"><?=$row->kode_produk?></td>
            <td align="center"><?=$row->nama_produk?></td>
            <td align="center"><?=$row->tanggal_jual?></td>
            <td align="center"><?=$row->jumlah?></td>
            <td align="center"><?=$row->harga?></td>
            <td align="center"><?=$row->total?></td>
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
           