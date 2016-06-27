<?php
	include "koneksi.php";
	$kodeuser = $_POST["kodeuser"];
	$password = $_POST["password"];
	$nama = $_POST["nama"];
	$alamat = $_POST["alamat"];
	$nomertelp = $_POST["nomortelpon"];
	$idrole = $_POST["listrole"];	
	
	$sql= "update user set password='".$password."', nama='".$nama."', alamat='".$alamat."', notelpon='".$nomertelp."', role='".$idrole."' where username='".$kodeuser."'";
	if ($conn->query($sql) === TRUE) {
		echo "<script type='text/javascript'>
			alert('Buku Berhasil Diupdate'); 
		</script>";
		header("Location:viewdatauser.php");
	} else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<script type='text/javascript'>alert('Error Buku Gagal Diupdate');</script>";
			header("Location:formedituser.php?id='".$kodeuser."'");
	}
		
?>