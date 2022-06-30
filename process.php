<?php

// Connect to database
$conn = mysqli_connect('localhost', 'root', 'qyp0ywr5zcq_NWQ3npt', 'ajaxtest');

echo 'Processing...';

// Check for a POST variable
if(isset($_POST['name'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  echo 'POST: Your name is '. $_POST['name'];

  $query = "INSERT INTO users(name) VALUE('$name')";

  if(mysqli_query($conn, $query)){ 
    echo 'User Added...';
  } else {
    echo 'ERROR: '. mysqli_error($conn);
  }
}

// Check for a GET variable
if(isset($_GET['name'])){
  echo 'GET: Your name is '. $_GET['name'];
}