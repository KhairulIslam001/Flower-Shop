<?php

	$uid= $_GET['updateid'];
	$con= mysqli_connect('localhost', 'root', '', 'flowershop');
	$query= mysqli_query($con, "select * from pdetails where id='$uid'");
	$row= mysqli_fetch_assoc($query);
	
	$p_id=  $row['pid'];
	$s_id=  $row['sid'];
	$i_name=  $row['inames'];
	$c_name=  $row['cname'];
	$p_address=  $row['puradd'];
	$p_number=  $row['ppnum'];
	$no_items=  $row['nuitems'];
	$price=  $row['pprice'];
	$p_date=  $row['purdate'];
	
	
	if(isset($_POST['update'])){
		$purchaseid=$_POST['p_id1'];
		$shopid=$_POST['s_id1'];
		$itemname=$_POST['i_name1'];
		$cusname=$_POST['c_name1'];
		$paddress=$_POST['p_address1'];
		$pnumber=$_POST['p_number1'];
		$noitems=$_POST['no_items1'];
		$price1=$_POST['price1'];
		$pdate=$_POST['p_date1'];
		$con= mysqli_connect('localhost', 'root', '', 'flowershop');
		mysqli_query($con, "update pdetails set id='$uid', pid='$purchaseid', sid='$shopid',inames='$itemname', cname='$cusname',puradd='$paddress', ppnum='$pnumber',nuitems='$noitems', pprice='$price1', purdate='$pdate'   where id='$uid'");
		if($query){
			echo "Updated Successfully";
		}
		else{
			echo "Failed";
		}
	}
	
	
?>



<html>
	<head>
		<title>Update Data</title>
		<style>
		body{
			margin:0;
			padding: 0;
			background: url(rose2.jpg);
			background-size: cover;
		}
		.main{
			width: 500px;
			height: 538px;
			border:10px solid #FEF9E7 ;
			padding: 30px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: #F9E79F ;
			text-align: center;
		}
		.main h1{
			color: black;
			font-weight: 700;
		}
		.main input[type="text"]
		{
			
			background: none;
			display: block;
			margin: 10px auto;
			text-align: center;
			border: 3px  solid blue;
			padding: 5px 5px;
			width: 220px;
			outline: none;
			color: black;
		}
		.main input[type="submit"]
		{
			font-weight: 500;
			border-radius: 4px;
			background: none;
			margin: 5px auto;
			text-align: center;
			font-weight: 800;
			
		}
		
		.main input[type="submit"]:hover{
				background: yellow;
		}
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
		<h1>Update Purchase Data</h1>
		<form method="post" action="">
		<input type="text" name="p_id1" value="<?php echo $p_id ?>">
		<input type="text" name="s_id1" value="<?php echo $s_id ?>">
		<input type="text" name="i_name1" value="<?php echo $i_name ?>">
		<input type="text" name="c_name1" value="<?php echo $c_name ?>">
		<input type="text" name="p_address1" value="<?php echo $p_address ?>">
		<input type="text" name="p_number1" value="<?php echo $p_number ?>">
		<input type="text" name="no_items1" value="<?php echo $no_items ?>">
		<input type="text" name="price1" value="<?php echo $price ?>">
		<input type="text" name="p_date1" value="<?php echo $p_date ?>">
		<input type="submit" name="update" value="Update">
		</form>
		<a href="http://localhost/project/view.php"><input class="info " type="button" name="view" value="View"></a>
		</div>
	</body>
</html>