<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        error_reporting(0);
        $servername="localhost";
        $username="root";
        $password="";
        $database="bloodmanagement";

        $conn=mysqli_connect($servername,$username,$password,$database);
        if(!$conn)
        {
            die("Failed ".mysqli_connect_error());
        }
    ?>
</body>
</html>