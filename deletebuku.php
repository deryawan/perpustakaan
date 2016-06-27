<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$sql = "delete from buku where kodebuku='".$id."'";
	if ($conn->query($sql) === TRUE) {
		header("Location:viewdatabuku.php");
	}else{
		header("Location:viewdatabuku.php");
	}
?>