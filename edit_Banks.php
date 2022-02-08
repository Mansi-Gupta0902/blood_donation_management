<!DOCTYPE html>
<?php  include("Connection.php");?>
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
        <form action="" method="post">
        <input type="submit" name="add" id="btn" value="ADD BLOOD BANK">
        <input type="submit" name="update" id="btn" value="EDIT BLOOD BANK">
        <input type="submit" name="delete" id="btn" value="DELETE BLOOD BANK">
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
                <label for="address">Address</label>
                <br>
                <input type="text" name="address">
                <br>
                
                <label for="email">Email Id</label>
                <br>
                <input type="email" name="email">
                <br>
                <label for="phone">Contact No.</label>
                <br>
                <input type="text" name="phone" >
                <br>
                <label for="city">City</label>
                <br>
                <input type="text" name="city" >
                <br>
                <label for="grps">Choose blood groups available:</label>
                <div class="blood" style="display:flex;flex-direction:row;justify-content:center;align-items:center;margin-top:20px;margin-bottom:20px;padding-right:20px;">
                <br>
                <label for="AB+">AB+</label>
                <input type="checkbox" name="AB+" id="" value="AB+">
                <br>
                <label for="AB-">AB-</label>
                <input type="checkbox" name="AB-" id="" value="AB-">
                <br>
                <label for="O+">O+</label>
                <input type="checkbox" name="O+" id="" value="O+">
                <br>
                <label for="O-">O-</label>
                <input type="checkbox" name="O-" id="" value="O-">
                <br>
                
                <label for="A+">A+</label>
                <input type="checkbox" name="A+" id="" value="A+">
                <br>
                <label for="A-">A-</label>
                <input type="checkbox" name="A-" id="" value="A-">
                <br>
                <label for="B+">B+</label>
                <input type="checkbox" name="B+" id="" value="B+">
                <br>
                <label for="B-">B-</label>
                <input type="checkbox" name="B-" id="" value="B-">
                <br>
                </div>
                
                <!-- <select name="grps" id="grps" multiple="multiple">
                <option class="grp" value="B+">B+</option>
                    <option class="grp" value="B-">B-</option>
                    
                    <option class="grp" value="AB+">AB+</option>
                    <option class="grp" value="AB-">AB-</option>
                    <option class="grp" value="O+">O+</option>
                    <option class="grp" value="O-">O-</option>
                    <option class="grp" value="A+">A+</option>
                    <option class="grp" value="A-">A-</option>
                </select>
                <br> -->
                
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
                <label for="n_address">Address</label>
                <br>
                <input type="text" name="n_address">
                <br>
                
                <label for="n_email">Email Id</label>
                <br>
                <input type="email" name="n_email">
                <br>
                <label for="n_phone">Contact No.</label>
                <br>
                <input type="text" name="n_phone" >
                <br>
                <label for="n_city">City</label>
                <br>
                <input type="text" name="n_city" >
                <br>
                <label for="n_grps">Choose blood groups available:</label>
                
                <div class="blood" style="display:flex;flex-direction:row;justify-content:center;align-items:center;margin-top:20px;margin-bottom:20px;padding-right:20px;">
                <br>
                <label for="n_AB+">AB+</label>
                <input type="checkbox" name="n_AB+" id="" value="AB+">
                <br>
                <label for="n_AB-">AB-</label>
                <input type="checkbox" name="n_AB-" id="" value="AB-">
                <br>
                <label for="n_O+">O+</label>
                <input type="checkbox" name="n_O+" id="" value="O+">
                <br>
                <label for="n_O-">O-</label>
                <input type="checkbox" name="n_O-" id="" value="O-">
                <br>
                
                <label for="n_A+">A+</label>
                <input type="checkbox" name="n_A+" id="" value="A+">
                <br>
                <label for="n_A-">A-</label>
                <input type="checkbox" name="n_A-" id="" value="A-">
                <br>
                <label for="n_B+">B+</label>
                <input type="checkbox" name="n_B+" id="" value="B+">
                <br>
                <label for="n_B-">B-</label>
                <input type="checkbox" name="n_B-" id="" value="B-">
                <br>
                </div>
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
            <label for="name">Name</label>
                <br>
            <input type="text" name="name" >
                <br>
                <input type="submit" name="submit_dlt" id="btn" value="DELETE">
            </form>
            <?php
            
        }

        if(isset($_POST['submit_add']))
        {
            
            $name=$_POST['name'];
            $city=$_POST['city'];
            $address=$_POST['address'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
           $A=$_POST['A+'];
           $a=$_POST['A-'];
           $B=$_POST['B+'];
           $b=$_POST['B-'];
           $AB=$_POST['AB+'];
           $ab=$_POST['AB-'];
           $O=$_POST['O+'];
           $o=$_POST['O-'];
        
            
        
            $sql="INSERT INTO `blood_bank`(`name`, `city`, `address`, `email`, `phone`, `A+`,`A-`,`B+`,`B-`,`AB+`,`AB-`,`O+`,`O-`) VALUES ('$name','$city','$address','$email','$phone','$A','$a','$B','$b','$AB','$ab','$O','$o')";
            
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
                
            }
        }
        

        if(isset($_POST['submit_dlt']) )
            {
                
                $name=$_POST['name'];
            
            $sql="DELETE FROM blood_bank where `name`='$name'";
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
            $n_email=$_POST['n_email'];
            $n_phone=$_POST['n_phone'];
            $n_A=$_POST['n_A+'];
           $n_a=$_POST['n_A-'];
           $n_B=$_POST['n_B+'];
           $n_b=$_POST['n_B-'];
           $n_AB=$_POST['n_AB+'];
           $n_ab=$_POST['n_AB-'];
           $n_O=$_POST['n_O+'];
           $n_o=$_POST['n_O-'];
            
            
            $s="UPDATE blood_bank SET name='$n_name',city='$n_city',address='$n_address',email='$n_email',phone='$n_phone',`A+`='$n_A',`A-`='$n_a',`B+`='$n_B',`B-`='$n_b',`AB+`='$n_AB',`AB-`='$n_ab',`O+`='$n_O',`O-`='$n_o' WHERE email='$n_email'";
            
            $q=mysqli_query($conn,$s);
            if($q)
            {
                echo "success update";
               
                
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