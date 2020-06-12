<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Produk</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'kode_produk','value'=>$row->kode_produk,'class'=>'form-control'));?>
            <?php echo form_error('kode_produk');?>
            <span id="check_data"></span>
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
            <label class="col-sm-4 control-label">Jenis Produk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jenis_produk','value'=>$row->jenis_produk,'class'=>'form-control'));?>
            <?php echo form_error('jenis_produk');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Supplier</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama_supplier','value'=>$row->nama_supplier,'class'=>'form-control'));?>
            <?php echo form_error('nama_supplier');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga Jual</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga_jual','value'=>$row->harga_jual,'class'=>'form-control'));?>
            <?php echo form_error('harga_jual');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga Supplier</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga_supplier','value'=>$row->harga_supplier,'class'=>'form-control'));?>
            <?php echo form_error('harga_supplier');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Gambar</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'gambar','value'=>$row->gambar,'class'=>'form-control'));?>
            <?php echo form_error('gambar');?>
            </div>
        </div>
      
        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"kelola/produk/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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