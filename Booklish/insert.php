<?php // done 
include ('connection.php'); 
session_start();
if(isset($_POST['upload'])){
    $NAME= $_POST['name'];
    $PRICE=$_POST['price'];
    $image=$_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="iamges/".$image_name ;
    $insert="INSERT INTO books (Name , Price , Image) VALUES ('$NAME' ,'$PRICE' ,' $image_up ')";
    mysqli_query($con , "$insert");
    if(move_uploaded_file($image_location,'images/'.$image_name)){
        $_SESSION["Sucess"] ="yes";

            header('location: index.php');
    }else{
        header('location: index.php');
        $_SESSION["NotSucess"] ="false";
    }
}

?>