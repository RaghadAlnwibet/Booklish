<!DOCTYPE html> <!--Done-->
<html lang="en">
<head>
    <link rel="stylesheet "href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booklish | Books </title>
    <style>
        h3{
        font-family: 'Geologica', sans-serif;
        font-weight: bold;
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
            height: 200px;

        }
        main{
            width: 60%;

        }
    </style>
</head>
<body>
    <center>
        <h3>Book lists</h3>
    </center>
    <?php 
    include ('connection.php');
    $result=mysqli_query($con, "SELECT *FROM books");
    while($row=mysqli_fetch_array($result)){
        echo "
        <center>
        <mian>
        <div class='card' style='width: 15rem;'>
            <img src='$row[Image]' class='card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'>$row[Name]</h5>
                <p class='card-text'>$row[Price]</p>
                <a href='delete.php? id=$row[Id]' class='btn btn-danger'>Delete A Book</a>
                <a href='Update.php? id=$row[Id]' class='btn btn-primary'>Edit A Book</a>
            </div>
        </div>
        </mian>
        <center>
        ";
    }
    ?>

</body>
</html>