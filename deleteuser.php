<?php
	include "koneksi.php";
	$id=$_GET['id'];
	$sql = "delete from user where username='".$id."'";
	if ($conn->query($sql) === TRUE) {
		header("Location:viewdatauser.php");
	}else{
		header("Location:viewdatauser.php");
	}
?>