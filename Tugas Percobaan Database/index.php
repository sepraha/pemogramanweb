<?php require_once"connection.php";?>
<html>
<head>
	<title>Data Buku</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container">
	<div class="header">
		<img src="book.png" width="50" align="middle">   <span class="title-head">Data Buku Sepraha's Library</span>
	</div>
	<div class="content">
	<?php 
	$id = isset($_GET['id']) && $_GET['id'] != ""?$_GET['id']:"";
	if($id != ""){ $edit = mysql_fetch_array(mysql_query("SELECT * FROM buku WHERE id='$id'"))?>
	<form method="POST" action="action.php?cmd=update">
		<input type="hidden" name="id" value="<?php echo $edit['id'];?>">
		<label>Judul Buku</label><br>
		<input type="text" name="judul_buku" maxlength="50" value="<?php echo $edit['judul_buku'];?>" required><br>
		<label>Pengarang</label><br>
		<input type="text" name="pengarang" maxlength="35" value="<?php echo $edit['pengarang'];?>" required><br>
		<label>Penerbit</label><br>
		<input type="text" name="penerbit" maxlength="35" value="<?php echo $edit['penerbit'];?>" required><br>
		<label>Tahun Terbit</label><br>
		<input type="text" name="tahun_terbit" maxlength="4" value="<?php echo $edit['tahun_terbit'];?>" required><br>
		<input type="submit" name="save" value="Simpan">
	</form>
	<?php }else{?>
	<form method="POST" action="action.php?cmd=save">
		<label>Judul Buku</label><br>
		<input type="text" name="judul_buku" maxlength="50" required><br>
		<label>Pengarang</label><br>
		<input type="text" name="pengarang" maxlength="35" required><br>
		<label>Penerbit</label><br>
		<input type="text" name="penerbit" maxlength="35" required><br>
		<label>Tahun Terbit</label><br>
		<input type="text" name="tahun_terbit" maxlength="4" required><br>
		<input type="submit" name="save" value="Simpan">
	</form>
	<?php } ?>
	<table border="1">
		<thead>
			<tr>
				<th>NO</th>
				<th>JUDUL BUKU</th>
				<th>PENGARANG</th>
				<th>PENERBIT</th>
				<th>TAHUN TERBIT</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$query = mysql_query("SELECT * FROM buku");
			while ($data = mysql_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $no;?></td>
				<td><?php echo $data['judul_buku'];?></td>
				<td><?php echo $data['pengarang'];?></td>
				<td><?php echo $data['penerbit'];?></td>
				<td><?php echo $data['tahun_terbit'];?></td>
				<td>
					<a class="act" href="index.php?id=<?php echo $data['id'];?>"><img src="b_edit.png"> Edit</a>
					<a class="act" href="action.php?cmd=delete&id=<?php echo $data['id'];?>"><img src="b_drop.png"> Delete</a>
				</td>
			</tr>
			<?php $no++;} ?>
		</tbody>
	</table>
	</div><!-- end content -->
</div><!-- end container -->
</body>
</html>
