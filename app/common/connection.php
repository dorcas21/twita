<?php
require_once('secrets.php');
$con=mysqli_connect($HOST,$USER,$PASSWORD,$DATABASE);
if($con){

}else{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}