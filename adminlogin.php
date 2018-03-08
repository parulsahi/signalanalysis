                                           <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin Login</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

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
   
    <ul class="nav navbar-nav navbar-right l1">
    <li><a href="11.php">Home</a></li>
      <li>
        <a href="about.html">About</a>   
      </li>
    
      <li><a href="contact.html">Contact Us</a></li>
		     
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

if (isset($_POST['adminlogin'])){
  $adminname =$_POST['adminname'];
    $adminpwd=$_POST['adminpwd'];

    $query = "SELECT * FROM `admintable` WHERE adminname='$adminname'and adminpwd='$adminpwd'";
      $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
        $row = mysqli_fetch_array($result);
       
         $id = $row['id'];
         $_SESSION['adminname']= $adminname;
          $_SESSION['id']= $id;
  
        echo "<script>window.open('viewusers.php','_self')</script>";
    }  
    else
     {
    echo"<script>alert('Admin Details are incorrect..!')</script>";}
  
}
?>

<div class="container">
  <form action="viewusers.php" method="post" name="login">
  <br/>
  <br />
  <div class="form-group">
     <label for="text">Admin Name</label>
      <input type="text" class="form-control" id="adminname" placeholder="Enter name" name="adminname" required="required">
    </div>
    <div class="form-group">
      <label for="pwd">Admin Password</label>
      <input type="password" class="form-control" id="adminpwd" placeholder="Enter password" name="adminpwd" required="required" >
    </div>
    <input type="submit"  name="adminlogin" class="btn btn-success" value="Submit"/>
  </form>
 <p>Not an admin? <a href='login.php'>Login as a user</a></p>
</div>


</body>
</html>