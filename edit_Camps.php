<!DOCTYPE html>
<?php include("Connection.php");?>
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
            
            <ul class="navbar"  style="background-color:#F4364C;">
            <li><a href="/dbms/Home.php">Home</a></li>
                
                
                <li><a href="/dbms/edit_Banks.php">Edit Blood Banks</a></li>
                <li><a href="/dbms/edit_Camps.php">Edit Active camps</a></li>
                <li><a href="/dbms/Login.php">Admin Logout</a></li>
                
                
            </ul>
        </nav>
        <form action="" method="post">
        <input type="submit" name="add" id="btn" value="ADD ACTIVE CAMP">
        <input type="submit" name="update" id="btn" value="EDIT ACTIVE CAMP">
        <input type="submit" name="delete" id="btn" value="DELETE ACTIVE CAMP">
        </form>
    </div>
    <?php
    if(isset($_POST['add']))
    {
        
        ?>
        <div class="add_form">
        <form action="" method="POST">
            
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">
            <br>
            <label for="city">City</label>
            <br>
            <input type="text" name="city" >
            <br>
            <label for="address">Address</label>
            <br>
            <input type="text" name="address">
            <br>
            
            <label for="phone">Contact No.</label>
            <br>
            <input type="text" name="phone" >
            <br>
            <label for="date">Date</label>
            <br>
            <input type="date" name="date" >
            <br>
            <label for="time">Scheduled Time</label>
            <br>
            <input type="time" name="time" >
            <br>
            
            
            
            <input id="btn" type="submit" name="submit_add" value="ADD" >
        </form>
    </div>
    
        <?php
    }
    else if(isset($_POST['update']))
        {
            echo "update";
            ?>
            <div class="add_form">
                <h2 style="margin-left:160px;">Enter new values</h2>
                
            <form action="" method="POST">
                <label for="n_name">Name</label>
                <br>
                <input type="text" name="n_name" id="name">
                <br>
                <label for="n_city">City</label>
                <br>
                <input type="text" name="n_city" >
                <br>
                <label for="n_address">Address</label>
                <br>
                <input type="text" name="n_address">
                <br>
                
                
                <label for="n_phone">Contact No.</label>
                <br>
                <input type="text" name="n_phone" >
                <br>
                
                <label for="n_date">Date</label>
                <br>
                <input type="date" name="n_date" >
                <br>
                <label for="n_time">Scheduled Time</label>
                <br>
                <input type="time" name="n_time" >
                <br>
                    
                    <input id="btn" type="submit" name="n_submit" value="UPDATE" >
                </form>
            </div>
            
            <?php

        }
        else if(isset($_POST['delete']))
        {
            
            echo "delete";
            ?>
            <form class="add_form" action="" method="post">
            <label for="name">Name of Camp to be deleted</label>
                <br>
            <input type="text" name="name" >
                <br>
                <input type="submit" name="submit_dlt" id="btn" value="DELETE">
            </form>
            <?php
            
        }
        ?>

        <?php
        if(isset($_POST['submit_add']))
        {
           
            $name=$_POST['name'];
            $city=$_POST['city'];
            $address=$_POST['address'];
            $date=$_POST['date'];
            $phone=$_POST['phone'];
            $time=$_POST['time'];
        
            echo "camp ";
            echo $name;
            
            echo $phone;  
            echo $city;
            
        
            $sql="INSERT INTO `active_camps`(`name`, `city`, `address`, `phone`, date,time) VALUES ('$name','$city','$address','$phone','$date','$time')";
            
            $query=mysqli_query($conn,$sql);
            echo $query;
            if($query)
            {
                echo "success";
            }
            else
            {
                echo "Failed";
                echo mysqli_error($conn);
                die("Failed ".mysqli_connect_error());
            }
        }
        if(isset($_POST['submit_dlt']) )
            {
                
                $name=$_POST['name'];
            
            $sql="DELETE FROM active_camps where `name`='$name'";
            $query=mysqli_query($conn,$sql);
            
            if($query)
                {
                    echo "successfully deleted";
                }
                else
                {
                    echo "name doesnt exist";
                }
            }
            
        ?>

        <?php
        if(isset($_POST['n_submit']))
        {
            $n_name=$_POST['n_name'];
            $n_city=$_POST['n_city'];
            $n_address=$_POST['n_address'];
            $n_date=$_POST['n_date'];
            $n_phone=$_POST['n_phone'];
            $n_time=$_POST['n_time'];
            
            
            $s="UPDATE active_camps SET name='$n_name',city='$n_city',address='$n_address',phone='$n_phone',date='$n_date',time='$n_time' WHERE name='$n_name'";
           
            $q=mysqli_query($conn,$s);
            if($q)
            {
                echo "success update";
                echo mysqli_error($conn);
            }
            else
            {
                echo "failed update";
                echo mysqli_error($conn);
            }
        }
        
            
        ?>
    
</body>
</html>