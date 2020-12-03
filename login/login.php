<?php
	session_start();
	include("connection.php");

?>
<!DOCTYPE html>
<?php  if(isset($_POST['b1']))
		{
			    $a=$_POST['t1'];
			    $b=$_POST['t2'];
				$query="select reg_id,name from register where mail='$a' and password='$b'";
				$res=mysqli_query($conn,$query);
				$row=mysqli_fetch_array($res);
				if(isset($row))
				{
					$_SESSION['user'] = $row['reg_id'];
					echo"<script>location.href='../index.php'</script>";
				}
				else
				{
					echo "<script>alert('login failed')</script>";    
				}		
		}					
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v10 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form action="" method="POST">
					<h3>Log In</h3>
				
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" class="form-control" placeholder="Mail" name="t1">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" placeholder="Password" name="t2">
					</div>
					<button name="b1">
						<span>Log In</span>
					</button>
					<div>
						<a class="txt1 text-left" href="reg.php">
							New User..??
						</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 	
						
					</div>
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	


	</body>
</html>