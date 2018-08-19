<?php
session_start();
if (isset($_SESSION['id']))
{
  header("Location: patientinf.php");
}
 ?>

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
      <li class="active"><a href="login.php">Login</a></li>
 <li><a href="signup.php">Sign up</a></li>     
    </ul>
    <?php   }?>
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
 
if ($_POST["e"]<>'') { 
    $ToEmail = 'digrapreeti@gmail.com';
    $EmailSubject = 'Sigana Help'; 
    $mailheader = "From: ".$_POST["e"]."\r\n";
    $mailheader .= "Reply-To: ".$_POST["e"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["n"]."";
    $MESSAGE_BODY .= "Email: ".$_POST["e"]."";
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["c"])."";
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
?> 
Your message was sent
<?php 
} else { 
?>
<div class="sidenav">
<ul>
<li><a href="physiology.php">Physiology</a></li><br />
<li><a href="environment.php">Environment</a></li><br />
<li><a href="medicalsystems.php">Medical Systems</a></li><br />
<li><a href="instruments.php">Modern Medical Instruments</a></li><br />
<li><a href="nadi.php">Nadi Vigyan</a></li><br />
<li><a href="biomedicalsgns.php">Biomedical Signals</a></li><br />
<li><a href="signalana.php">Signal Analysis and Interpretation </a></li><br />
<li><a href="deep.php">Deep Learning</a></li></ul>
</div>
<div class="main">



  <form action="contactform.php" method="post">
  <br/>
  <br />
  <div class="form-group" style="margin-left:45px;margin-right:50px;">
     <label for="name" >Your Name</label>
      <input type="name" class="form-control" id="n" placeholder="Enter Your Name" name="n" required="required">
    </div>
  <div class="form-group" style="margin-left:45px;margin-right:45px;">
     <label for="email address" >Email Address</label>
      <input type="email" class="form-control" id="e" placeholder="Enter your email address" name="e" required="required">
    </div>
    <div class="form-group" style="margin-left:45px;margin-right:50px;">
      <label for="comment">Comment</label>
      <textarea class="form-control" id="c" placeholder="Comment" cols="45" rows="10" name="c" required="required" ></textarea>
    </div>
    <input type="submit"  name="submit" class="btn btn-success" value="Submit" style="margin-left:45px;"/>
  </form>

</div>

<div class="right">
<center>
<?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
   <form action="recordme.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Record Signal</button>
  </form>
  <?php }
  else{?>
  <form action="recordme.php" >
  <button type="submit" class="btn btn-success" >Record Signal</button>
  </form>
  <?php } ?>

<br/>
  <?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
   <form action="analyseme.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Analyse Signal</button>
  </form>
  <?php }
  else{?>
  <form action="analyseme.php" >
  <button type="submit" class="btn btn-success" >Analyse Signal</button>
  </form>
  <?php } ?>

  <br />

 <?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
   <form action="vp.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">View Profile</button>
  </form>
  <?php }
  else{?>
  <form action="vp.php" >
  <button type="submit" class="btn btn-success" >View Profile</button>
  </form>
  <?php }} ?>
   
   
</center>
</div>

</body>
</html>