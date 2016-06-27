<?php
	include "koneksi.php";
	$idbuku = $_POST["idbuku"];
	$judulbuku = $_POST["judulbuku"];
	$pengarang = $_POST["pengarang"];
	$penerbit = $_POST["penerbit"];
	$kotaterbit = $_POST["kotaterbit"];
	$tahunterbit = $_POST["tahunterbit"];
	$kategori = $_POST["kategori"];
	$deskripsibuku = $_POST["deskripsibuku"];
	$tahunterbit = $_POST["tahunterbit"];
	$koderak = $_POST["koderak"];
	
	
	$sql= "update buku set judulbuku='".$judulbuku."', pengarang='".$pengarang."', penerbit='".$penerbit."', kotaterbit='".$kotaterbit."', tahunterbit='".$tahunterbit."', kategori='".$kategori."', koderak='".$koderak."', deskripsi='".$deskripsibuku."' where idbuku='".$idbuku."'";
	if ($conn->query($sql) === TRUE) {
		echo "<script type='text/javascript'>
			alert('Buku Berhasil Diupdate'); 
		</script>";
		header("Location:viewdatabuku.php");
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<script type='text/javascript'>alert('Error Buku Gagal Diupdate');</script>";
			header("Location:formeditbuku.php?id='".$kodebuku."'");
	}
		
?>