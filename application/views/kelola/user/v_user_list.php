<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

    <div class="row" id="form_pembelian">
      <div class="col-lg-12">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Kelola User</h3>

            <div class="box-tools pull-right">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("kelola/user/form/base","#modal")','Add New kelola user','btn btn-success');
              } else {
                # code...
              }
              ?>
            </div>
          </div>
          <div class="box-body">
            <table width="100%" id="tableku" class="table table-striped">
              <thead>
                <th>No</th>
                <th>No Induk</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Foto</th>
                <th>Email</th>
                <th>No Telp</th>
                <th>Level</th>
                <th>Status</th>
                <th>Act</th>
              </thead>
              <tbody>
              <?php 
          $i = 1;
          foreach($user->result() as $row): ?>
          <tr>
            <td align="center"><?=$i++?></td>
            <td align="center"><?=$row->NoInduk?></td>
            <td align="center"><?=$row->Username?></td>
            <td align="center"><?=$row->Nama?></td>
            <td align="center"><?=$row->JenisKelamin?></td>
            <td align="center"><?=$row->Foto?></td>
            <td align="center"><?=$row->Email?></td>
            <td align="center"><?=$row->NoTelp?></td>
            <td align="center"><?=$row->Level?></td>
            <td align="center"><?=$row->Status?></td>
            <td align="center">
            <?php
              $sesi = from_session('level');
              if ($sesi == '1' || $sesi == '2' || $sesi == '3' || $sesi == '6') {
                echo button('load_silent("kelola/user/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-search','data-toggle="tooltip" title="view"');
                echo button('load_silent("kelola/user/form/sub/'.$row->id.'","#modal")','','btn btn-info fa fa-edit','data-toggle="tooltip" title="Edit"');
 
              } else {
                # code...
              }
              ?>
              <a href="<?= site_url('kelola/user/delete/'.$row->id) ?>" class="btn btn-danger" onclick="return confirm('Anda yakin ingin menghapus user ?')"><i class="fa fa-trash"></i></a>

            </td>
          </tr>

        <?php endforeach;?>
                </tbody>
            </table>
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