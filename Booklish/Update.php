<!DOCTYPE html> <!--Done-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklish | Ubdate Books</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    include ('connection.php');
    $IID = $_GET['id'];
    $up=mysqli_query($con ,"SELECT * FROM books WHERE Id=$IID");
    $data= mysqli_fetch_array( $up);

    ?>
    <center>
        <div class="main">
            <form action="up.php" method="Post" enctype="multipart/form-data">
                <h2>Ubdate Books</h2>
                <input type="text" name="id" placeholder="id" value='<?php echo $data['Id'] ?>'required><br>
                <input type="text" name="name" placeholder="book name" required value='<?php echo $data['Name'] ?>'><br>
                <input type="text" name="price" placeholder="book price" required value='<?php echo $data['Price'] ?>'><br>
                <input type="file" id="file" name="image" style='display: none;'>
                <label for="file">Ubload</label>
                <button name="update" type='submit' required >Edit </button><br><br>
                <a href="books.php">display books</a>
            </form>
        </div>
        <blockquote><i>New Items Everyday!. Sells For English books.</i></blockquote>
    </center>
</body>
</html>

