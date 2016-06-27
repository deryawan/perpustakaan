<?php
	include "koneksi.php";
	$username = $_POST["username"];
	$kodebuku1 = $_POST["kodebuku1"];
	$kodebuku2 = $_POST["kodebuku2"];
	$kodebuku3 = $_POST["kodebuku3"];
	
	$sql = "insert into peminjaman values (null,Date(current_date),null,Date(current_date+7),'1','0','Dipinjam')";
	if ($conn->query($sql) === TRUE) {
		$sqldetail = "insert into detail_pinjam values";
		$id = $conn->insert_id;
		if(!$kodebuku1==''){
			$sqldetail = $sqldetail."(null,'".$kodebuku1."','".$id."')";
		}
		if(!$kodebuku2==''){
			$sqldetail = $sqldetail.",(null,'".$kodebuku2."','".$id."')";
		}
		if(!$kodebuku3==''){
			$sqldetail = $sqldetail.",(null,'".$kodebuku3."','".$id."')";
		}
		if ($conn->query($sqldetail) === TRUE) {
			header("Location:viewdatapeminjaman.php");			
		}else{
			header("Location:formpeminjaman.php");
		}
	}else {
		//echo "Error: " . $sql . "<br>" . $conn->error;
		echo "<script type='text/javascript'>alert('Error Buku Gagal Diupdate');</script>";
			header("Location:formpeminjaman.php");
	}
?>