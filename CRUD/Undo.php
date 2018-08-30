<?php
$con=mysqli_connect("localhost","root","test1234","assignment");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Set autocommit to off
mysqli_autocommit($con,FALSE);

// Commit transaction
mysqli_commit($con);

// Rollback transaction
mysqli_rollback($con);

// Close connection
mysqli_close($con);
?>