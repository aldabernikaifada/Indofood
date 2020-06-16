<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php
    $row = fetch_single_row($edit);
?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">Kode Pegawai</label>
            <div class="col-sm-8">
            <?php echo form_hidden('id',$row->id); ?>
            <?php echo form_input(array('name'=>'kode_pegawai','value'=>$row->kode_pegawai,'class'=>'form-control'));?>
            <?php echo form_error('kode_pegawai');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Pegawai</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'nama','value'=>$row->nama,'class'=>'form-control'));?>
            <?php echo form_error('nama');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nomor Telepon</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'telepon','value'=>$row->telepon,'class'=>'form-control'));?>
            <?php echo form_error('telepon');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Alamat</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'alamat','value'=>$row->alamat,'class'=>'form-control'));?>
            <?php echo form_error('alamat');?>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Keterangan</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'keterangan','value'=>$row->keterangan,'class'=>'form-control'));?>
            <?php echo form_error('keterangan');?>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"kelola/pegawai/show_editForm/","#divsubcontent")','Simpan','btn btn-success')." ";
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