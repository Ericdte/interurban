<?php
$con=new mysqli('localhost','root','','inter_urban_transportation_db');
if(!$con){
    die(mysqli_error($con));
}
