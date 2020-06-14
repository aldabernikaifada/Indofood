<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Barang Keluar</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'kode_barang_keluar','value'=>$row->kode_barang_keluar,'class'=>'form-control'));?>
            <?php echo form_error('kode_barang_keluar');?>
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
            <span id="check_data"></span>
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
            <label class="col-sm-4 control-label">Jumlah</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah','value'=>$row->jumlah,'class'=>'form-control'));?>
            <?php echo form_error('jumlah');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Keluar</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tanggal_keluar','type'=>'date','class'=>'form-control'));?>
            <?php echo form_error('tanggal_keluar');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"kelola/barang_keluar/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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