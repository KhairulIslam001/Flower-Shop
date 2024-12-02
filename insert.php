<?php 
	if(isset($_POST['register'])){
		$purchaseid=$_POST['p_id'];
		$shopid=$_POST['s_id'];
		$itemname=$_POST['i_name'];
		$cusname=$_POST['c_name'];
		$paddress=$_POST['p_address'];
		$pnumber=$_POST['p_number'];
		$noitems=$_POST['no_items'];
		$price1=$_POST['price'];
		$pdate=$_POST['p_date'];
		
		$error=array();
		
		if($purchaseid==null){
			$error['purchaseid']="Purchase ID cannot be Empty";
		}
		if($shopid==null){
			$error['shopid']="Shop ID cannot be Empty";
		}
		if($itemname==null){
			$error['itemname']="Item Name cannot be Empty";
		}
		if($cusname==null){
			$error['cusname']="Customer Name cannot be Empty";
		}
		if($paddress==null){
			$error['paddress']="Purchase Address cannot be Empty";
		}
		if($pnumber==null){
			$error['pnumber']="Purchase Phone Number cannot be Empty";
		}
		if($noitems==null){
			$error['noitems']="Number of items cannot be Empty";
		}
		if($price1==null){
			$error['price1']="Price cannot be Empty";
		}
		if($pdate==null){
			$error['pdate']="Purchase Date cannot be Empty";
		}
		
		if(count($error)==0){
			$con= mysqli_connect('localhost', 'root', '', 'flowershop');
			$query= mysqli_query($con, "insert into pdetails(pid, sid, inames, cname, puradd, ppnum,nuitems,pprice,purdate) values('$purchaseid', '$shopid', '$itemname','$cusname', '$paddress', '$pnumber', '$noitems', '$price1', '$pdate')");
			
			if($query){
				
				echo "Data Inserted Successfully";
			}
			else{
				echo"Data Insertion Failed";
			}
		}
	}
	


?>




<html>

	<head>
		<title>Insert Page</title>
		<style>
		body{
			margin:0;
			padding: 0;
			background: url(rose2.jpg);
			background-size: cover;
		}
		.main{
			width: 500px;
			height: 48
			0px;
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
		<h1>Insert Purchase Data</h1>
		<form method="post" action="">
			<input type="text" name="p_id" placeholder="Enter Purchase ID">
			<?php
				if(isset($error['purchaseid'])){
					echo $error['purchaseid'];
				}
			?>
			<input type="text" name="s_id" placeholder="Enter Shop ID">
			<?php
				if(isset($error['shopid'])){
					echo $error['shopid']."<br>";
				}
			?>
			<input type="text" name="i_name" placeholder="Enter Item Name">
			<?php
				if(isset($error['itemname'])){
					echo $error['itemname']."<br>";
				}
			?>
			<input type="text" name="c_name" placeholder="Enter Customer Name">
			<?php
				if(isset($error['cusname'])){
					echo $error['cusname']."<br>";
				}
			?>
			<input type="text" name="p_address" placeholder="Enter Purchase Address">
			<?php
				if(isset($error['paddress'])){
					echo $error['paddress']."<br>";
				}
			?>
			<input type="text" name="p_number" placeholder="Enter Phone Number">
			<?php
				if(isset($error['pnumber'])){
					echo $error['pnumber']."<br>";
				}
			?>
			<input type="text" name="no_items" placeholder="Enter No of Items">
			<?php
				if(isset($error['noitems'])){
					echo $error['noitems']."<br>";
				}
			?>
			<input type="text" name="price" placeholder="Enter Price">
			<?php
				if(isset($error['price1'])){
					echo $error['price1']."<br>";
				}
			?>
			<input type="text" name="p_date" placeholder="Enter Purchase Date">
			<?php
				if(isset($error['pdate'])){
					echo $error['pdate']."<br>";
				}
			?>
			<input type="submit" name="register" value="Submit">
			<a href="http://localhost/project/view.php"><input class="info" type="button" name="view" value="View"></a>
		</form>
		</div>
	</body>
</html>