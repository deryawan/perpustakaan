<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$sql = "update peminjaman set status='Kembali', tglkembali=Date(current_date) where kodepinjam='".$id."'";
	if ($conn->query($sql) === TRUE) {
		header("Location:viewdatapeminjaman.php");
	}else{
		header("Location:viewdatapeminjaman.php?message='error'");
	}
?>