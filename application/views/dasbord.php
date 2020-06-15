<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<section class="content" style="height: auto !important; min-height: 0px !important;">
		<!-- Small boxes (Stat box) --> 
		<div class="row">
		<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-green">
		<div class="inner">
		<h3><?= $this->fungsi->itung_lab()?></h3>
		<p>Produk</p>
		</div>
		<div class="icon">
		<i class="fa fa-cubes"></i>
		</div>
		<h5 class="small-box-footer"<?php echo button('load_silent("kelola/produk_view","#content")','' ,'  ');?>More info <i class="fa fa-arrow-circle-right"></i></h5>
		</div>
		</div>

        <!-- Small boxes (Stat box) --> 
		<div class="row">
		<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-purple">
		<div class="inner">
		<h3><?= $this->fungsi->itung_lab()?></h3>
		<p>Stok</p>
		</div>
		<div class="icon">
		<i class="fa fa-cubes"></i>
		</div>
		<h5 class="small-box-footer"<?php echo button('load_silent("kelola/stok_view","#content")','' ,'  ');?>More info <i class="fa fa-arrow-circle-right"></i></h5>
		</div>
		</div>

         <!-- Small boxes (Stat box) --> 
		<div class="row">
		<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-yellow">
		<div class="inner">
		<h3><?= $this->fungsi->itung_lab()?></h3>
		<p>Pengembalian</p>
		</div>
		<div class="icon">
		<i class="fa fa-cubes"></i>
		</div>
		<h5 class="small-box-footer"<?php echo button('load_silent("kelola/pengembalian_view","#content")','' ,'  ');?>More info <i class="fa fa-arrow-circle-right"></i></h5>
		</div>
		</div>

         <!-- Small boxes (Stat box) --> 
		<div class="row">
		<div class="col-lg-3 col-xs-6">
		<!-- small box -->
		<div class="small-box bg-red">
		<div class="inner">
		<h3><?= $this->fungsi->itung_lab()?></h3>
		<p>Penjualan</p>
		</div>
		<div class="icon">
		<i class="fa fa-cubes"></i>
		</div>
		<h5 class="small-box-footer"<?php echo button('load_silent("kelola/penjualan_view","#content")','' ,'  ');?>More info <i class="fa fa-arrow-circle-right"></i></h5>
		</div>
		</div>


        	