<div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <!-- <div class="widget-user-header bg-black" style="background: url('<?php echo base_url();?>assets/img/photo1.png') center center;height:320px;"> -->
             <!--  <h3 class="widget-user-username"><?=from_session('nama')?></h3>
              <h5 class="widget-user-desc"><?=from_session('nama_level')?></h5>
            </div>
            <div class="widget-user-image"> -->          
    <div class="box-footer">
              <div class="row">
                <div class="col-sm-12 border-right">
                  <div class="description-block">
                    <?php
                  $avatar = parse_avatar(from_session('gambar'),from_session('nama'),40,'img-circle');
                ?>
                <?php echo $avatar; ?>
                    <h5 class="description-header">SELAMAT DATANG DI GUBUG MART</h5>
                    <span class="description-text"><?php echo button('load_silent("cms/user/show_editForm_user/'.from_session('id').'","#content")','Update Profil','btn bg-red','data-toggle="tooltip" title="Update Profil"');?> 
						</span>
                  </div>
                  <!-- /.description-block -->
                </div>
                
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
          </div>
<!-- Main content --> 
		<section class="content">
		<!-- Small boxes (Stat box) --> 
		<div class="row">
		<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
		<div class="inner">
		<h3>150</h3>
		<p>Customer</p>
		</div>
		<div class="icon">
		<i class="fa fa-cubes"></i>
		</div>
		<a href="?page" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
		</div>

    <!-- Small boxes (Stat box) --> 
		<div class="row">
		<div class="col-lg-3 col-xs-6">
		<!-- small box --> 
		<div class="small-box bg-purple">
		<div class="inner">
		<h3>20</h3>
		<p>Supplier</p>
		</div>
		<div class="icon">
		<i class="fa fa-cubes"></i>
		</div>
		<a href="application/kelola/supplier" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
		</div>

		<!-- ./col --> 
		<div class="col-lg-3 col-xs-6">
		<!-- small box --> 
		<div class="small-box bg-orange">
		<div class="inner">
		<h3>200</h3>
		<p>Produk</p>
		</div>
		<div class="icon">
		<i class="fa fa-cubes"></i>
		</div>
		<a href="?page" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
		</div>
    </div>

		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		<!-- small box --> 
		<div class="small-box bg-green">
		<div class="inner">
		<h3>65</h3> 
		<p>Purchase</p>
		</div>
		<div class="icon">
    <i class="fa fa-cubes"></i>
		</div>
		<a href="?page" class="small-box-footer">More info <i class ="fa fa-arrow-circle-right"></i></a>
		</div>
		</div>

    	<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		<!-- small box --> 
		<div class="small-box bg-purple">
		<div class="inner">
		<h3>200</h3> 
		<p>Stok</p>
		</div>
		<div class="icon">
    <i class="fa fa-cubes"></i>
		</div>
		<a href="?page" class="small-box-footer">More info <i class ="fa fa-arrow-circle-right"></i></a>
		</div>
		</div>

    	<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
		<!-- small box --> 
		<div class="small-box bg-red">
		<div class="inner">
		<h3>65</h3> 
		<p>Pengembalian</p>
		</div>
		<div class="icon">
    <i class="fa fa-cubes"></i>
		</div>
		<a href="?page" class="small-box-footer">More info <i class ="fa fa-arrow-circle-right"></i></a>
		</div>
		</div>
    </div>
    