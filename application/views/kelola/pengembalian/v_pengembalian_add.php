<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Pengembalian</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kode_pengembalian','class'=>'form-control'));?>
            <?php echo form_error('kode_pengembalian');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Produk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kode_produk','class'=>'form-control'));?>
            <?php echo form_error('kode_produk');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Supplier</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kode_supplier','class'=>'form-control'));?>
            <?php echo form_error('kode_supplier');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Purchase</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tanggal_purchase','type'=>'date','class'=>'form-control'));?>
            <?php echo form_error('tanggal_purchase');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tanggal Pengembalian</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tanggal_pengembalian','type'=>'date','class'=>'form-control'));?>
            <?php echo form_error('tanggal_pengembalian');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah Barang</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah_barang','class'=>'form-control'));?>
            <?php echo form_error('jumlah_barang');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Keterangan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'keterangan','class'=>'form-control'));?>
            <?php echo form_error('keterangan');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"kelola/pengembalian/show_addForm/","#divsubcontent")','Save','btn btn-success')." ";
            ?>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $('.tutup').click(function(e) {  
        $('#myModal').modal('hide');
    });
});
</script>