<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "pemogramanweb";

mysql_connect($host,$user,$pass) or die ("Connecting failed!!");
mysql_select_db("pemogramanweb") or die ("Database not found!!");
?>

<?php 
if (isset($_POST['save'])) {
	$query = mysql_query("INSERT INTO buku VALUES ('','$_POST[judul_buku]','$_POST[pengarang]','$_POST[penerbit]','$_POST[tahun_terbit]')");
	if($query){
		echo "Data berhasil disimpan!";
	}else{
		echo "Data gagal disimpan";
	}
	
}else{
	echo "gagal";
}
?>
<html>
<head>
	<title>Data Buku</title>
</head>
<body>
	<h2>DATA BUKU SEPRAHA LIBRARY</h2>
	<form method="POST" action="">
		<label>Judul Buku</label><br>
		<input type="text" name="judul_buku" maxlength="50"><br>
		<label>Pengarang</label><br>
		<input type="text" name="pengarang" maxlength="35"><br>
		<label>Penerbit</label><br>
		<input type="text" name="penerbit" maxlength="35"><br>
		<label>Tahun Terbit</label><br>
		<input type="text" name="tahun_terbit" maxlength="4"><br><br>
		<input type="submit" name="save" value="simpan">
	</form>
	<table>
		<thead>
			<tr>
				<th>NO</th>
				<th>JUDUL BUKU</th>
				<th>PENGARANG</th>
				<th>PENERBIT</th>
				<th>TAHUN TERBIT</th>
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
			</tr>
			<?php $no++;} ?>
		</tbody>
	</table>
</body>
