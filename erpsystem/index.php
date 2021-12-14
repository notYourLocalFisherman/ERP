<!DOCTYPE html>
<html>
<head>
	<title> Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<style>
body {
  background-color: lightblue;
    background-image: url("assets/images/movinglines2.gif");
}
</style>

     <form action="login.php" method="post">
     	<h2>Welcome!</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="uname" placeholder="Username"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" id="password"><br>
			<input type="checkbox" onclick="myFunction()">
            		  <script>
            								 function myFunction() {
              							 var x = document.getElementById("password");
              						 if (x.type === "password") {
                				 x.type = "text";
              			 } else {
                	 x.type = "password";
              	}
            	}
            </script>
     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>
