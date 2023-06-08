<?php
$servername="localhost";
$username="root";
$password="";


$conn=mysqli_connect($servername,$username,$password);
if($conn->connect_error)
{
    die("connection error");

}
else{
    echo "";
}
?>
