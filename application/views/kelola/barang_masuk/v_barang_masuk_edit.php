<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Barang Masuk</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'kode_barangmasuk','value'=>$row->kode_barangmasuk,'class'=>'form-control'));?>
            <?php echo form_error('kode_barangmasuk');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Supplier</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kode_supplier','value'=>$row->kode_supplier,'class'=>'form-control'));?>
            <?php echo form_error('kode_supplier');?>
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
            <label class="col-sm-4 control-label">Satuan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'satuan','value'=>$row->satuan,'class'=>'form-control'));?>
            <?php echo form_error('satuan');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">harga_satuan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga_satuan','value'=>$row->harga_satuan,'class'=>'form-control'));?>
            <?php echo form_error('harga_satuan');?>
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
            <label class="col-sm-4 control-label">Tanggal Masuk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tanggal_masuk','type'=>'date','class'=>'form-control'));?>
            <?php echo form_error('tanggal_masuk');?>
            <span id="check_data"></span>
            </div>
        </div>
      
        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"kelola/barang_masuk/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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