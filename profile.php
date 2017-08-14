<?php
session_start();
include'db.php';
// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
    $_SESSION['message'] = "You must log in before viewing your profile page!";
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
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Welcome <?= $first_name.' '.$last_name ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <?php include 'css/css.html'; ?>
</head>

<body>
	<div class="form2">
  		<h1>Welcome <?php echo $email;?> !!</h1>
        <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
    	<hr>
        <ul class="tab-group">
            <li class="tab active"><a href="#guitar">Guitar</a></li>
            <li class="tab"><a href="#piano">Piano</a></li>
        </ul>
        
        <div class="tab-content">
	  		<div id="guitar">
            	<?php
          		$result = "SELECT * FROM videos where type = 'guitar'";
					$row = mysqli_query($mysqli,$result);
					if(!$result)
					{
						die(mysqli_error($mysqli));
					}
					while($data = mysqli_fetch_assoc($row)){
						$vi_title = $data['title'];
						$vi_link = $data['link'];
						echo "<p>$vi_title</p>";?>
                        <div class="video_border">
                   		<video width="735" height="315" controls>
                        	<source src="videos/<?php echo $data['link'];?>">
						</video></div><br><hr><br>';
                    <?php
					}
				?>
            </div>
            	
        	<div id="piano">   
          		<?php
          		$result = "SELECT * FROM videos where type = 'piano'";
					$row = mysqli_query($mysqli,$result);
					if(!$result)
					{
						die(mysqli_error($mysqli));
					}
					while($data = mysqli_fetch_assoc($row)){
						$vi_title = $data['title'];
						$vi_link = $data['link'];
						echo "<p>$vi_title</p>";?>
                        <div class="video_border">
                   		<video width="735" height="315" controls>
                        	<source src="videos/<?php echo $data['link'];?>">
						</video></div>
                        <br><hr><br>';
                        
                    <?php
					}
					?>
			</div>  
        
      	</div><!-- tab-content -->
   </div><!-- form -->
    
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="js/index.js"></script>

</body>
</html>
