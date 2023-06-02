<?php
$con = mysqli_connect("localhost", "root", "" , "liberia_db");
if(!$con){
    print mysqli_error($con);
}
else{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $passport = $_POST['passport'];
    $address = $_POST['address'];
    $schoolWork = $_POST['schoo/work'];
    $center = $_POST['center']
}

$insertQuery = "INSERT INTO `liberia_dbtable`(`firstname`, `lastname`, `gender`, `dob`, `email`, `phone`, `passport`, `address`, `school/work`, `center`)" 
VALUES ('$firstname','$lastname','$gender','$dob','$email','$phone','$passport','$address','$schoolWork','$center')

if(mysqli_query($con, $insertquery)){
    $sucess = "Data sucessfully submitted";
header("Location:index.php?sucess=$sucess");
}else{
$error = mysqli_error($con);
header("Location:index.php?error=$error");
}


?>