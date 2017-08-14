<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Torrins Music Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> 
    
</head>

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

	<!--Front-->
    <div class="heading text-center">
    	<h1><strong>WE LOVE MUSIC!!</strong></h1>
        <p>
        <h3>LEARN MUSIC ONLINE</h3>
        <p>&nbsp;</p>
        </p>
      <p>Want to learn how to play Guitar? Join Torrins and learn to play your favorite instrument – we have the best online guitar, piano and bass guitar lessons.</p>
        <br>
   	</div>

    <!--Courses-->
	<div class="container text-center">
    	<!--Courses-->
        <div class="row">
        	<!--learn-guitar-->
        	<div class="col-sm-4">
            	<p class="text-center"><h3><strong>Learn Guitar</strong></h3></p><br>
                <a href="#learn-guitar" data-toggle="collapse">
                	<img src="img/guitar.jpg" alt="Random name" height="7500%" class="img-circle person">
                </a>
                <div id="learn-guitar" class="collapse">
                	<p><a href="signin_signup.php">Want to learn how to play Guitar? Register here and learn to play it.</a></p> 
                </div>
            </div>
            <!--learn-piano-->
            <div class="col-sm-4">
            	<p class="text-center"><h3><strong>Learn Piano</strong></h3></p><br>
                <a href="#learn-piano" data-toggle="collapse">
                	<img src="img/pianoo.jpg" class="img-circle person" alt="Random name">
                </a>
                <div id="learn-piano" class="collapse">
                	<p><a href="signin_signup.php">Want to learn how to play Piano? Register here and learn to play it.</a></p> 
                </div>
            </div>
            <!--learn-dance-->
            <div class="col-sm-4">
            	<p class="text-center"><h3><strong>Learn Dance</strong></h3></p><br>
                <a href="#learn-dance" data-toggle="collapse">
                	<img src="img/dance.jpg" class="img-circle person" alt="Random name">
                </a>
                <div id="learn-dance" class="collapse">
                	<p><a href="signin_signup.php">Want to learn how to dance? Register here and learn to rock.</a></p> 
                </div>
            </div>
        </div>
    </div>
    
    <!--Footer-->
    <footer class="text-center">
     	<a class="up-arrow" href="index.php" data-toggle="tooltip" title="TO TOP">
           	<span class="glyphicon glyphicon-chevron-up"></span>
       	</a><br><br>
       	<p><a href="index.php" data-toggle="tooltip" title="Visit Again!!">Torrins Music Academy</a></p> 
    </footer>
    
</body>
</html>
