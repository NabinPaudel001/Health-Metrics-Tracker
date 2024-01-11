<?php
$conn=new mysqli('localhost','root','','health_metric');
if(!$conn){
    die(mysqli_error($conn));
}
?>