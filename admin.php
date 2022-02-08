<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>
<body>
<img style="opacity:1;" class="back" src="https://cdn.wallpapersafari.com/97/23/4iJcIv.jpg" alt="">
    
    
    <div class="container">
        <nav>
            
            <ul class="navbar"  style="background-color: #F4364C;">
            <li><a href="/dbms/Home.php">Home</a></li>
                
                
                <li><a href="/dbms/edit_Banks.php">Edit Blood Banks</a></li>
                <li><a href="/dbms/edit_Camps.php">Edit Active camps</a></li>
                <li><a href="/dbms/Login.php">Admin Logout</a></li>
                
                
            </ul>
        </nav>
    </div>
    
    <img class="front" src="https://i.pinimg.com/originals/94/4b/52/944b52ee3a0adb9673a81c4d1e57405b.gif" style="position:absolute;top:70px;width:70%;height:600px;object-fit:contain;margin-left:100px;" alt="">
    <h1 style="float:right;margin-right:70px;margin-top:200px;font-family:Papyrus;background-color:#FFEAEF;padding:10px 10px;BORDER:2px solid black;border-radius:10px">You don't have to be a Doctor<br> to save Lives.<br> Just Donate Blood.<br></h1>
    <?php
    include("Connection.php");
    
    ?>
    
</body>
</html>