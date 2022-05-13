<?php
include('../crop_function.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture</title>
    <link rel="stylesheet " href="../style.css">
</head>
<body>
    
    <div class="full-page">
        <div class="navbar">
            
            <nav>
                <img src="../images/logo.png"width="200" height="70">
                <ul id='MenuItems'>
                    <li><a href='../dashboard.html'>Home</a></li>
                    <li><a href='../dashboard.html'>Dashboard</a></li>
                    <li><a href='../farmer.html'>Farmer Detail</a></li>
                    <li><a href='../crop.html'>Crop Details</a></li>

                
                    
            </nav>

            <table class="content-table">
                 <thead>
                <tr>
                <th scope="col">S.No</th>
                <th>Province No</th>
                <th>Municipality</th>
                <th>Ward No</th>
                <th>Farmer Name</th>
                <th>Family Member</th>
                <th>Production</th>
                <th>Farmer Rate</th>
                <th>Market Rate</th>
                </tr>
              </thead>
              <?php
            
                $sql = "SELECT * FROM `rice`";
                $result = mysqli_query($con, $sql);
                if($result){
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $province=$row['ProvinceNo'];
                        $muncipality=$row['Muncipality'];
                        $wardno=$row['WardNo'];
                        $farmerName=$row['FarmerName'];
                        $familyMember=$row['FamilyMember'];
                        $production=$row['Production'];
                        $farmerRate=$row['FarmerRate'];
                        $marketRate=$row['MarketRate'];
                        echo '<tr>
                          <th scope="row">'.$id.'</th>
                          <td>'.$province.'</td>
                          <td>'.$muncipality.'</td>
                          <td>'.$wardno.'</td>
                          <td>'.$farmerName.'</td>
                          <td>'.$familyMember.'</td>
                          <td>'.$production.'</td>
                          <td>'.$farmerRate.'</td>
                          <td>'.$marketRate.'</td>
                        </tr>';
                    }
                }
              
              ?>
            </table>
            
        
      
        <footer  class="footer">
            <div class="inner-footer">
                <div class="social-links">
                    <ul>
                        <li class="social-links"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="social-links"><a href="#"><i class="fab fa-facebook"></i></a></li>
                    </ul>
                </div>
            </div>
                 <div class="outer-footer">
                     Copyright &copy; AIMS Pro. All Rights Reserved.
                 </div>
        </footer>
    </div>
        
        
    
</body>

</html>