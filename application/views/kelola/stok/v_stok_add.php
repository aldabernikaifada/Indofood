<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Stok</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kode_stok','class'=>'form-control'));?>
            <?php echo form_error('kode_stok');?>
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
            <label class="col-sm-4 control-label">Jenis Produk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jenis_produk','class'=>'form-control'));?>
            <?php echo form_error('jenis_produk');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Purchase</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'purchase','class'=>'form-control'));?>
            <?php echo form_error('purchase');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Produk Terjual</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'produk_terjual','class'=>'form-control'));?>
            <?php echo form_error('produk_terjual');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Jumlah Stok</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'jumlah_stok','class'=>'form-control'));?>
            <?php echo form_error('jumlah_stok');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Harga Satuan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'harga_satuan','class'=>'form-control'));?>
            <?php echo form_error('harga_satuan');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"kelola/stok/show_addForm/","#divsubcontent")','Save','btn btn-success')." ";
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