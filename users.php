<?php

// Connect to database
$conn = mysqli_connect('localhost', 'root', 'qyp0ywr5zcq_NWQ3npt', 'ajaxtest');

$query = 'SELECT * FROM users';

// Get Results
$result = mysqli_query($conn, $query);
 
// Fetch Data
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);