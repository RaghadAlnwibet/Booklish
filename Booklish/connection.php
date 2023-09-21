<?php // PHP connction 
$servername="localhost";
$username="root";
$passwprds="";
$dbName="booklishshop";
$con=mysqli_connect($servername,$username,$passwprds,$dbName);
if(mysqli_connect_errno()){
    echo "faild to connect to MYSQL:".mysqli_connect_error();
}
?>