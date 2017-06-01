<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1" style="border-collapse: collapse; width: 50%;">
		<tr style="background: gray">
			<th>Kode Barang</th>
			<th>Nama barang</th>
			<!--<th>Satuan</th>-->
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Gambar</th>
			<th>edit</th>
			<th>delete</th>
			<!--<th>Kategori</th>-->
		</tr>
		<?php foreach ($data as $d) { ?>
		<tr>
			<td><?php echo $d['kode_barang'];?></td>
			<td><?php echo $d['nama_barang'];?></td>
			
			<td><?php echo $d['jumlah'];?></td>
			<td><?php echo $d['harga'];?></td>
			<td><img src="/uploads/<?php echo $d['image'];?>"></td>
			<td>
			<a href="<?php echo base_url()."index.php/crud/do_edit/".$d['kode_barang'] ?>"><button>edit</button></a>
			</td>
			<td>
			<a href="<?php echo base_url()."index.php/crud/do_delete/".$d['kode_barang'] ?>"><button>delete</button></a>	
			</td>
		</tr>
		<?php } ?>
	</table>
		<br>
		<a href="<?php echo base_url()."index.php/crud/add_data"; ?>"><button>insert</button></a>
</body>
</html>