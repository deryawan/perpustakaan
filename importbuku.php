<?php
    include "koneksi.php";

    if ($_FILES[csv][size] > 0) {
        
        $file = $_FILES[csv][tmp_name];
        $handle = fopen($file,"r");
        
        do {
            if ($data[0]) {
                mysql_query("insert into buku (judulbuku, pengarang) values 
                    (
                        '".addslashes($data[0])."',
                        '".addslashes($data[1])."'
                    )
                ");
            }
        } while ($data = fgetcsv($handle,1000,",","'"));
            header('location:viewdatabuku.php?success=1'); die;
    }
?>