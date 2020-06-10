
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="box-body big">
    <?php echo form_open('',array('name'=>'faddmenugrup','class'=>'form-horizontal','role'=>'form'));?>
        
    
        <div class="form-group">
            <label class="col-sm-4 control-label">No Induk</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'NoInduk','class'=>'form-control'));?>
            <?php echo form_error('NoInduk');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Username</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'Username','class'=>'form-control'));?>
            <?php echo form_error('Username');?>
            <span id="check_data"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 control-label">Nama</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'Nama','class'=>'form-control'));?>
            <?php echo form_error('Nama');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Jenis Kelamin</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'JenisKelamin','class'=>'form-control'));?>
            <?php echo form_error('JenisKelamin');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
                <label class="col-sm-4 control-label" for="Foto">Foto</label>
                <div class="col-sm-8">
                <?php echo form_upload(array('name'=>'Foto','id'=>'Foto','class'=>'form-control'));?>
                </div>
            </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'Email','class'=>'form-control'));?>
            <?php echo form_error('Email');?>
            <span id="check_data"></span>
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-4 control-label">No Telp</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'NoTelp','class'=>'form-control'));?>
            <?php echo form_error('NoTelp');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Level</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'Level','class'=>'form-control'));?>
            <?php echo form_error('Level');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Status</label>
            <div class="col-sm-8">
            <?php echo form_input(array('name'=>'Status','class'=>'form-control'));?>
            <?php echo form_error('Status');?>
            <span id="check_data"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="col-sm-4 control-label">Save</label>
            <div class="col-sm-8 tutup">
            <?php
             echo button('send_form(document.faddmenugrup,"kelola/user/show_addForm/","#divsubcontent")','Save','btn btn-success')." ";
             ?>
             </div>
         </div>
     </form>
       </div>
     </div>
   </div>
 </div>
<script type="text/javascript">
$(document).ready(function() {
 $("#Foto").fileinput({
 'showUpload'            :true,
   initialPreview: '<img src="<?php echo base_url().$row->Foto; ?>" class="file-preview-image">'
 });
 $('#tombol').removeAttr('disabled',false);
 $(".select2").select2();
 $('.tutup').click(function(e) {  
     $('#myModal').modal('hide');
 });
});

function save()
{
    $('#tombol').attr('disabled','disabled');
    var path = $("#Foto").val().replace('C:\\fakepath\\', '');
    var ida = $('#id').val();
    if (path == '') {
        $.ajax({
        type: "POST",
        url: "<?= site_url('kelola/user/edit/"+ida+"')?>",
        dataType:'json',
        data: {
            id                   : $("#id").val(),
            NoInduk              : $("#NoInduk").val(),
            Username             : $("#Username").val(),
            Nama                 : $("#Nama").val(),
            JenisKelamin         : $("#JenisKelamin").val(),
            Email                : $("#Email").val(),
            NoTelp               : $("#NoTelp").val(),
            Level                : $("#Level").val(),
            Status               : $("#Status").val(),
          
        },
        success   : function(data)
        {
          $.growl.notice({ title: 'Sukses', message: data['msg']});      
          load_silent("kelola/user/","#content");
        }
      });

    } else{
        $.ajaxFileUpload
          ({
            url: "<?= site_url('kelola/user/edit_file/"+ida+"')?>",
            secureuri:false,
            fileElementId:'Foto',
            dataType: 'json',
            data: {
                id               : $("#id").val(),
            NoInduk              : $("#NoInduk").val(),
            Username             : $("#Username").val(),
            Nama                 : $("#Nama").val(),
            JenisKelamin         : $("#JenisKelamin").val(),
            Email                : $("#Email").val(),
            NoTelp               : $("#NoTelp").val(),
            Level                : $("#Level").val(),
            Status               : $("#Status").val(),
              },
            success: function (data)
            {
              $.growl.notice({ title: 'Berhasil', message: data['msg'] });
              load_silent("kelola/user/","#content");
            },
            error: function (data, e)
            {
              $("#info").html(e);
            }
          })

    };
  
  return false;
}
</script>