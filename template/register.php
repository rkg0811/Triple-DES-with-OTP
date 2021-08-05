<!DOCTYPE html>
<html>
<head>
	<title>Register with Us!!!</title>
	<link rel="stylesheet" type="text/css" href="../css/adminlogin.css">
	<link rel="stylesheet" type="text/css" href="../css/register.css">
</head>
<body>
	<img class="bg"src="../images/Graphic-Era.png" alt="background">
	<div class="login-box">
		<form action="/action_page.php">
			<div class="container">
				<h1>Register</h1>
				<p>Please fill in this form to create an account.</p>
                <hr>

                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" id="name" required>

                <label for="username"><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="username" id="username" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

                <label for="psw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

                <button type="submit" class="registerbtn">Register</button>
            </div>
            <div class="container signin">
            	<p>Already have an account? <a href="../template/clientlogin.php">Sign in</a>.</p>
            </div>
        </form>
    </div>
</body>
</html>
