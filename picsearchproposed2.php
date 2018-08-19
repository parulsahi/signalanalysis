<?php
require('db.php');

session_start();
if(!isset($_SESSION["id"])){
echo "<script>
alert('Please login first');
window.location.href='login.php';
</script>";
 }

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Biomedical Signals</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>


<style type="text/css">


#myimg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myimg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: relative;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}


.sidenav {
    height:2150px;
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
    height:2150px;
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
	height:2150px;
	width:70%;
	left:15%;
	right:15%;
	top:47%;
	border:2px strong #F0C;
	background:linear-gradient(to right,#D2DDB2,#C0D6AF,#DDE4B8,#D2DDB2,#DDE4B8,#C0D6AF,#D2DDB2);
	//font-size:40px;
float:left;
}
h4
{ 
padding-left:2%;
padding-right:2%;
font-family:Times New Roman;
}
footer
{background-color:#000;
color:#FFF;
}



.image{
//padding:30px;
height:200px;
width:250px;
margin-left:30px;
margin-top:-80px;
float:left;
//border:2px solid;
//border-color:#ff2014;


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

     <li class= "active">
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

     <li class= "active">
        <a href="index.php">Home</a>   
      </li>
      <li>
        <a href="about.php">About</a>
      </li>
       <li><a href="contact.php">Contact Us</a></li>
      <li><a href="login.php">Login</a></li>
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
<div>
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
 <form action="picsearchproposed2.php" method="POST">

            <input type="text" name="valueToSearch" placeholder="enter id to search" style="width:250px;">
      <input type="submit" name="search" value="Search"></form>



   <?php
        include("db.php");

        if(isset($_POST['search']))
     {
    $valueToSearch = $_POST['valueToSearch'];

//Record the start time before the query is executed.
$started = microtime(true);

  $query = "SELECT * FROM `users` WHERE `id`='$valueToSearch'";
  $result = mysqli_query($con,$query);

//Record the end time after the query has finished running.
$end = microtime(true);

//Calculate the difference in microseconds.
$difference = $end - $started;

//Format the time so that it only shows 10 decimal places.
$queryTime = number_format($difference, 10);
 $t= 1000000 * ($queryTime);
 //echo $t;
//
  if (mysqli_num_rows($result) > 0) {
        while($row=mysqli_fetch_array($result))
           {

             $id=$row[0];
            $fname=$row[1];
            $lname=$row[2];
             $ffname = $row[3];
    $mfname = $row[4];
    $dob = $row[5];
    $gender = $row[6];
    $address = $row[7];
    $weight = $row[8];
    $birthplace = $row[9];
    $birthtime =$row[10];
     $maxloc=$row[11];
    $t4=$row[12];
    $t3=$row[13];
    $t5=$row[14];
    $t2=$row[15];
    $sound=$row[16];
            $email=$row[17];
            $image_name=$row[20];
             $signup_date=$row[21];
           $nail=$row[24];
           
             ?>



<table align="center" >  <caption><center><strong>Search by Proposed Method </strong></center></caption>

   <tr><td></td><td></td><td></td><td rowspan="6"><img src="saveimages/<?php echo $image_name;?>" width="120" height="120" style="border:1px solid black;"></td></tr>
        <tr><td><b>Id</b></td><td><b> : </b></td><td><?php echo $id; ?></td></tr>
        <tr><td><b>First Name</b></td><td><b> : </b></td><td><?php echo $fname; ?></td></tr>
        <tr><td><b>Last Name</b></td><td> <b>:</b> </td><td><?php echo $lname; ?></td></tr>
        <tr><td><b>Father's Name</b></td><td><b> :</b> </td><td><?php echo $ffname; ?></td></tr>
        <tr><td><b>Mothers's Name</b></td><td> <b>:</b> </td><td><?php echo $mfname; ?></td></tr>
        <tr><td><b>Date of Birth</b></td><td> <b>: </b></td><td><?php echo $dob; ?></td></tr>
        <tr><td><b>Gender</b></td><td> <b>: </b></td><td><?php echo $gender; ?></td></tr>
        <tr><td><b>Registered Email</b></td><td> <b>:</b> </td><td><?php echo $email; ?></td></tr>
        <tr><td><b>Address</b></td><td><b> :</b> </td><td><?php echo $address; ?></td></tr>
        <tr><td><b>Weight</b></td><td> <b>: </b></td><td><?php echo $weight; ?></td></tr>
        <tr><td><b>Birth Place</b></td><td><b> : </b></td><td><?php echo $birthplace; ?></td></tr>
         <tr><td><b>Birth Time</b></td><td><b> :</b> </td><td><?php echo $birthtime; ?></td></tr>
         <tr><td><b>Place where you stayed the longest</b></td><td><b> : </b></td><td><?php echo $maxloc; ?></td></tr>
         <tr><td><b>Shape of your hands</b></td><td><b> : </b></td><td><?php echo $t4; ?></td></tr>
         <tr><td><b>Colour of your eyes</b></td><td><b> : </b></td><td><?php echo $t3; ?></td></tr>
          <tr><td><b>Favourite Colour</b></td><td><b> : </b></td><td><?php echo $t5; ?></td></tr>
          <tr><td><b>Favourite Taste</b></td><td> <b>: </b></td><td><?php echo $t2; ?></td></tr>
          <tr><td><b>Favourite Music</b></td><td><b> : </b></td><td><?php echo $sound; ?></td></tr>
       <tr><td rowspan="1000"><b>Nail Image</b></td><td rowspan="1000"><b> : </b></td>  

                 <?php
       $time_start = microtime(true);
      $s=$id;
 $f = fopen('nail_textfile/'.$nail, "r");
             // read file line by line until the end of file (feof)
        while(!feof($f))
               {
                 $k=fgets($f);
                 if (strpos($k, $s) !== false) {
     echo "<td>";
         //style=padding-right:14px;padding:8.5px;padding:8.5px;padding:8.5px;
      echo "<img src=\"nail_data/" . $k. "\" height= 145 width = 160 hspace=5/>";
        echo'<div style="font-size:11px;padding:7px;">';
        echo wordwrap($k,27,"<br>\n",TRUE);
        echo'</div>';
     echo  "</td>";
}


                  }
                  $time_end = microtime(true);
                  $qq = $time_end - $time_start;
                  $qi = number_format($qq, 10);
 $to= 1000000 * ($qi);
               //echo $to;
               

                  ?>

            </tr>
          </table>

          <table align="center" >  <caption><center><strong>Similar_Nail_Images</strong></center></caption>
             

          <?php
       $time_start1 = microtime(true);
 $f = fopen('nail_textfile/'.$nail, "r");
  if (!$f) {
    echo "There was an error in the opening file";
}
else {
    $i = 0;
 while (($k = fgets($f)) !== false)

       {
       if ($i % 5 == 0) { echo '<tr>';  }
                                                                   
        echo "<td>";
         //style=padding-right:14px;padding:8.5px;padding:8.5px;padding:8.5px;
      echo "<img src=\"nail_data/" . $k. "\" height= 145 width = 160 hspace=5/>";
        echo'<div style="font-size:11px;padding:7px;">';
        echo wordwrap($k,27,"<br>\n",TRUE);
        echo'</div>';
     echo  "</td>";

//if ($i % 4 == 2) { echo '</tr>'; }

   $i++;
                  }
              }
              if ($i % 5 != 0) { echo '</tr>'; }
  echo '</table>';  
              
    fclose($f);
                  $time_end1 = microtime(true);
                  $dr = $time_end1 - $time_start1;
                   $op = number_format($dr, 10);
                  $to1= 1000000 * ($op);
                  //echo $to1;

                  ?>
           
       <?php
              }

               $z=$t+$to1+$to;
            echo "<center><br><br>SQL query took $z microseconds to execute.<center>";

      } else{  ?>
   <table>
  <tr>
            <td> <?php echo "No users found<br><br>";?></td>
      </tr>
      </table>
 <?php }} ?>


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
   <form action="pictures1.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">upload Images</button>
  </form>
  <?php }
  else{?>
  <form action="pictures1.php" >
  <button type="submit" class="btn btn-success" >Upload images</button>
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
  <?php } ?>
  
  <br />

 <?php
    if(isset($_SESSION['id']) && !empty($_SESSION['id'])){ ?>
   <form action="picsearchnormal.php" >
  <button type="submit" class="btn btn-success" id="<?php echo $_SESSION['id'];?>">Analyse 1</button>
  </form>
  <?php }
  else{?>
  <form action="picsearchnormal.php" >
  <button type="submit" class="btn btn-success" >Analyse 1</button>
  </form>
  <?php } ?>
  
 
   
   
</center>
</div>
</div>

</body>
</html>