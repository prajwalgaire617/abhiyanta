<?php

$conn=mysqli_connect('localhost','root','','abhiyanta');

if(isset($_POST['jobsubmit'])){
    $name=mysqli_real_escape_string($conn,$_POST['name']);
    $title=mysqli_real_escape_string($conn,$_POST['title']);
    $address=mysqli_real_escape_string($conn,$_POST['address']);
    $salary=mysqli_real_escape_string($conn,$_POST['salary']);
    $number=mysqli_real_escape_string($conn,$_POST['number']);
    $jobtype=mysqli_real_escape_string($conn,$_POST['jobtype']);
    $jobEditor=mysqli_real_escape_string($conn,$_POST['content']);
    $Object = new DateTime();
    $DateAndTime = $Object->format("Y-m-d"); 


    $query="insert into job (name,title,salary,jobtype,content,address,phoneNo,date) values ('$name','$title','$salary','$jobtype','$jobEditor','$address','$number','$DateAndTime' )";

    $sql=mysqli_query($conn,$query);

    if ($sql==true) {
        echo "
        <script>
         alert('successfully registered')
        </script>

        ";
    }
    else{
        echo "<script>alert('failed')</script>";

    }

}

?>