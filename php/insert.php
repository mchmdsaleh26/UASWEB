<?php
$con = mysqli_connect('localhost', 'root', '', 'tugasbejoy');

// get the post records
$username = $_POST['username'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$event = $_POST['event'];
$date = $_POST['date'];

// database insert SQL code
$sql = "INSERT INTO `contactus` (`id`, `name`, `email`, `phonenumber`, `event`, `date`, `draft`) VALUES (0, '$username', '$email', '$phonenumber', '$event', '$date', 'Belum dilayani' )";

// insert in database 
$rs = mysqli_query($con, $sql);

if ($rs) {
    echo "Reservation Has Been Submited";
}
