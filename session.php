<?php
    $conn   = mysql_connect("localhost", "root", "");
    $db     = mysql_select_db("perpustakaan", $conn);
    session_start();
    $user_check = $_SESSION['login_user'];
    $ses_sql= mysql_query("select username from user where username='$user_check'", $conn);
    $row    = mysql_fetch_assoc($ses_sql);
    $login_session = $row['username'];
    if(!isset($login_session)){
    mysql_close($conn);
        header("location: formlogin.php");
    }
?>