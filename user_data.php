<?php

extract($_REQUEST);
$filename = fopen("userdata.csv", "a"); //open the filename in a read mode

fwrite($filename, "Name :");
fwrite($filename, $fname . "\n");
fwrite($filename, "Email :");
fwrite($filename, $email . "\n");
fwrite($filename, "Date of birth :");
fwrite($filename, $dob . "\n");
fwrite($filename, "Gender :");
fwrite($filename, $gender . "\n");
fwrite($filename, "Country :");
fwrite($filename, $country . "\n");

fclose($filename); //close filename

?>