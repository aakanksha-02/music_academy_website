<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>TMA</title><meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['login'])) { //user logging in
        require 'login.php';
    }elseif (isset($_POST['register'])) { //user registering
        require 'register.php';
    }
}
?>
<body>
    <!--Nav-bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">TORRINS</a>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="add_video.php">ADD VIDEO</a></li>
                    <li><a href="signin_signup.php">SINGUP/SIGNIN</a></li>
                    <li><a href="instructor.php">INSTRUCTORS</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
          </div>
        </div>
  </nav>

  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Sign Up</a></li>
        <li class="tab active"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
	  	
        <div id="login">   
          <form action="signin_signup.php" method="post" autocomplete="off">
          	<div class="field-wrap">
            	<label>Email Address</label>
            	<input type="email" required autocomplete="off" name="email"/>
            </div>
          	<div class="field-wrap">
            	<label>Password</label>
	            <input type="password" required autocomplete="off" name="password"/>
            </div>
          	<button class="button button-block" name="login" />Log In</button>
          </form>
		</div>
          
        <div id="signup">   
          <form action="signin_signup.php" method="post" autocomplete="off">
          	<div class="top-row">
            	<div class="field-wrap">
                    <label>First Name</label>
                    <input type="text" required autocomplete="off" name='firstname' />
            	</div>
        		<div class="field-wrap">
    	          	<label>Last Name</label>
	    	        <input type="text" required autocomplete="off" name='lastname' />
            	</div>
          	</div>
			<div class="field-wrap">
            	<label>Email Address</label>
	            <input type="email" required autocomplete="off" name='email' />
            </div>
          	<div class="field-wrap">
            	<label>Set A Password</label>
	            <input type="password" required autocomplete="off" name='password'/>
            </div>
            <button type="submit" class="button button-block" name="register" />Register</button>
          </form>
		</div>  
        
      </div><!-- tab-content -->
      
	</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
