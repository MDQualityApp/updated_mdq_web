<?php
 $conn=mysqli_connect("localhost","root","","mdq_web");
// $conn=mysqli_connect("localhost","","","");

if(mysqli_connect_errno())
{
    echo "Failed to connect db:".mysqli_connect_error();
}

?>
