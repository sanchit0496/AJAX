<?php 

$conn = mysqli_connect('localhost', 'root', '', 'users');

$query = 'SELECT * FROM webusers';

$result = mysqli_query($conn, $query);

$users = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo json_encode($users);


?>
