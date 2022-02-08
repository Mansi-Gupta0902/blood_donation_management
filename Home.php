<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home.css">
    <title>Document</title>
    <script>window.onunload = function(){ window.scrollTo(0,300); }</script>
</head>
<body>
    <img style="opacity:1;" class="back" src="https://cdn.wallpapersafari.com/97/23/4iJcIv.jpg" alt="">
    
    
    
    <div class="container">
        <nav>
            
            <ul class="navbar" style="background-color: #F4364C;">
            <li><a href="/dbms/Home.php">Home</a></li>
                <li><a href="/dbms/Donor.php">Search Donors</a></li>
               
                <li><a href="/dbms/Blood_Banks.php">Blood Banks</a></li>
                <li><a href="/dbms/Active_Camps.php">Active camps</a></li>
                <li><a href="/dbms/Login.php">Admin Login</a></li>
                <li><a href="/dbms/Register.php">Donor Registration</a></li>
                
            </ul>
        </nav>
    </div>
    <br>
    <!-- <img class="blood" src="https://healthmatters.nyp.org/wp-content/uploads/2020/01/Heart-Article-Hero-1200x500.gif" alt=""> -->
    <img class="blood" src="http://www.savelifeindia.org/site/slider/images/slide1.jpg" alt="">


    
    <!-- <h1 class="heading">DONATE<br> BLOOD, <br> SAVE<br> LIVES</h1> -->
    <marquee behavior="" direction="" scrollamount="12">You are not useless, know your worth by donating blood!</marquee>
    <div class="search_blood_grp">
        <h1>Enter your blood group to check compatibility</h1>
        <br>
        <form action="" method="POST">
        <select name="blood_grps" id="blood_grp">

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
                <input class="btn" name="submit" type="submit" value="CHECK" >
                </form>
        
            
    </div>

    

    
    <?php
        include("Connection.php");
        
       
        if(isset($_POST['submit']))
        {
            $get_grp=$_POST['blood_grps'];
           
        
        	
        $sql="select * from eligibility where `blood_type`= '$get_grp'";
        $query=mysqli_query($conn,$sql);
        $rowcount=mysqli_num_rows($query);
            
        if($rowcount>0)
        {
            while($row = mysqli_fetch_assoc($query))
            {
                ?>
                <table id="display_table" >
                <tr>
                <th>Blood Type</th>
                <th>Donate To</th>
                <th>Recieve From</th>
                </tr>

                <tr>
                    <td><?php echo $row["blood_type"]?></td>
                    <td><?php echo $row["donate_to"]?></td>
                    <td><?php echo $row["recieve_from"]?></td>
                </tr>

                </table>
            
                <?php
            }
        }
        else
        {
            ?>
            <h2 id="error">Please select a blood group</h2>
            <?php
        }
    }

    ?>

    

    <script>
        function table()
        {
             
            
            // document.addEventListener("click", function(evnt){
            //     document.getElementById("display_table").style.display="block";
});
        }
    </script>

    <?php mysqli_close($conn);?>
</body>
</html>