<?php

$conn=mysqli_connect('localhost','root','','abhiyanta');

if(isset($_POST['submit_report'])){
    $name=mysqli_real_escape_string($conn,$_POST['victim_name']);
    $age=mysqli_real_escape_string($conn,$_POST['victim_age']);
    $report=mysqli_real_escape_string($conn,$_POST['report_editor']);
    $dat=date('Y-m-d',strtotime($_POST['date_report']));
    $date=mysqli_real_escape_string($conn,$dat);

    $query="insert into report (name,age,content,date) values ('$name','$age','$report','$date' )";

    $sql=mysqli_query($conn,$query);

    if ($sql==true) {
        echo "
        <script>
         alert('successfully registered')
         window.location.href='report.php'
        </script>

        ";
    }
    else{
        echo "<script>alert('failed')</script>";

    }

}
