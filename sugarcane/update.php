<?php
// include 'connect.php';
include '../crop_function.php';
$id=$_GET['update_id'];
$sql="SELECT * FROM `sugarcane` WHERE id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$province=$row['ProvinceNo'];
$muncipality=$row['Muncipality'];
$wardno=$row['WardNo'];
$farmerName=$row['FarmerName'];
$familyMember=$row['FamilyMember'];
$production=$row['Production'];
$farmerRate=$row['FarmerRate'];
$marketRate=$row['MarketRate'];

if(isset($_POST['submit'])){
    $province = $_POST["province"];
    $muncipality = $_POST["muncipality"];
    $wardno = $_POST["wno"];
    $farmerName = $_POST["fname"];
    $familyMember = $_POST["fmember"];
    $production = $_POST["production"];
    $farmerRate = $_POST["frate"];
    $marketRate = $_POST["mrate"];


    
    $sql = "UPDATE `sugercane` SET id=$id, ProvinceNo='$province', Muncipality='$muncipality', WardNo='$wardno', FarmerName='$farmerName', 
    FamilyMember='$familyMember', Production='$production', FarmerRate='$farmerRate', MarketRate='$marketRate'
    WHERE id=$id"; 
    
    $result = mysqli_query($con, $sql);
    if($result){
        header("location: display.php");
        
    }else{
        die(mysqli_error($con));
    }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>crop operation</title>
  </head>
  <body>
    <div class="container my-5">
            <form method="post">
            <div class="mb-3">Province No
                <label class="form-label"></label>
                <input type="text" name="province" class="form-control" placeholder="Enter province No" value=<?php echo $province?>>
            </div>
            <div class="mb-3">Muncipality
                <label class="form-label"></label>
                <input type="text" name="muncipality" class="form-control" placeholder="Enter Muncipality" value=<?php echo $muncipality?>>
            </div>
            <div class="mb-3">Ward No
                <label class="form-label"></label>
                <input type="text" name="wno" class="form-control" placeholder="Enter Ward No" value=<?php echo $wardno?>>
            </div>
            <div class="mb-3">Farmer Name
                <label class="form-label"></label>
                <input type="text" name="fname" class="form-control" placeholder="Enter Farmer Name" value=<?php echo $farmerName?>>
            </div>
            <div class="mb-3">Family Member
                <label class="form-label"></label>
                <input type="text" name="fmember" class="form-control" placeholder="Enter Family Member" value=<?php echo $familyMember?>>
            </div>
            <div class="mb-3">Production 
                <label class="form-label"></label>
                <input type="text" name="production" class="form-control" placeholder="Enter Production" value=<?php echo $production?>>
            </div>
            <div class="mb-3">Farmer Rate
                <label class="form-label"></label>
                <input type="text" name="frate" class="form-control" placeholder="Enter Farmer Rate" value=<?php echo $farmerRate?>>
            </div>
            <div class="mb-3">Market Rate
                <label class="form-label"></label>
                <input type="text" name="mrate" class="form-control" placeholder="Enter Market Rate" value=<?php echo $marketRate?>>
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    

   
  </body>
</html>