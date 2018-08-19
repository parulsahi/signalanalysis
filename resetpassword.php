                  <?php

include ('db.php');

if(isset($_REQUEST["note"]) AND isset($_REQUEST["id"]) AND isset($_REQUEST["email"]))  {

   $note= preg_replace("#([0-9])#", "", $_REQUEST["note"]);
    $id= $_REQUEST["id"];
    $email= $_REQUEST["email"];

    $sql="SELECT id FROM `users` WHERE `note`='$note' AND email='$email' AND id='$id'";
      $query = mysqli_query($con,$sql) or die(mysqli_error($con));
           if($query)
    {

         ?>
         <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>resetpassword</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="jquery-1.11.3.js"></script>
  <script src="webcam.min.js"></script>

<script type="text/javascript">


</script>

<style type="text/css">





.sidenav {
    height:1000px;
    width:15%;
    top:47%;
    left:0;
    background-color:#94C1A4;
    padding-top:2%;
	float:left;
}

.sidenav a {
	padding-left:2%;
   /* padding:15% 15% 15% 15%;*/
    text-decoration:blink;
    font-size:20px;
    color:#333;
   /* display:block;*/
}

.sidenav a:hover {
    color: #06F;
}
.right {
    height:1000px;
    width:15%;
    top:47%;
    right:0;
    background-color:#94C1A4;
    padding-top:2%;
	float:left;
}

.right a {
    padding:15% 15% 15% 15%;
    text-decoration:blink;
    font-size:25px;
    color:#333;
   /* display:block;*/
}

.right a:hover {
    color:#06F;
}
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 10px;}
    .sidenav a {font-size: 40px;}
}
.logo
{
	position: fixed;
    top:0;
    left:0;
	height:10%;
	width:7%;
}

.box{
	height:250px;
	width:100%;
    margin-top:4.5%;
	-webkit-animation:myani 5s;
	-webkit-animation-iteration-count:infinite;
}
@-webkit-keyframes myani{
	from{
		background:url(images/img.png);
			background-repeat:no-repeat;
			background-size:100% 100%;}
	to{
		background:url(images/stethoscope-and-copy-space_23-2147652347.jpg);
			background-repeat:no-repeat;
			background-size:100% 100%;}
}


.lt {
    width:20%;
    height:55px;
	color:#006;
	font-size:600%;
	font-family:"vivaldi";
    position: relative;
	margin-top:-3%;
    -webkit-animation: mymove 5s infinite;
    animation: mymove 10s infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    from {left:0;}
    to {left:40%;}
}
@keyframes mymove {
    from {left:0;}
    to {left:40%;}
}
.l1
{margin-top:9px;
}
.main
{
	height:1000px;
	width:70%;
	left:15%;
	right:15%;
	top:47%;
	border:2px strong #F0C;
	background:linear-gradient(to right,#D2DDB2,#C0D6AF,#DDE4B8,#D2DDB2,#DDE4B8,#C0D6AF,#D2DDB2);
	font-size:40px;
float:left;
}




</style>
</head>

<body bgcolor="#E6E6E6">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <img class="logo" src="images/new.png"/>
      <a class="navbar-brand" href="#"></a>
    </div>

    <?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){
    ?>
     <ul class="nav navbar-nav navbar-right l1">
     <li><a href="#">Welcome <?php echo $_SESSION['fname']; ?>!</a> </li>

     <li>
        <a href="index.php">Home</a>   
      </li>
      <li>
        <a href="about.php">About</a>   
      </li>
      <li><a href="contact.php">Contact Us</a></li>
		<li><a href="logout.php">Logout</a></li>
   </ul>
    <?php } else { ?>
       <ul class="nav navbar-nav navbar-right l1">

     <li>
        <a href="index.php">Home</a>   
      </li>
      <li>
        <a href="about.php">About</a>
      </li>
       <li><a href="contact.php">Contact Us</a></li>
      <li><a href="login.php">Login</a></li>
 <li class><a href="signup.php">Sign up</a></li>     
    </ul>
    <?php   }?>
     </div>
    
</nav>



<div class="box">
<br />
<br />
<br />
<div class="lt" align="center"><b>Sigana</b>
</div>

</div>


        <h3 align='center'> <b> Finally, choose a new password. </b></h3>
               <hr>
             
         	<form  method="post" action="">
         	<center><input name="id" type="hidden" value="<?php echo $id;?>">
         	<input name="email" type="hidden" value="<?php echo $email;?>">
             <label for="new_password">New Password* </label><br/>
         	<input type="password" placeholder="New Password" name="new_password" minlength="8" required="required">  <br/><br/>
         	 <label for="confirm_newpassword">Re-type New Password*</label>   <br/>
            <input type="password" placeholder="Re-type New Password" name="confirm_newpassword" minlength="8" required="required">  <br/><br/>
              <input type="submit"  name="submit" class="btn btn-success" value="Reset Password">     </center>
         	</form>

         	 </body>
</html>

         	<?php

         	}else{
         	echo "Error : Please try again ...!";
         	}
}

if(isset($_POST["submit"])){
$n_pass= $_POST["new_password"];
$c_pass= $_POST["confirm_newpassword"];
$id=$_POST["id"];
$email =$_POST["email"];

if(strlen($n_pass) <8) {
    echo "Password length must be greater than 8 characters";
    exit();
    } else if ($n_pass != $c_pass) {
        echo "Password doesn't match";
    exit();
    }
    else{
       $sql2= "UPDATE `users` SET `pwd`='$n_pass' , `note`= '' , `cpwd`='$n_pass' WHERE `email`='$email' AND id='$id'";
       $query2 = mysqli_query($con,$sql2) or die(mysqli_error($con));
         if($query2)
    {
    echo "Your password has been changed successfuly. You can login now.";
    }
}

}


?>