<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crop";

$con = new mysqli($servername, $username, $password, $dbname);

if(!$con){
	die(mysqli_error($con));
}

//function to display crops information
// function display($fruit){
// 	global $con;
// 		      	$sql = "SELECT * FROM $fruit";
// 		      	$result = mysqli_query($con, $sql);
// 		      	if($result){
// 		      		while($row = mysqli_fetch_assoc($result)){
// 		      			$id = $row['id'];
// 		      			$province=$row['ProvinceNo'];
// 		      			$muncipality=$row['Muncipality'];
// 		      			$wardno=$row['WardNo'];
// 		      			$farmerName=$row['FarmerName'];
// 		      			$familyMember=$row['FamilyMember'];
// 		      			$production=$row['Production'];
// 		      			$farmerRate=$row['FarmerRate'];
// 		      			$marketRate=$row['MarketRate'];
// 		      			echo '<tr>
// 					      <th scope="row">'.$id.'</th>
// 					      <td>'.$province.'</td>
// 					      <td>'.$muncipality.'</td>
// 					      <td>'.$wardno.'</td>
// 					      <td>'.$farmerName.'</td>
// 					      <td>'.$familyMember.'</td>
// 					      <td>'.$production.'</td>
// 					      <td>'.$farmerRate.'</td>
// 					      <td>'.$marketRate.'</td>
// 					      <td>
// 					      	<button class="btn btn-primary"><a href="update.php?update_id='.$id.'" class="text-light">Update</a></button>
// 					      	<button class="btn btn-danger"><a href="delete.php?delete_id='.$id.'" class="text-light">Delete</a></button>
// 					      </td>
// 						</tr>';
// 		      		}
// 		      	}
// }

//function to update crops
function update($fruit){
	global $con;
	$id=$_GET['update_id'];
	$sql="SELECT * FROM $fruit WHERE id=$id";
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


	    //$sql = "UPDATE `apple` SET `id`='$id', `ProvinceNo`='$province', `Muncipality`='$province', `WardNo`='$wardno', `FarmerName`='$farmerName', 
	    //`FamilyMember`='$familyMember', `Production`='$production', `FarmerRate`='$farmerRate', `MarketRate`='$marketRate'"; 
	    $sql = "UPDATE $fruit SET id=$id, ProvinceNo='$province', Muncipality='$muncipality', WardNo='$wardno', FarmerName='$farmerName', 
	    FamilyMember='$familyMember', Production='$production', FarmerRate='$farmerRate', MarketRate='$marketRate'
	    WHERE id=$id"; 
	    
	    $result = mysqli_query($con, $sql);
	    if($result){
	        header("location: display.php");
	        
	    }else{
	        die(mysqli_error($con));
	    }
	}
}

//function to delete a table from database
function delete($fruit){
	global $con;
	if (isset($_GET['delete_id'])){
		$id=$_GET['delete_id'];

		$sql = "DELETE FROM $fruit WHERE id=$id";
		$result = mysqli_query($con,$sql);
		if($result){
			header("location: display.php");
		}else{
			die(mysqli_error($con));
		}
	}
}

//function to add info about farmer/crops
function add_info($fruit){
	global $con;
	if(isset($_POST['submit'])){
	    $province = $_POST["province"];
	    $muncipality = $_POST["muncipality"];
	    $wardno = $_POST["wno"];
	    $farmerName = $_POST["fname"];
	    $familyMember = $_POST["fmember"];
	    $production = $_POST["production"];
	    $farmerRate = $_POST["frate"];
	    $marketRate = $_POST["mrate"];


	    $sql = "INSERT INTO $fruit (`ProvinceNo`, `Muncipality`, `WardNo`, `FarmerName`, `FamilyMember`, `Production`, `FarmerRate`, `MarketRate`) 
	    VALUES ('$province','$muncipality','$wardno','$farmerName','$familyMember','$production','$farmerRate','$marketRate')";
	    $result = mysqli_query($con, $sql);
	    if($result){
	        header('location: display.php');
	    }else{
	        die(mysqli_error($con));
	    }
	}
}