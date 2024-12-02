<?php
if (isset($_POST['login'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $con = mysqli_connect('localhost', 'root', '', 'flowershop');
    $sql = "SELECT * FROM admin WHERE username='$username'";
    $result = mysqli_query($con, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        if ( $password == $row['password']) {

            header("location: ./home.php");
            echo "Login successful";
        } else {
            $showError = "Invalid Credentials";
        }
    } else {
        $showError = "Invalid Credentials";
    }
}
?>






<html>

	<head>
		<title>Login form</title>
	<style>
		body{
			margin:0;
			padding: 0;
			background: url(tulip.jpg);
			background-size: cover;
		}
		.box{
			width: 300px;
			padding: 30px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: rgb(255, 255, 255);
			text-align: center;
		}
		.box h1{
			color: black;
			font-weight: 700;
		}
		.box input[type="text"], .box input[type="password"]
		{
			
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 3px  solid blue;
			padding: 14px 10px;
			width: 220px;
			outline: none;
			color: black;
			border-radius: 24px;
		}
		.box input[type="submit"]
		{
			font-weight: 800;
			background: none;
			display: block;
			margin: 20px auto;
			text-align: center;
			border: 3px  solid black;
			padding: 14px 35px;
			outline: none;
			color: black;
			border-radius: 24px;
		}
		
		.box input[type="submit"]:hover{
				background: yellow;
		}
			
	</style>
	
	</head>
	
	<body>
		<form class="box" action="" method="POST">
			<h1>LOGIN</h1>
			<input type="text" name="username" placeholder="Enter Username" id="username">
			<input type="password" name="password" placeholder="Enter your password" id="password">
			<input type="submit" name="login" value="Login">
		</form>
		
	
		
	</body>
	
	


</html>