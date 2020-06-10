<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
    
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Bahan</label>
            <div class="col-sm-8">
            <div class="form-group">
                <select class="form-control" name="nama_bahan">
                <?php foreach ($master_bahan->result() as $nama_bahan): ?>
                    <option value="<?= $master_bahan->id ?>"><?= $master_bahan->nama_bahan?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <?php echo form_error('nama_bahan');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama Satuan</label>
            <div class="col-sm-8">
            <div class="form-group">
                <select class="form-control" name="nama_satuan">
                <?php foreach ($satuan->result() as $satuan): ?>
                    <option value="<?= $satuan->id ?>"><?= $satuan->Nama ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <?php echo form_error('nama_satuan');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Kategori Bahan</label>
            <div class="col-sm-8">
            <div class="form-group">
                <select class="form-control" name="kategori">
                <?php foreach ($Kategori_Alat_Bahan->result() as $Kategori_Alat_Bahan): ?>
                    <option value="<?= $Kategori_Alat_Bahan->id ?>" ><?= $Kategori_Alat_Bahan->Kategori?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <?php echo form_error('kategori');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Merk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'merk','class'=>'form-control'));?>
            <?php echo form_error('merk');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Seri</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'seri','class'=>'form-control'));?>
            <?php echo form_error('seri');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Pendanaan</label>
            <div class="col-sm-8">
            <div class="form-group">
                <select class="form-control" name="pendanaan">
                <?php foreach ($sumber_pendanaan->result() as $sumber_pendanaan): ?>
                    <option value="<?= $sumber_pendanaan->id ?>"><?= $sumber_pendanaan->sumber_pendanaan ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <?php echo form_error('pendanaan');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Stock</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'stok','class'=>'form-control'));?>
            <?php echo form_error('stok');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Lokasi</label>
            <div class="col-sm-8">
            <div class="form-group">
                <select class="form-control" name="lokasi">
                <?php foreach ($lokasi_penyimpanan->result() as $lokasi_penyimpanan): ?>
                    <option value="<?= $lokasi_penyimpanan->id ?>" ><?= $lokasi_penyimpanan->nama_lokasi_penyimpanan ?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <?php echo form_error('lokasi');?>
            <span id="check_data"></span>
            </div>
        </div>            
        <div class="form-group">
            <label class="col-sm-4 control-label">Kondisi</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'kondisi','class'=>'form-control'));?>
            <?php echo form_error('kondisi');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Tipe</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'tipe','class'=>'form-control'));?>
            <?php echo form_error('tipe');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Status</label>
            <div class="col-sm-8">
            <div class="form-group">
                <select class="form-control" name="status">
                <?php foreach ($master_bahan->result() as $status): ?>
                    <option value="<?= $master_bahan->id ?>"><?= $master_bahan->status?></option>
                <?php endforeach; ?>
                </select>
            </div>
            <?php echo form_error('status');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Simpan</label>
            <div class="col-sm-8 tutup">
            <?php
            echo button('send_form(document.faddmenugrup,"kelola/kelola_bahan/show_addForm/","#divsubcontent")','Save','btn btn-success')." ";
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