<!DOCTYPE html>
<?php 
    include("Connection.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Register.css">
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
        
        <!-- <h1 style="float:right;margin-right:90px;margin-top:100px;font-family:Papyrus;background-color:#A2CDCD;padding:10px 10px;BORDER:2px solid black;border-radius:10px">Excuses never save a Life <br> But <br> Your blood can.</h1>
        <h1 style="position:absolute;right:0px;float:right;margin-right:70px;margin-top:400px;font-family:Papyrus;background-color:#A2CDCD;padding:10px 10px;BORDER:2px solid black;border-radius:10px">You can share Screenshots, <br> Why not Blood?</h1> -->
        <div class="register_form">
            <form action="" method="POST" style="background-color:rgb(240, 240, 240);">
                <label for="first_name">First Name</label>
                <br>
                <input type="text" name="first_name" >
                <label for="last_name">Last Name</label>
                <br>
                <input type="text" name="last_name" >
                <label for="gender">Gender</label>
                <div class="Gender">
                    <input type="radio" id="m" name="gender" value="Male" checked>
                    <label for="m">Male</label>
                    <input type="radio" id="f" name="gender" value="Female">
                    <label for="f">Female</label>  
                    <input type="radio" id="o" name="gender" value="Other">
                    <label for="o">Other</label>
                </div>
                <label for="dob">Date of Birth</label>
                <br>
                <input type="date" name="dob">
                <label for="email">Email Id</label>
                <br>
                <input type="email" name="email">
                <label for="phone">Contact No.</label>
                <br>
                <input type="text" name="phone" >
                <label for="city">City</label>
                <br>
                <input type="text" name="city" >
                <label for="blood_grp">Blood Group</label>
                <select name="blood_grp" id="blood_grp">

                    <option class="grp" disabled hidden selected>Blood Group</option>
                    
                    <option class="grp" value="B+">B+</option>
                    <option class="grp" value="B-">B-</option>
                    
                    <option class="grp" value="AB+">AB+</option>
                    <option class="grp" value="AB-">AB-</option>
                    <option class="grp" value="O+">O+</option>
                    <option class="grp" value="O-">O-</option>
                    <option class="grp" value="A+">A+</option>
                    <option class="grp" value="A-">A-</option>

                </select>
                <label for="password">Password</label>
                <input type="password" name="password">
                <input id="btn" type="submit" name="submit" value="REGISTER">
            </form>
        </div>
        
        
    </div>
    <br>
    <?php
       
         
          if(isset($_POST['submit']))
          {
            $f_name=$_POST['first_name'];
            $l_name=$_POST['last_name'];
            $gender=$_POST['gender'];
            $dob=$_POST['dob'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $city=$_POST['city'];
            $blood_grp=$_POST['blood_grp'];
            $password=$_POST['password'];
           
    
            
            $sql="INSERT INTO register VALUES ('$f_name','$l_name','$gender','$dob','$email','$phone','$city','$blood_grp','$password')";
            
            if(mysqli_query($conn,$sql))
            {
                
                echo "success";
                ?>
                
                <?php
            }
            else{
                
                echo "failed";
            }
            
          }
        
        mysqli_close($conn);
    ?>
</body>
</html>