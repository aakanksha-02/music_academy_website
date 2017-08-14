<?php 
require 'db.php';
session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Us</title><meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php include 'css/css.html'; ?>
</head>

<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['register'])) { //admin will add the video.
            $q_name = $_POST['name'];
            $q_email = $_POST['email'];
            $q_message = $_POST['message'];
            
            $sql = "INSERT INTO queries(name, email, message) VALUES ('$q_name','$q_email','$q_message')";
            
            if ( $mysqli->query($sql) ) {
                $_SESSION['message'] = "Thank you for contacting us!! :)";
                header("location: success.php");    
            }
            else{
                $_SESSION['message'] = "Oh! We did not get you message.";
                header("location: error.php");  
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
                    <li><a href="add_video.php">ADD VIDEO</a></li>
                    <li><a href="signin_signup.php">SINGUP/SIGNIN</a></li>
                    <li><a href="instructor.php">INSTRUCTORS</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="form">
        <div id="signup">   
            <div class="contact-text">
                <h3>Any Query ??</h3>
                <h5 align="left"><span class="glyphicon glyphicon-map-marker"></span> NIT Durgapur, India</h3>
                <h5 align="left"><span class="glyphicon glyphicon-phone"></span> Phone: +91 9563352067</h5>
                <h5 align="left"><span class="glyphicon glyphicon-envelope"></span> Email: kr.aakanksha@mail.com</h5>
                <hr>
            </div>
            <form action="contact.php" method="post" autocomplete="off">
                <div class="field-wrap">
                    <label>Name</label>
                    <input type="text"required autocomplete="off" name='name' />
                </div>
         
                <div class="field-wrap">
                    <label>Email</label>
                    <input type="email"required autocomplete="off" name='email' />
                </div>
          
                <div class="field-wrap">
                    <label>Message</label>
                    <input type="text"required autocomplete="off" name='message'/>
                 </div>
                
                <button type="submit" class="button button-block" name="register" />Contact Us</button>
            </form>
        </div>  
    </div> <!-- /form -->

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
