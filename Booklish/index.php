<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklish | add book</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <?php
session_start();
if(isset($_SESSION["Sucess"])){
echo "<script>alert('Book is added')</script>";
 session_destroy();
}
else if (isset($_SESSION["NotSucess"])){
echo "<script>alert('Book is not added')</script>";
 session_destroy();
}
?>

</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="Post" enctype="multipart/form-data">
                <h2>Online store</h2>
                <img src="logp.png"alt="logo" width="450px">
                <input type="text" name="name" placeholder="book name" required><br>
                <input type="text" name="price" placeholder="book price" required><br>
                <input type="file" id="file" name="image" style='display: none;'>
                <label for="file">Upload</label>
                <button name="upload" required >Add </button><br><br>
                <a href="books.php">display books</a>
            </form>
        </div>
        <blockquote><i>New Items Everyday!. For English books.</i></blockquote>
    </center>
</body>
</html>
