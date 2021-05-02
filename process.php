<?php 

$conn = mysqli_connect('localhost', 'root', '', 'users');


if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    echo 'POST: Entered: ' . $_POST['name'];

    $query = "INSERT INTO webusers(name) VALUES('$name')";

    if(mysqli_query($conn, $query)){
        echo "Added";
    }else{
        echo 'Error: ' . mysqli_error($conn);
    }

}


if(isset($_GET['name'])){
    echo 'GET: Entered: ' . $_GET['name'];
}


?>
