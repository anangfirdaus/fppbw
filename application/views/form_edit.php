<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title> 


		<link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('/css/bootstrap.min.css')?>">
</head>
<body > 
<div class="container">
				
	<form method="POST" action="<?php echo base_url("crud/do_update/$id");?>" enctype="multipart/form-data">
	<?php
		$gambar = $image;
	?>
		<table class=" row form form-group col-md-offset-4 table-responsive" style="margin-top: 5em;border-radius: 20px;">
			<tr>
				<td>
					<label>Id Sepatu </label>
				</td>
				<td>
					<input type="text" name="id" class="form-control" value="<?php echo  $id; ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>
					<label>Nama Sepatu</label>
				</td>
				<td>
					<input type="text" name="nama_barang" class="form-control" value="<?php echo  $nama_barang; ?>" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Harga</label>
				</td>
				<td>
					<input type="text" name="harga" class="form-control" value="<?php echo  $harga; ?>" >
				</td>
			</tr>
			<tr>
				<td>
					<label>Keterangan</label>
				</td>
				<td>
					<input type="text" name="keterangan" class="form-control" value="<?php echo  $keterangan; ?>" >
				</td>
			</tr>
			<tr>
				<td>
					<label>upload gambar</label>
				</td>
				<td>
					<?php echo "<?php echo base_url().'gambar/'.$image"?> </br>
					<input type="text" name="gambarlama" class="form-control" value="<?php echo  $image; ?>" readonly>
				</td>
				<td>
					<input type="file" name="gambar" >
				</td>
			</tr>
			<tr>
				<td></td>
				<td>
					<input type="submit" name="btnSubmit" value="simpan">
				</td>
			</tr>
		</table>
	</form>

</div>


</body>
</html>