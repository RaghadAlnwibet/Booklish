<?php
include ('connection.php');
$ID = $_GET['id'];
mysqli_query($con , "DELETE FROM books WHERE Id=$ID ");
header('location: books.php');
?>