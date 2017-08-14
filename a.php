<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>TMA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <?php include 'css/css.html'; ?>
</head>


<body>

	<!--Nav-bar-->
	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              	</button>
              	<a class="navbar-brand" href="#">TORRINS</a>
            </div>
        	<div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="add_video.php">ADD VIDEO</a></li>
                    <li><a href="signin_signup.php">SINGUP/SIGNIN</a></li>
                    <li><a href="instructor.php">INSTRUCTORS</a></li>
                </ul>
        	</div>
        </div>
	</nav>

    <div class="form">   
    	<form action="a.php" method="post" autocomplete="off">
          	<p>Your video has been added into database successfully...!!</p>
        </form>
	</div>  
        
   	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script src="js/index.js"></script>

</body>
</html>
