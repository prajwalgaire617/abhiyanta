
<?php

$conn = mysqli_connect("localhost", "root", "", "abhiyanta");

if (isset($_POST["submit_registration"])) {



    $name = mysqli_real_escape_string($conn, $_POST['register_name']);
    $email = mysqli_real_escape_string($conn, $_POST['register_email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['register_password']));
    $address = mysqli_real_escape_string($conn, $_POST['register_address']);
    $number = mysqli_real_escape_string($conn, $_POST['register_number']);



    $mysql_query = "select email from user where email='$email'";
    $check_email = mysqli_num_rows(mysqli_query($conn, $mysql_query));
    if ($check_email > 0) {
        echo "
        <script>
         alert('email already exists')
         window.location.href('registration.php')
        </script>
        
        ";
    } else {
        $query = "insert into user (name,email,password,number,address,image) values ('$name','$email','$password','$number','$address','$dstfile')";
        $sql = mysqli_query($conn, $query);


        if ($sql) {
            echo "
            <script>
            alert('successfully registered')
            </script>";
        }
    }
}


?>