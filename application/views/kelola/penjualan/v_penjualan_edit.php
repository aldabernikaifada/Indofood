<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Penjualan</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'kode_penjualan','value'=>$row->kode_penjualan,'class'=>'form-control'));?>
            <?php echo form_error('kode_penjualan');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Customer</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kode_customer','value'=>$row->kode_customer,'class'=>'form-control'));?>
            <?php echo form_error('kode_customer');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Produk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kode_produk','value'=>$row->kode_produk,'class'=>'form-control'));?>
            <?php echo form_error('kode_produk');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Produk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_produk','value'=>$row->nama_produk,'class'=>'form-control'));?>
            <?php echo form_error('nama_produk');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Jual</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tanggal_jual','type'=>'date','class'=>'form-control'));?>
            <?php echo form_error('tanggal_jual');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah','value'=>$row->jumlah,'class'=>'form-control'));?>
            <?php echo form_error('jumlah');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga Satuan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga','value'=>$row->harga,'class'=>'form-control'));?>
            <?php echo form_error('harga');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Total</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'total','value'=>$row->total,'class'=>'form-control'));?>
            <?php echo form_error('total');?>
            </div>
        </div>
      
        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"kelola/penjualan/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
            ?>
            </div>
        </div>
    </form>
</div>


<script type="text/javascript">
$(document).ready(function() {
    $(".select2").select2();
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});
</script>