<?php
// include 'connect.php';
include '../crop_function.php';
add_info("potato");
// if(isset($_POST['submit'])){
//     $province = $_POST["province"];
//     $muncipality = $_POST["muncipality"];
//     $wardno = $_POST["wno"];
//     $farmerName = $_POST["fname"];
//     $familyMember = $_POST["fmember"];
//     $production = $_POST["production"];
//     $farmerRate = $_POST["frate"];
//     $marketRate = $_POST["mrate"];


//     $sql = "INSERT INTO `apple`(`ProvinceNo`, `Muncipality`, `WardNo`, `FarmerName`, `FamilyMember`, `Production`, `FarmerRate`, `MarketRate`) 
//     VALUES ('$province','$muncipality','$wardno','$farmerName','$familyMember','$production','$farmerRate','$marketRate')";
//     $result = mysqli_query($con, $sql);
//     if($result){
//         header('location: display.php');
//     }else{
//         die(mysqli_error($con));
//     }
// }

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
                <input type="text" name="province" class="form-control" placeholder="Enter province No">
            </div>
            <div class="mb-3">Muncipality
                <label class="form-label"></label>
                <input type="text" name="muncipality" class="form-control" placeholder="Enter Muncipality">
            </div>
            <div class="mb-3">Ward No
                <label class="form-label"></label>
                <input type="text" name="wno" class="form-control" placeholder="Enter Ward No">
            </div>
            <div class="mb-3">Farmer Name
                <label class="form-label"></label>
                <input type="text" name="fname" class="form-control" placeholder="Enter Farmer Name">
            </div>
            <div class="mb-3">Family Member
                <label class="form-label"></label>
                <input type="text" name="fmember" class="form-control" placeholder="Enter Family Member">
            </div>
            <div class="mb-3">Production 
                <label class="form-label"></label>
                <input type="text" name="production" class="form-control" placeholder="Enter Production">
            </div>
            <div class="mb-3">Farmer Rate
                <label class="form-label"></label>
                <input type="text" name="frate" class="form-control" placeholder="Enter Farmer Rate">
            </div>
            <div class="mb-3">Market Rate
                <label class="form-label"></label>
                <input type="text" name="mrate" class="form-control" placeholder="Enter Market Rate">
            </div>
            
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-primary" ><a class="text-light" href="display.php">Skip</a></button>

        </form>
    </div>

    

   
  </body>
</html>