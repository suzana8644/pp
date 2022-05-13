<?php 
	// include 'connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Crud Operation</title>
</head>
<body>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<div class="container">
		<h1>Maize Details</h1>
		<button class="btn btn-primary my-5">
		<a href="add_crop.php" class="text-light">Add Crop Deatails</a></button>
		<button class="btn btn-primary my-5">
		<a href="../admin/choose.html" class="text-light">Go back</a></button>
		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">S.No</th>
		      <th scope="col">Province No</th>
		      <th scope="col">Muncipality</th>
		      <th scope="col">Ward No</th>
		      <th scope="col">Farmer Name</th>
		      <th scope="col">Family Member</th>
		      <th scope="col">Production</th>
		      <th scope="col">Farmer Rate</th>
		      <th scope="col">Market Rate</th>

		    </tr>
		  </thead>

		  <tbody>
		  	<?php
		  	include '../crop_function.php';
		  	// display("apple");
		  	delete('maize');
		      	$sql = "SELECT * FROM `maize`";
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
					      <td>
					      	<button class="btn btn-primary"><a href="update.php?update_id='.$id.'" class="text-light">Update</a></button>
					      	<button class="btn btn-danger"><a href="delete.php?delete_id='.$id.'" class="text-light">Delete</a></button>
					      </td>
						</tr>';
		      		}
		      	}
		      
		      ?>
		      
		    
		  </tbody>
		</table>
	</div>
</body>
</html>