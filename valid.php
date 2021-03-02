<html>
<head>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.error {
			color: red;
		}
		body {
					background-image: url('https://i0.wp.com/www.justinecelina.com/wp-content/uploads/2020/08/justinecelina_digital-blooms_august-2020_free-desktop-wallpaper-scaled.jpg?resize=1080%2C720&ssl=1');

		}
        		.input {
			padding-top:50px;
		}
		.form-control1{
			margin-left:40px;
		}
		.form-control2{
			margin-left:16px;
		}
				
	</style>
	</head>
		<body>
			<?php
			$name=$pass=$gender="";
			$nameErr=$passErr=$genderErr="";
			if($_SERVER["REQUEST_METHOD"]=="POST")
			{
				if(empty($_POST["name"]))
				{
					$nameErr="Name is required";
				}
				else{
					if(strlen($_POST["name"])<5){
						$nameErr="Length should not be less than 5";
					}	
					else{
						$name=$_POST["name"];
					}
				}
				if(empty($_POST["pass"]))
				{
					$passErr="Password is required";
				}
				else{
					if(strlen($_POST["pass"])<5){
						$passErr="Length should not be less than 5";
					}
					else{
						$pass=$_POST["pass"];
					}
				}
				if(empty($_POST["gender"]))
				{
					$genderErr="Gender is required";
				}else{
					$gender=$_POST["gender"];
				}
			}
			?>
			<?php

			echo $name;
			echo "<br>";
			echo $pass;
			echo "<br>";
			echo $gender;
			?>
			<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
					<nav class="navbar navbar-expand  bg-dark">
					<div class="container-fluid">
					<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="#">AboutUs</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
					<li class="nav-item"><a class="nav-link" href="#">ContactUs</a></li>
					</ul>
					<ul class="navbar-nav justify-content-end">
					<li class="nav-item"><a class="nav-link" href="#"><button type="button" class="btn btn-info round=pill">SignUp</button></a></li>
					<li class="nav-item"><a class="nav-link" href="#"><button type="button" class="btn btn-info round=pill">Login</button></a></li>
					</ul>
					</div>
					</nav>
				<div class="input">
                    <label for="usr">Name:</label>
					<input type="text" class="form-control1" name="name" placeholder="Enter Name"/>
					<span class="error">
						* <?php echo $nameErr;?>
					</span>
					<br />
                    <label for="password">Password:</label>
					<input type="password" class="form-control2" name="pass" placeholder="Enter Password" />
					<span class="error">
						* <?php echo $passErr;?>
					</span>
					<br />
                    <label for="gender">Gender:</label>
					<input type="radio" name="gender" value="female" />Female
					<input type="radio" name="gender" value="Male" />Male
					<span class="error">
						* <?php echo $genderErr;?>
					</span>
					<br />
					<input type="submit" value="Submit" />
					</div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

		</body>
</html>