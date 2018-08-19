<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
if (isset($_SESSION['id']))
{
  header("Location: patientinf.php");
}
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SignUp</title>
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
 <li class="active"><a href="signup.php">Sign up</a></li>     
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

 </body>
</html>

<?php

    require('db.php');
    if (isset($_POST['submit'])) {
    $fname =$_POST['fname'];
    $lname =$_POST['lname'];
    $ffname =$_POST['ffname'];
    $mfname =$_POST['mfname'];
    $dob =$_POST['dob'];
    $gender =$_POST['gender'];
    $address =$_POST['address'];
    $weight =$_POST['weight'];
    $birthplace =$_POST['birthplace'];
    $birthtime =$_POST['birthtime'];
    $maxloc =$_POST['maxloc'];
    $t4=$_POST['t4'];
    $t3=$_POST['t3'];
    $t5=$_POST['t5'];
    $t2=$_POST['t2'];
    $sound=$_POST['sound'];
    $email =$_POST['email'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];
	$hid=$_POST['hid'];
	$rad=$_POST['rad'];
    $image_name=$_POST['hid'];
   
//unique email
   $query = "SELECT * FROM users WHERE email = '$email'";
   $result =  $con->query($query);
				
				if( $result->num_rows > 0)
				{
					header("Location:signup.php?err=".urlencode("Email Already Present!!"));
				}
				else
				{
					
   //unique id code
     $a=substr($fname, 0, 2); // pre defined function of php
     $b=substr($lname, 0, 2);
     echo '<br>';
 $m=date('m'); // Get the month
echo '<br>';
 $d=date('d'); // Get the date
echo '<br>';
 $y=date('y'); // Get the Year
echo '<br>';
echo '<br>';

// Get the rows count
$re="SELECT * FROM `users`";
$id1 = mysqli_query($con, $re);

$id2=mysqli_num_rows($id1);
// $id2 = mysqli_fetch_array($id1);
$invID = str_pad($id2, 4, '0', STR_PAD_LEFT);


 $sigana="sigana";

 $id=$sigana.$a.$b.$d.$m.$y.$invID;


if($fname && $email && $pwd)       {

//random code
		$confirmcode = rand();
   
   
    $query="UPDATE `users` Set [sound]=left([sound],len([sound])-charindex('.',Reverse([sound])))";
    $query = "INSERT into  `users` (`id`,`fname`,`lname`,`ffname`,`mfname`,`dob`,  `gender`,
    `address`,`weight`,`birthplace`, `birthtime`,`maxloc`,`t4`,`t3`,`t5`,`t2`,`sound`,`email`,`pwd`,`cpwd`,`image_name`,`signup_date`,`role`,`confirmed`,`confirmcode`)
     VALUES ('$id','$fname','$lname','$ffname','$mfname','$dob','$gender', '$address','$weight',
 
              '$birthplace', '$birthtime','$maxloc', '$t4','$t3','$t5','$t2','$sound','$email','$pwd', '$cpwd','$hid',NOW(),'client','0','$confirmcode')";

	$result = mysqli_query($con,$query);

    $message =
		"Confirm Your Email
		Click the link below to verify your account
		http://www.sigana.in/emailconfirm.php?id=$id&code=$confirmcode
		";
		mail($email,"Email Verification",$message,"From: contactus@sigana.in");
		
		echo "<h4 align='center'>Registration Complete! Please confirm your email address</h4>";
	}

    }

     }

//$upFile = 'saveimages/'.$hid;
//echo $upFile;
$filename=$hid;  //imagename
if($rad=='d')    //if image is taken from local device
{
	
	$filepath = 'saveimages/';
move_uploaded_file($_FILES['pic']['tmp_name'], $filepath.$filename);
}
//echo $filepath.$filename;

?> 
 
 






