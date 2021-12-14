<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<style>
body {
  background-color: lightblue;
    background-image: url("assets/images/movinglines2.gif");
}
</style>

     <form action="signup-check.php" method="post">
     	<h2>Sign Up</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text"
                      name="name"
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      name="name"
                      placeholder="Name"><br>
          <?php }?>

          <label>Username</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text"
                      name="uname"
                      placeholder="Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text"
                      name="uname"
                      placeholder="Username"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" id="password"><br>

          <label>Re-enter your password</label>
          <input type="password"
                 name="re_password"
                 placeholder="Password" id="re_password">
     <input type="checkbox" onclick="myFunction()" id="checkbox-1">
           		  <script>
           								 function myFunction() {
             							 var x = document.getElementById("password");
                           var y = document.getElementById("re_password");
             						 if (x.type === "password" && y.type === "password") {
               				 x.type = "text";
                       y.type = "text;"
             			 } else {
               	 x.type = "password";
                 y.type = "password";
             	}
           	}
           </script>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>
