<html>
<head>
  <title>Search Results</title>
  <style>
		body{
			margin:0;
			padding: 0;
			background: url(rose2.jpg);
			background-size: cover;
		}
		.container{
			width: 800px;
			height: 350px;
			border:10px solid #FEF9E7 ;
			padding: 30px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: #F9E79F ;
			text-align: center;
		}
		.container h1{
			color: black;
			font-weight: 700;
		}
		table{
			border-collapse:collapse;
			margin:20px 10px;
		}
		td,th{
			border:4px solid #E59866 ;
			padding:5px;
		}
		
	
		.container input[type="button"]
		{
			font-weight: 500;
			background: none;
			margin: 5px auto;
			text-align: center;
			
		}
		
		.container input[type="button"]:hover{
				background: yellow;
		}
  </style>
</head>
<body>
  <div class="container">
    <h2>Search Results</h2>
      <table>
			<tr>
				<th>Serial No</th>
				<th>Purchase ID</th>
				<th>Shop ID</th>
				<th>Item Name</th>
				<th>Customer Name</th>
				<th>Purchase Address</th>
				<th>Phone Number</th>
				<th>No of Items</th>
				<th>Price</th>
				<th>Purchase Date</th>
				<th>Delete</th>
				<th>Update</th>
			</tr>
			
			<?php
			if(isset($_GET['search'])){
			  $search = $_GET['search'];
			  
			  $con = mysqli_connect('localhost','root','','flowershop');
			  
			  $query = "SELECT * FROM pdetails WHERE pid='$search'";
			  
			  $result = mysqli_query($con, $query);
			}
      
			while($row = mysqli_fetch_assoc($result)): ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['pid']; ?></td>
				<td><?php echo $row['sid']; ?></td>
				<td><?php echo $row['inames']; ?></td>
				<td><?php echo $row['cname']; ?></td>
				<td><?php echo $row['puradd']; ?></td>
				<td><?php echo $row['ppnum']; ?></td>
				<td><?php echo $row['nuitems']; ?></td>
				<td><?php echo $row['pprice']; ?></td>
				<td><?php echo $row['purdate']; ?></td>
				<td><a href="delete.php?deleteid=<?php echo $row['id']; ?>">Delete</a></td>
				<td><a href="update.php?updateid=<?php echo $row['id']; ?>">Update</a></td>
			</tr>
			
			<?php endwhile; ?>
	
		</table>
		<a href="http://localhost/project/view.php"><input class="info " type="button" name="view" value="View"></a>
  </div>
 
</body>
</html>