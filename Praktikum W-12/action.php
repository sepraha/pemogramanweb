<?php 
require_once "connection.php";
$cmd = $_GET['cmd'];
switch ($cmd) {
	case 'save':
		if (isset($_POST['save'])) {
			$query = mysql_query("INSERT INTO buku VALUES ('','$_POST[judul_buku]','$_POST[pengarang]','$_POST[penerbit]','$_POST[tahun_terbit]')");
			if($query){
				?>
				<script type="text/javascript">
				alert("Data berhasil disimpan!!");
				window.location="index.php";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
				alert("Data gagal disimpan!!");
				window.location="index.php";
				</script>
				<?php
			}
			
		}else{
				echo "gagal";
		}
		break;
	
	case 'update':
		if (isset($_POST['save'])) {
			$query = mysql_query("UPDATE buku SET judul_buku='$_POST[judul_buku]',pengarang='$_POST[pengarang]',penerbit='$_POST[penerbit]',tahun_terbit='$_POST[tahun_terbit]' WHERE id='$_POST[id]'");
			if($query){
				?>
				<script type="text/javascript">
				alert("Data berhasil diubah!!!");
				window.location="index.php";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
				alert("Data gagal diubah!!");
				window.location="index.php";
				</script>
				<?php
			}
			
		}else{
				echo "gagal";
		}
		break;

	case 'delete':
		$id = $_GET['id'];
		$query = mysql_query("DELETE FROM buku WHERE id='$id'");
			if($query){
				?>
				<script type="text/javascript">
				alert("Data berhasil dihapus!!!");
				window.location="index.php";
				</script>
				<?php
			}else{
				?>
				<script type="text/javascript">
				alert("Data gagal dihapus!!");
				window.location="index.php";
				</script>
				<?php
			}
		break;

	default:
	echo "Sorry no service available";
		break;
}
?>