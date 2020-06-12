<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Purchase</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'kode_purchase','value'=>$row->kode_purchase,'class'=>'form-control'));?>
            <?php echo form_error('kode_purchase');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Barang</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_barang','value'=>$row->nama_barang,'class'=>'form-control'));?>
            <?php echo form_error('nama_barang');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah Produk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah_produk','value'=>$row->jumlah_produk,'class'=>'form-control'));?>
            <?php echo form_error('jumlah_produk');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Purchase</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tanggal_purchase','value'=>$row->tanggal_purchase,'class'=>'form-control'));?>
            <?php echo form_error('tanggal_purchase');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Satuan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'satuan','value'=>$row->satuan,'class'=>'form-control'));?>
            <?php echo form_error('satuan');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga Satuan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga_satuan','value'=>$row->harga_satuan,'class'=>'form-control'));?>
            <?php echo form_error('harga_satuan');?>
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
            echo button('send_form(document.faddmenugrup,"kelola/purchase/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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