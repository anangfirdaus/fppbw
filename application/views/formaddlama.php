<!DOCTYPE html>
<html>
<head> 
	<title>Data Barang</title>
</head>
<body>

	<form enctype='multipart/form-data' method="POST" action="<?php echo base_url()."crud/insert"; ?>">
		<table>
			<tr>
				<td>nama barang</td>
				<td><input type="text" name="nama_barang"></td>
			</tr>
			<tr>
				<td>harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td>keterangan</td>
				<td><input type="text" name="keterangan"></td>
			</tr>
			<tr>
				<td>gambar</td>
				<td><input type="file" name="userFile"></td>
			</tr>
			<tr>
				<td><a href="<?= base_url()?>crud/viewadminhome">Back</a></td>
				<td><input type="submit" name="btnSubmit" value="insert"></td>
			</tr>
		</table>
	</form>
	<?php echo $this->session->flashdata('gagal')?>
</body>
</html>