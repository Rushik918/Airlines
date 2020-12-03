<?php
	include("connection.php");

?>
<!DOCTYPE html>
<html>
<script>
function check()
		 {
			if (f11.name.value == "" || f11.name.value == null)
 			{
   				alert("Name is mandatory");
   				return false;
 			}
 			else if(f11.number.value == "" || f11.number.value == null)
    		{
      			alert("number  is mandatory");
     			 return false;
    		}
			else if(f11.email.value == "" || f11.email.value == null)
    		{
      			alert("Email is mandatory");
     			 return false;
    		}
 			else if(f11.password.value == "" || f11.password.value == null)
    		{
      			alert("Password is mandatory");
     			 return false;
    		}
    		else if(f11.c_password.value == "" || f11.c_password.value == null)
    		{
      			alert("Confirm Password  is mandatory");
     			 return false;
    		}
   			else
   			{
     			 return true;
   			}
		  }
 function check_Alpha()
  		{
    		var regex = /^[a-zA-Z_ ]*$/;
    		if(regex.test(f11.name.value))
    		{
    			return true;
    		}
    		else
    		{
    			alert("Name must be in alphabets only");
   				f11.name.value="";
   				return false;
    		}
    	}
function check_phone()
 		{
 			var regex = /^[0-9]+$/;
    		if(regex.test(f11.number.value)==false)
    		{
    			alert("This is not a valid phone number");
    			f11.number.value="";
    			return false;
   			}
   			if((f11.number.value).length<10)
    		{
    			alert("The lenght of phone number must be  ten digits");
   				f11.number.value="";
   				return false;
   			 }
 			
			if((f11.number.value).length>10)
    		{
    			alert("The lenght of phone number must be  ten digits");
   				f11.number.value="";
   				return false;
   			 }
 			return true;
		 }
 function check_email()
 		{
   			var regex = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
    		if(regex.test(f11.email.value))
    		{
   			   return true;
   			}
    		else
    		{
      			alert("This is not a valid email address");
      			f11.email.value="";
      			return false;
   			}
 		}
function check_pl()
 		{
 			if((f11.password.value).length<8)
    		{
    			alert("The lenght of password must be  eight digits");
   				f11.password.value="";
   				return false;
   			 }
			return true;
 		}
function check_pas()
 		{
 			var password=f11.password.value;
 			var conform=f11.c_password.value;
 			if(password!=conform)
 			{
 				alert("password does not match..");
 				f11.c_password.value="";
 				return false;
 			}
 			return true;
 		}  	
</script>
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
				<form action=""  name="f11" onsubmit="return check()" method="POST">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" name="name" class="form-control" placeholder="Name" onchange="return check_Alpha()">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-phone-handset"></span>
						<input type="text"  name="number" class="form-control" placeholder="Phone Number" onchange="return check_phone()">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-envelope"></span>
						<input type="text" name="email"  class="form-control" placeholder="Mail" onchange="return check_email()">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" name="password"  class="form-control" placeholder="Password" onchange="return check_pl()">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password"  name="c_password" class="form-control" placeholder="Confirm Password" onchange="return check_pas()">
					</div>
					<button  name="btn1">
						<span>Register</span>
					</button>
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
				<?php
				if(isset($_POST['btn1']))
				{
					$name=$_POST['name'];
					$number=$_POST['number'];				
					$email=$_POST['email'];
					$password=$_POST['password'];
					$c_password=$_POST['c_password'];
					$query="insert into register(name,p_number,mail,password,c_password) values('$name','$number','$email','$password','$c_password')"; 
					mysqli_query($conn,$query);
					$total=mysqli_affected_rows($conn);
					if($total==1)
					{
						echo "Record insert successfully";
						echo"<script>location.href='login.php'</script>";
					}								
					else
					{
						echo "Record not insert successfully";
					}

				}
		?>

	</body>
</html>