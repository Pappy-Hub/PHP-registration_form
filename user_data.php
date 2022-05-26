<?php

// print_r($_POST);

// $name = "name";
// $email = "email";
// $dob = "dob";
// $gender = "gender";
// $country = "country";

$name = $_POST['name']; 
$email = $_POST['email'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$country = $_POST['country'];

echo 'NAME: ' . $name . "<br>";
echo 'EMAIL: ' . $email . "<br>";
echo 'DOB: ' . $dob . "<br>";
echo 'GENDER: ' . $gender . "<br>";
echo 'COUNTRY: ' . $country . "<br>";


$filename = "./userdata.csv"; //file path
$handle = fopen($filename, "a"); //open the file in a read mode

fwrite($handle, "Pappy is the man, shit pays \n"); //Write to file

fclose($handle); //close file




?>