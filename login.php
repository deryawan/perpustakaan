<?php
    session_start();
    $error='';
    if (isset($_POST['submit'])){
        if (empty($_POST['username']) || empty($_POST['password'])){
            $error = "Username or Password is Invalid";
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $conn = mysql_connect("localhost", "root", "");
            
            $username = stripslashes($username);
            $password = stripslashes($password);
            $username = mysql_real_escape_string(htmlentities($username));
            $password = mysql_real_escape_string(htmlentities(md5($password)));
            
            $db = mysql_select_db("perpustakaan", $conn);
            $query = mysql_query("select * from user where username='$username' and password='$password'", $conn);
            $rows = mysql_num_rows($query);
            if ($rows == 1) {
                $_SESSION['login_user']=$username;
                header("location: index.php");
            }else{
                print "<script type='text/javascript'>alert('Gagal Login')</script>";
                    header("location: formlogin.php");
            }
            mysql_close($conn);
        }
    }
?>