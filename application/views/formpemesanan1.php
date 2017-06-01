<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title> 


		<link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css')?>">
</head>
<body >

		<section class="portfolio-header" id="header">
		
		<nav class="navbar navbar-default _navbar-fixed-top">
			<div class="container">
			
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">BR</a>
				</div> 

		    
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url("Co_database/sepatu")?>">Sepatu</a></li>
						<li><a href="<?php echo site_url("Co_database/admin")?>">Admin</a></li>
						<li><a href="<?php echo site_url("Co_database/pemesanan")?>">Pemesanan</a></li>
						<li><a href="<?php echo site_url("co_login/keluar")?>">Logout</a></li>
					</ul> 
			    </div>
		  	</div>
		</nav>
	</section> 
<div class="container">
				
	<form method="POST" action="<?php echo base_url("crud/do_update/");?>" enctype="multipart/form-data">
		<table class=" row form form-group col-md-offset-4 table-responsive" style="margin-top: 5em;border-radius: 20px;">
			<tr>
				<td>
					<img src="<?php echo base_url().$sepatu['image'] ?>">
				</td>
				<td>
				</td>
			</tr>
			<tr>
				<td>
					<label>Nama Sepatu</label>
				</td>
				<td>
					<input type="text" name="nama_barang" class="form-control" value="<?php echo $sepatu['nama_barang'] ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>
					<label>Harga</label>
				</td>
				<td>
					<input type="text" name="harga" class="form-control" value="<?php echo $sepatu['harga'] ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>
					<label>Nama Pemesan</label>
				</td>
				<td>
					<input type="text" name="namapemesan" class="form-control" >
				</td>
			</tr>
			<tr>
				<td>
					<label>email</label>
				</td>
				<td>
					<input type="text" name="email" class="form-control" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Alamat</label>
				</td>
				<td>
					<input type="text" name="alamat" class="form-control" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Nomor Hp</label>
				</td>
				<td>
					<input type="text" name="nohp" class="form-control" >
				</td>
			</tr>
			<tr>
				<td>
					<div class="col-sm-4 col-xs-12 form-group" style="margin-left: 2em;">
							<?=$captcha_image?>&nbsp;<a href="#" onclick="parent.window.location.reload(true)">[perbarui gambar]</a>
							</div>
				</td>
				<td>
					<div class="col-sm-4 col-xs-12 form-group" style="margin-left: 2em;">
		                    <input name="input_captcha" class="form-control" type="text" required="">
							</div>
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="kirim" value="pesan">
				</td>
			</tr>
		</table>
	</form>

</div>


</body>
</html>