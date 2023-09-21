<?php // done 
include ('connection.php');
if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $NAME= $_POST['name'];
    $PRICE=$_POST['price'];
    $image=$_FILES['image'];
    $image_location=$_FILES['image']['tmp_name'];
    $image_name=$_FILES['image']['name'];
    $image_up="iamges/".$image_name ;
    $update="UPDATE books SET Name='$NAME', Price='$PRICE', Image='$image_up' WHERE Id=$ID";
    mysqli_query($con ,"$update");
    if(move_uploaded_file($image_location,'images/'.$image_name)){
        echo "<script>alert(' Succsess Update')</script>";
    }else{
        echo "<script>alert('Try again!')</script>";
    }
}

?>