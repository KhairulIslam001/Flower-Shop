<?php
	if(isset($_GET['deleteid'])){
		$did= $_GET['deleteid'];
		
		
		$con= mysqli_connect('localhost', 'root', '', 'flowershop');
		$query= mysqli_query($con, "delete from pdetails where id='$did'");
			if($query){
				echo "Purchase Data Deleted Successfully";
			}
			else{
				echo"Data has not been deleted";
			}
	}

?>

<html>

	<head>
		<title>Deleted Page</title>
		<style>
		.main input[type="button"]
		{
			font-weight: 500;
			border-radius: 4px;
			background: none;
			margin: 5px auto;
			text-align: center;
			font-weight: 800;
		}
		
		.main input[type="button"]:hover{
				background: yellow;
		}
		</style>
	</head>
	<body>
		<div class="main">
		<form method="post" action="">
			<a href="http://localhost/project/view.php"><input class="info " type="button" name="view" value="View"></a>
		</form>
		</div>
	</body>
</html>