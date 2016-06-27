<?php
	include "koneksi.php";
	$kodebuku = $_POST["kodebuku"];
	$judulbuku = $_POST["judulbuku"];
	$pengarang = $_POST["pengarang"];
	$penerbit = $_POST["penerbit"];
	$kotaterbit = $_POST["kotaterbit"];
	$tahunterbit = $_POST["tahunterbit"];
	$kategori = $_POST["kategori"];
	$deskripsibuku = $_POST["deskripsibuku"];
	$tahunterbit = $_POST["tahunterbit"];
	$isbn = $_POST["isbn"];
	$uploadOk = 1;
	$fileupload = "uploads/book/".basename($_FILES["fileupload"]["name"]);
	$fileupload2 = "uploads/images/".basename($_FILES["fileupload2"]["name"]);
	
	//if (file_exists($fileupload)) {
		//echo "Sorry, file already exists.";
		//$uploadOk = 0;
	//}
	//limit size 100mb
	if ($_FILES["fileupload"]["size"] > 100000000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	
	if ($_FILES["fileupload2"]["size"] > 100000000) {
		echo "Sorry, your file is too large.";
		$uploadOk = 0;
	}
	
	if($uploadOk == 0){
		 echo "Tambah Buku Gagal, Upload Failed!";
	}else{
		if(move_uploaded_file($_FILES["fileupload"]["tmp_name"], $fileupload)){
            move_uploaded_file($_FILES["fileupload2"]["tmp_name"], $fileupload2);
			//echo "The file ". basename( $_FILES["fileupload"]["name"]). " has been uploaded.";
			$sql= "insert into buku values ('".$kodebuku."','".$judulbuku."','".$pengarang."','".$penerbit."','".$kotaterbit."','".$tahunterbit."','".$kategori."','".$isbn."','".basename($_FILES["fileupload"]["name"])."','".basename($_FILES["fileupload2"]["name"])."','".$deskripsibuku."')";
			if ($conn->query($sql) === TRUE) {
				echo "<script type='text/javascript'>
					alert('Buku Berhasil Ditambahkan'); 
				</script>";
				header("Location:viewdatabuku.php");    
			} else {
				//echo "Error: " . $sql . "<br>" . $conn->error;
				echo "<script type='text/javascript'>alert('Error Buku Gagal Ditambahkan');</script>";
				header("Location:forminputbuku.php?message=error2");
			}
		} else {
			//echo "Sorry, there was an error uploading your file.";
			echo "<script type='text/javascript'>alert('Error Terjadi Kesalahan pada proses upload');</script>";
			header("Location:forminputbuku.php?message=error");
		}
	}
?>