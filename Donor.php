<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="onor.css">
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
        <div class="search_donor">
           
            <form action="" method="POST">
                <label for="city">Select City</label>
                <input type="text" name="city" placeholder="Search by City">
                <label for="blood_grp">Select Blood Group</label>
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
                <input type="submit" name="submit_donor" id="btn">
            </form>
        </div>
        
    </div>
    <br>
    <?php
       include("Connection.php");

       $total="SELECT COUNT(email) as c FROM register";
       $res=mysqli_query($conn,$total);
       
       while($row=mysqli_fetch_assoc($res))
       {
            ?>
            <h2 style="position:absolute;top:50px;left:30px;color:#000477;">Active Donors</h2>
            <h2 id="count" style="position:absolute;top:80px;left:30px;background-color:rgb(255, 80, 80);width:7%;text-align:center;padding-top:30px;padding-bottom:30px;border-radius:3999px;font-size:40px;"><?php echo $row["c"]?></h2>
            <?php
       }

        if(isset($_POST['submit_donor']))
        {
            $city=$_POST['city'];
            $blood=$_POST['blood_grp'];
            $s="SELECT * FROM register WHERE city='$city' and blood_grp='$blood'";
            $q=mysqli_query($conn,$s);
            $r=mysqli_num_rows($q);

            if($r>0)
            {
                ?>
            <table id="display_table" >
                <tr>
                
                <th>First name</th>
                <th>Last name</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Email Id</th>
                <th>Contact No.</th>
                <th>City</th>
                <th>Blood Group</th>
                
                
                </tr>
        
            <?php
                while($row = mysqli_fetch_assoc($q))
                {
                    ?>
                

                <tr>
                    <td class="camp_rows"><?php echo $row["first_name"]?></td>
                    <td class="camp_rows"><?php echo $row["last_name"]?></td>
                    <td class="camp_rows"><?php echo $row["gender"]?></td>
                    <td class="camp_rows"><?php echo $row["dob"]?></td>
                    <td class="camp_rows"><?php echo $row["email"]?></td>
                    <td class="camp_rows"><?php echo $row["phone"]?></td>
                    <td class="camp_rows"><?php echo $row["city"]?></td>
                    <td class="camp_rows"><?php echo $row["blood_grp"]?></td>
                </tr>

                
            
                <?php
                }
                ?>
            <table>
                <?php
            }
            else
            {
                ?>
                <h2 id="error">Sorry! No active donors available in your area</h2>
                <?php
            }
        }
        else
        {
            ?>
            <!-- <h2 id="error">Nothing selected!</h2> -->
            <?php
        }
        
    ?>
    
</body>
</html>