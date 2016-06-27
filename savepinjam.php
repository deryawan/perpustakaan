<?php
	include "koneksi.php";
    $isbn = $_POST["isbn"];
    $username = $_POST["username"];
	$tglpinjam = date('Y-m-d H:i:s');
    
    if((!empty($isbn))&&(!empty($username))){
    $sql = "insert into peminjaman values ('".$isbn."','".$username."','".$tglpinjam."')";
        if($conn->query($sql) ) {
            header("Location:viewdatapeminjaman.php");
        }else{
            header("Location:formpeminjaman.php");
        }
    }
?>