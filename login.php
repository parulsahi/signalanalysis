<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signal Analysis and Interpretation</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

<style type="text/css">
.sidenav {
    height:600px;
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
    height:600px;
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
    font-size:20px;
    color:#333;
   /* display:block;*/
   font-family:Times New Roman;
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
	height:600px;
	width:70%;
	left:15%;
	right:15%;
	top:47%;
	//border:2px strong #F0C;
	background:linear-gradient(to right,#D2DDB2,#C0D6AF,#DDE4B8,#D2DDB2,#DDE4B8,#C0D6AF,#D2DDB2);
	//font-size:40px;
float:left;

}

input[type=email]{
width:850px;
}
input[type=password]{
width:850px;
}

footer
{background-color:#000;
color:#FFF;
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
   
    <ul class="nav navbar-nav navbar-right l1">
    <li><a href="11.php">Home</a></li>
      <li>
        <a href="about.html">About</a>   
      </li>
    
      <li><a href="contact.html">Contact Us</a></li>
		<li class="active"><a href="login.php">Login</a></li>
 <li><a href="signup.html">Sign up</a></li>     
    </ul>
    </div>
    
</nav>

<!--<div class="logo"><img src="images/logo2cc.png" /></div>-->


<div class="box">
<br />
<br />
<br />
<div class="lt" align="center"><b>Sigana</b>
</div>

</div>

<?php
require('db.php');
session_start();
if (isset($_POST['email'])){
  $email =$_POST['email'];
    $pwd=$_POST['pwd'];

    $query = "SELECT * FROM `users` WHERE email='$email'and pwd='$pwd'";
      $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
             $row = mysqli_fetch_array($result);
        $fname = $row['fname'];
          $id = $row['id'];
    $lname = $row['lname'];
    $ffname = $row['ffname'];
    $mfname = $row['mfname'];
    $dob = $row['dob'];
    $gender = $row['gender'];
   $address = $row['address'];
   $weight = $row['weight'];
    $birthplace = $row['birthplace'];
    $birthtime =$row['birthtime'];
  
    $t4=$row['t4'];
    $t3=$row['t3'];
    $t5=$row['t5'];
    $t2=$row['t2'];
    $sound=$row['sound'];
    $cpwd=$row['cpwd'];
    $maxloc=$row['maxloc'];
    $image_name=$row['image_name'];

         $_SESSION['email']= $email;
          $_SESSION['pwd']= $pwd;
        $_SESSION['fname']= $fname;
         $_SESSION['id']= $id;
         $_SESSION['lname']= $lname;
         $_SESSION['ffname']= $ffname;
         $_SESSION['mfname']= $mfname;
         $_SESSION['dob']= $dob;
         $_SESSION['gender']= $gender;
         $_SESSION['address']= $address;
         $_SESSION['weight']= $weight;
         $_SESSION['birthplace']= $birthplace;
         $_SESSION['birthtime']= $birthtime;
         $_SESSION['maxloc']= $maxloc;
         $_SESSION['t4']= $t4;
         $_SESSION['t3']= $t3;
         $_SESSION['t2']= $t2;
         $_SESSION['t5']= $t5;
         $_SESSION['sound']= $sound;
         $_SESSION['cpwd']= $cpwd;
         $_SESSION['image_name']= $image_name;
        header("Location: patientinf.php");
         }else{
    echo "<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a>";
    }
    }else{
?>
<div class="sidenav">
<ul>
<li><a href="physiology.html">Physiology</a></li><br />
<li><a href="environment.html">Environment</a></li><br />
<li><a href="medicalsystems.html">Medical Systems</a></li><br />
<li><a href="instruments.html">Modern Medical Instruments</a></li><br />
<li><a href="nadi.html">Nadi vigyan</a></li><br />
<li><a href="biomedicalsgns.html">Biomedical Signals</a></li><br />
<li><a href="signalana.html">Signal Analysis and Interpretation </a></li><br />
<li><a href="deep.html">Deep learning</a></li></ul>
</div>
<div class="main">



  <form action="" method="post" name="login">
  <br/>
  <br />
  
  <div class="form-group" style="margin-left:45px;">
     <label for="email" >Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="required">
    </div>
    <div class="form-group" style="margin-left:45px;">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required="required" >
    </div>
    <input type="submit"  name="submit" class="btn btn-success" value="Submit" style="margin-left:45px;"/>
  </form>
  <p style="margin-left:45px;">Not registered yet? <a href='signup.html'>Register Here</a></p>
</div>

<div class="right">
<center>
<input type= "button" value="record signal" id="record" class="btn btn-success"/>
<br/>
<br/>
<input type= "button" value="analyse signal" id="record" class="btn btn-success"/>
</center>
</div>

<?php   } ?>
<footer align="center">
Developed by Department of Computer Science & IT, University of Jammu</footer>
</body>
</html>