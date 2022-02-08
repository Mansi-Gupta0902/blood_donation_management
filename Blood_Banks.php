<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Active_Camps.css">
    <title>Document</title>
</head>
<body>
<img style="opacity:1;" class="back" src="https://cdn.wallpapersafari.com/97/23/4iJcIv.jpg" alt="">
    
    
    <div class="container">
        <nav>
            
            <ul class="navbar"  style="background-color: #F4364C">
            <li><a href="/dbms/Home.php">Home</a></li>
                <li><a href="/dbms/Donor.php">Search Donors</a></li>
                
                <li><a href="/dbms/Blood_Banks.php">Blood Banks</a></li>
                <li><a href="/dbms/Active_Camps.php">Active camps</a></li>
                <li><a href="/dbms/Login.php">Admin Login</a></li>
                <li><a href="/dbms/Register.php">Donor Registration</a></li>
                
            </ul>
        </nav>
        <div class="login_form">
            <h2 style="text-align:center;margin-top:20px;">Search Blood Banks by city</h2>
            <form action="" method="post">
                <label for="city">City</label>
                <br>
                <input type="text" name="city" id="city">
                <br>
                
                <input type="submit" name="submit" id="btn" value="CHECK">

            </form>
        </div>
        
    </div>
    <br>
    <?php
       include("Connection.php");
       $sql="SELECT * FROM blood_bank";
        
        $query=mysqli_query($conn,$sql);
       $rowcount=mysqli_num_rows($query);
            
        if($rowcount>0)
        {
            ?>
            <table id="display_table" >
                <tr>
                
                <th>Bank Name</th>
                <th>City</th>
                <th>Address</th>
                <th>Email Id</th>
                <th>Contact No.</th>
               
                <th>Blood groups available</th>
                </tr>
        
            <?php
            while($row = mysqli_fetch_assoc($query))
            {
                ?>
                

                <tr>
                    <td class="camp_rows"><?php echo $row["name"]?></td>
                   
                    <td class="camp_rows"><?php echo $row["city"]?></td>
                    <td class="camp_rows"><?php echo $row["address"]?></td>
                    <td class="camp_rows"><?php echo $row["email"]?></td>
                    <td class="camp_rows"><?php echo $row["phone"]?></td>
                   
                    <td class="camp_rows"><?php echo $row["available"]?></td>
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
            <h2 id="error">Please select a city</h2>
            <?php
        }

        if(isset($_POST['submit']))
        {
            $city=$_POST['city'];
            $s="SELECT * FROM blood_bank WHERE city='$city'";
            $q=mysqli_query($conn,$s);
            $r=mysqli_num_rows($q);

            if($r>0)
            {
                ?>
                <script>
                    document.getElementById("display_table").style.display="none";
                </script>
                
            <table id="display_table" >
                <tr>
              
                <th>Bank Name</th>
                <th>City</th>
                <th>Address</th>
                <th>Email Id</th>
                <th>Contact No.</th>
               
                <th>Blood groups available</th>
                </tr>
        
            <?php

            while($row = mysqli_fetch_assoc($q))
            {
                ?>
                

                <tr>
                <td class="camp_rows"><?php echo $row["name"]?></td>
                   
                   <td class="camp_rows"><?php echo $row["city"]?></td>
                   <td class="camp_rows"><?php echo $row["address"]?></td>
                   <td class="camp_rows"><?php echo $row["email"]?></td>
                   <td class="camp_rows"><?php echo $row["phone"]?></td>
                  
                   <td class="camp_rows">
                       <?php echo $row["A+"]?>
                       <?php echo $row["A-"]?>
                       <?php echo $row["B+"]?>
                       <?php echo $row["B+"]?>
                       <?php echo $row["AB+"]?>
                       <?php echo $row["AB-"]?>
                       <?php echo $row["O+"]?>
                       <?php echo $row["O-"]?>
                   </td>

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
            <script>
                document.getElementById("display_table").style.display="none";
            </script>
            <h2 id="error">No blood banks found!</h2>
            <?php
            }
        }
        else
        {
            ?>
            <script>
                document.getElementById("display_table").style.display="none";
            </script>
            <?php
        }
    ?>
</body>
</html>