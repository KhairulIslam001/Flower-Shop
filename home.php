<html>

	<head>
		<title>Login form</title>
	<style>
		body{
			margin:0;
			padding: 0;
			background: url(rose2.jpg);
			background-size: cover;
		}
		.box{
			width: 500px;
			height: 450px;
			border:10px solid #FEF9E7 ;
			padding: 30px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: #F9E79F ;
			text-align: center;
		}
		.box h1{
			color: black;
			font-weight: 700;
		}
		
		.box ul{list-style:none;}
		.box ul li{}
		.box ul li a{
			border: 3px  solid blue;
			width: 320px;
			border-radius: 10px;
			text-decoration:none;
			margin: 10px;
			color:red;
			padding: 10px 25px;
			}
			
		.box ul li a:hover{
			color:yellow;
			background:red;}
		.search-option {
			text-align: right;
			margin-right: 20px;
    }
    
    .search-option form {
      float: right;
    }
    
    .search-option input[type="text"] {
      float: top;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    
    .search-option button {
      float: top;
      background-color: #fff;
      color: #328f8a;
      padding: 8px 12px;
      border: none;
      border-radius: 4px;
      margin-left: 5px;
    }
    
    .search-option button:hover {
      background-color: yellow;
      color: red;
    }
			
	</style>
	
	</head>
	
	<body>
	
	
		<div class="search-option">
		
		  <form method="get" action="search.php">
			<input type="text" name="search" placeholder="Purchase ID">
			<button type="submit" class="button">Search</button>
		  </form>
		  
		</div>
		
		
		<div class="box">
		
		<br><br><h1>Flower Shop Management System</h1><br>
				<ul>
					<li><a href="http://localhost/project/home.php#">Home</a></li><br><br>
					<li><a href="http://localhost/project/view.php">View</a></li><br><br>
					<li><a href="http://localhost/project/insert.php">Insert</a></li><br><br>
					<li><a href="http://localhost/project/update1.php">Update</a></li><br><br>
					<li><a href="http://localhost/project/delete1.php">Delete</a></li><br><br>
					
				</ul>
				
		</div>
		
		
	
		
	</body>
	
	


</html>