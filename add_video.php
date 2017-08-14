<?php 
require 'db.php';
session_start();
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log as admin before adding a video to this site.";
  header("location: error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Video</title><meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php include 'css/css.html'; ?>
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['register'])) { //admin will add the video.
		$v_title = $_POST['title'];
		$v_link = $_POST['link'];
		$v_type = $_POST['type'];
		
		$sql = "INSERT INTO videos(title, link, type) VALUES ('$v_title','$v_link','$v_type')";
		
		if ( $mysqli->query($sql) ){
			header("location: a.php");
   		}else {
			echo "There is some error in adding this video to the database...!!";
		}
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
                    <li><a href="signin_signup.php">ADD VIDEO</a></li>
                    <li><a href="signin_signup.php">SINGUP/SIGNIN</a></li>
                    <li><a href="instructor.php">INSTRUCTORS</a></li>
                </ul>
          </div>
        </div>
  </nav>

  <div class="form">
      
      
         <div id="signup">   
          <a href="logout.php"><button class="button button-block" name="logout"/>Log Out Admin</button></a>
          <hr>
          <form action="add_video.php" method="post" autocomplete="off">
          
          <div class="field-wrap">
            <label>Title</label>
            <input type="text"required autocomplete="off" name='title' />
          </div>
         
          <div class="field-wrap">
            <label>Link</label>
            <input type="text"required autocomplete="off" name='link' />
          </div>
          
          <div class="field-wrap">
            <label>Type</label>
            <input type="text"required autocomplete="off" name='type'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />ADD VIDEO</button>
          
          </form>

        </div>  
	</div> <!-- /form -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
