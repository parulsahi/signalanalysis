
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>view users</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <link rel="stylesheet" href="viewusers.css">

<script type="text/javascript">

function ShowPicture(id,Source) {
if (Source=="1"){
if (document.layers) document.layers[''+id+''].visibility = "show"
else if (document.all) document.all[''+id+''].style.visibility = "visible"
else if (document.getElementById) document.getElementById(''+id+'').style.visibility = "visible"
}
else
if (Source=="0"){
if (document.layers) document.layers[''+id+''].visibility = "hide"
else if (document.all) document.all[''+id+''].style.visibility = "hidden"
else if (document.getElementById) document.getElementById(''+id+'').style.visibility="hidden"
}
}


$(document).ready(function() {

  $('#sound').on('change', function() {
    change($(this).val());
  });

});


function change(sourceUrl) {
  var audio = document.getElementById("player");
  var source = document.getElementById("mp3_src");

  audio.pause();

  if (sourceUrl) {
    source.src = sourceUrl;
    audio.load();
    audio.play();
  }
}


function taste(item)
{
document.getElementById("t2").value = item;
ShowPicture('Styletaste',0);
}

function eye(item)
{
document.getElementById("t3").value = item;
ShowPicture('Styleeye',0);
}

function hand(item)
{
document.getElementById("t4").value = item;
ShowPicture('Stylehand',0);
}

function color(item)
{
document.getElementById("t5").value = item;
ShowPicture('Stylecolor',0);
}


</script>
<style type="text/css">


#Styletaste {
                  margin-left:400px;
	position:absolute;
	visibility:hidden;
	border:solid 1px #CCC;
	padding:5px;

}

#Styleeye{
                  margin-left:400px;
	position:absolute;
	visibility:hidden;
	border:solid 1px #CCC;
	padding:5px;

}

#Stylehand{
                  margin-left:400px;
	position:absolute;
	visibility:hidden;
	border:solid 1px #CCC;
	padding:5px;

}

#Stylecolor{
                  margin-left:400px;
	position:absolute;
	visibility:hidden;
	border:solid 1px #CCC;
	padding:5px;

}


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
p{

bottom:0;
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
        <li><a href="#">Welcome admin!</a> </li>      
    <li><a href="index.php">Home</a></li>
      <li>
        <a href="about.html">About</a>
      </li>

      <li><a href="contact.html">Contact Us</a></li>
	<li><a href="logout.php">Logout</a></li>
    </ul>
    </div>

</nav>


<div class="box">
<br />
<br />
<br />
<div class="lt" align="center"><b>Sigana</b>
</div>
   
</div>

              <div class="table-users">
         <div class="header">REGISTERED USERS ON SIGANA
         <form action="viewusers.php " method="POST">
          <div style="text-align: right; text-color:gray;">
            <input type="text" name="valueToSearch" placeholder="enter keyword" style="width:250px;">
      <input type="submit" name="search" value="Search"></div></form></div>


           <table cellspacing="0">

        <thead>  
  
        <tr>  
             <th><center><b>S.No.</b></center></th>
             <th><center><b>User Id</b></center></th>
             <th><center><b>Profile Picture</b></center></th>
             <th><center><b>First Name</b></center></th>
             <th><center><b>Last Name</b></center></th>
             <th><center><b>E-mail</b></center></th>
                <th><center><b>Files</b></center></th>
                <th><center><b>Nail Image</b></center></th>
              <th><center><b>Registration Date</b></center></th>

            <th><center><b>View</b></center></th>
              <th><center><b>Edit</b></center></th>
              <th><b>Delete</b></th>


               
        </tr>  
        </thead>
    <?php
        include("db.php");

        if(isset($_POST['search']))
     {
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `users` WHERE CONCAT(`fname`, `lname`,`signup_date`,`email`,`id`,`recordingfile`,`nail`) LIKE '%".$valueToSearch."%'";
    $result = mysqli_query($con,$query);
  $count=1;
  if (mysqli_num_rows($result) > 0) {
        while($row=mysqli_fetch_array($result))
           {

            $id=$row[0];
            $fname=$row[1];
            $lname=$row[2];
            $email=$row[17];
            $pwd=$row[18];
            $image_name=$row[20];
            $signup_date=$row[21];
			$role=$row[22];
         $recordingfile=$row[23];
         $nail=$row[24];

            
			if($role=='client')
			{
             ?>

        <tr>                                                        
            <td><?php echo $count; ?></td>
            <td><?php echo $id;  ?></td>
            <td><img src="saveimages/<?php echo $image_name;?>"</td>
            <td><?php echo $fname; ?></td>
            <td><?php echo $lname; ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $recordingfile; ?> </td>
                <td><?php echo $nail; ?> </td>
                       <td><?php echo $signup_date; ?> </td>


            <td><a href="vp1.php?id=<?php echo $id ?>"><button class="btn btn-success" align="center" >View</button></a></td>
             <td><a href="adminupdate1.php?id=<?php echo $id ?>"><button class="btn btn-warning" align="center" >Edit</button></a></td>
              <td><a href="delete.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td>
               
        </tr>
  
        <?php  $count++;}
        }}else{  ?>

  <tr>
            <td class="nouser" colspan="11"> <?php echo "No users found<br><br>";?></td>
                </tr>
 <?php }
  }else{                          //while not in use of search  returns all the values
  $query= "SELECT * FROM `users`";
   $result = mysqli_query($con,$query);
    $count=1;
  while ($row = mysqli_fetch_array($result))
     {

            $id=$row[0];
            $fname=$row[1];
            $lname=$row[2];
            $email=$row[17];
            $pwd=$row[18];
            $image_name=$row[20];
            $signup_date=$row[21];
			$role=$row[22];
          $recordings=$row[23];
            $nail=$row[24];

			if($role=='client')
			{
             ?>

        <tr>                                                        
            <td><?php echo $count; ?></td>
            <td><?php echo $id;  ?></td>
            <td><img src="saveimages/<?php echo $image_name;?>"</td>
            <td><?php echo $fname; ?></td>
            <td><?php echo $lname; ?></td>
            <td><?php echo $email;  ?></td>
              
                 <td><?php echo $recordings; ?> </td>
                   <td><?php echo $nail; ?> </td>

              <td><?php echo $signup_date; ?></td>


            <td><a href="vp1.php?id=<?php echo $id ?>"><button class="btn btn-success" align="center" >View</button></a></td>
             <td><a href="adminupdate1.php?id=<?php echo $id ?>"><button class="btn btn-warning" align="center" >Edit</button></a></td>
              <td><a href="delete.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td>
        </tr>
  
        <?php  $count++;} }  } ?>


    </table>

     <div>

</body>
</html>