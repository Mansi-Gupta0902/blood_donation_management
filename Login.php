<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>Document</title>
</head>
<body>
<img style="opacity:1;" class="back" src="https://cdn.wallpapersafari.com/97/23/4iJcIv.jpg" alt="">
    
    
    <div class="container">
        <nav>
            
            <ul class="navbar"  style="background-color: #F4364C;">
            <li><a href="/dbms/Home.php">Home</a></li>
                <li><a href="/dbms/Donor.php">Search Donors</a></li>
                
                <li><a href="/dbms/Blood_Banks.php">Blood Banks</a></li>
                <li><a href="/dbms/Active_Camps.php">Active camps</a></li>
                <li><a href="/dbms/Login.php">Admin Login</a></li>
                <li><a href="/dbms/Register.php">Donor Registration</a></li>
                
            </ul>
        </nav>
        <div class="login_form">
            <form action="" method="post">
                <label for="email">Email Id</label>
                <br>
                <input type="text" name="email" id="email">
                <br>
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" id="password">
                <input type="submit" name="submit" id="btn" value="LOGIN">

            </form>
        </div>
        
    </div>
    <br>
    <?php
       include("Connection.php");
       if(isset($_POST['submit']))
       {
           $email=$_POST['email'];
           $pwd=$_POST['password'];
           $sql="SELECT * FROM admin WHERE email='$email' and pwd='$pwd'";
           $query=mysqli_query($conn,$sql);
           $rowcount=mysqli_num_rows($query);
           if($rowcount>0)
           {
               ?>
            <h2 id="error">Login successful!</h2>
            <?php
               header("Location: http://localhost/dbms/admin.php");
               
           }
           else
           {
               ?>
            <h2 id="error">Login failed!</h2>
            <?php
               
           }
       }
    ?>
</body>
</html>