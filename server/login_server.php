<?php

    $conn=mysqli_connect('localhost','root','','abhiyanta');






    if (isset($_POST['login_submit'])) {
        $email=mysqli_real_escape_string($conn,$_POST['login_email']);
        $password=mysqli_real_escape_string($conn,md5($_POST['login_password']));

        $query="select userId,email,password,name from user WHERE email='$email' and password='$password' ";
        $sql=mysqli_query($conn,$query);

        if (mysqli_num_rows($sql)>0) {
            while ($row=mysqli_fetch_assoc($sql)) {
                session_start();
                $_SESSION["user_id"]=$row['userId'];
                $_SESSION["name"]=$row['name'];

                echo"
                <script>
                    alert('successfully logged in');
                </script>
                ";
                header('location:../index.php');
            }
        }
        else{
            echo "login failed";
        }

        

    }



?>