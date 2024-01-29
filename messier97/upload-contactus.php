<?php
include '../connect.php';

if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
        date_default_timezone_set('Asia/Kolkata');
        $createdAt = date("Y-m-d H:i:s", time());
        $query = mysqli_query($conn,"INSERT INTO contact (name, email, phone, message, created_at) VALUES ('$name', '$email', '$phone', '$message', '$createdAt')");

     if($query>0){
        echo "<script>alert('Thankyou for Reaching us');
        window.location.href='../index.php#contactus'</script>";

    } else {
        echo "<script>alert('Something went wrong! please try again later');
        window.location.href='../index.php#contactus'</script>". mysqli_error($conn);
    }
}



