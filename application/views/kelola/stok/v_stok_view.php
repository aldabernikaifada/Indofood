<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php require_once ('application/views/dasbord.php') ?> 
    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Stok</h3>

            <div class="box-tools pull-right">
           
            </div>
          </div>
          <div class="box-body">
            <table width="100%" id="tableku" class="table table-striped">
              <thead>
                <th>No</th>
                <th>Kode Stok</th>
                <th>Kode Produk</th>
                <th>Jenis Produk</th>
                <th>Purchase</th>
                <th>Produk Terjual</th>
                <th>Jumlah Stok</th>
                <th>Harga Satuan</th>
                <th></th>
              </thead>
              <tbody>
              <?php 
          $i = 1;
          foreach($stok->result() as $row): ?>
          <tr>
          <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->kode_stok?></td>
            <td align="center"><?=$row->kode_produk?></td>
            <td align="center"><?=$row->jenis_produk?></td>
            <td align="center"><?=$row->purchase?></td>
            <td align="center"><?=$row->produk_terjual?></td>
            <td align="center"><?=$row->jumlah_stok?></td>
            <td align="center"><?=$row->harga_satuan?></td>
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
           