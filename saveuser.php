<?php
	include "koneksi.php";
	$kodeuser = $_POST["kodeuser"];
	$password = $_POST["password"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$nomertelp = $_POST["nomortelpon"];
	$idrole = $_POST["listrole"];
	
	$sql = "insert into user values ('".$kodeuser."','".$nama."','".$password."','".$alamat."','".$nomertelp."','".$idrole."')";
	if ($conn->query($sql) === TRUE) {
		header("Location:viewdatauser.php");
	}else{
		header("Location:forminputuser.php");		
	}
?>