<?php
$conn = mysqli_connect("localhost","root","","batam_traveller");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit;
  }
?> 