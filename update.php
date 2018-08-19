<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
require('db.php');
session_start();
if(!isset($_SESSION["id"])){
header("Location: login.php");
exit(); }
$id = isset($_POST['id']) ? $_POST['id'] : '';
//$id=$_SESSION['id'];
$query = "SELECT * from `users` WHERE id='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
//$res=mysqli_fetch_array($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Update</title>
<link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>

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

/*function song()
{
var pp=document.getElementById("sound").value;
var ps=pp.substring(0,pp.lastIndexOf('.'));
document.getElementById("sound").value=ps;
}*/

 function disp(val)
{
	 e=document.getElementById('email').value ;
	 if(e=="")
	 alert("enter email field");
	 else
 {
	if(val=="device")
	{
	document.getElementById('cam').style.display='none';
	document.getElementById('w').style.display='none';
	document.getElementById("i1").style.display="block";
	document.getElementById("i2").style.display="none";
	document.getElementById("upload").style.display="none";
	document.getElementById("another").style.display="none";
	document.getElementById("snap").style.display="none";
	document.getElementById("blah").style.display="block";
	}
    else
	{
	document.getElementById('l').style.display='none';
    document.getElementById('device').style.display='none';
	document.getElementById("i2").style.display="block";
	document.getElementById("i1").style.display="none";
	document.getElementById("blah").style.display="none";
    }
 }
}

/*displaying uploaded image*/
function readURL(input) {
	
    document.getElementById("blah").style.display='block';
        if (input.files && input.files[0]) {
         var reader = new FileReader();
         reader.onload = function (e) {
         $('#blah')
          .attr('src', e.target.result)
          .width(200)
          .height(200);
           };
        reader.readAsDataURL(input.files[0]);
		}
	 var pp = document.getElementById('email').value;
	 var ps =pp.substring(0,pp.lastIndexOf('@'));
	 var today = new Date();
	 var t=today.getSeconds();
	 var filename=ps+'_sigana_4'+t+'.jpg';		 
 document.getElementById('hid').value=filename;  //name of image uploaded
 //window.location='saveimage.php?username='+filename+'&b='+1;       
		
    }

/*code for capturing image through webcam*/


Webcam.set({
			width: 200,
			height:200,
            image_format: 'jpeg',
			jpeg_quality: 90
		});

function setup() {
			Webcam.reset();
			Webcam.attach('#my_camera' );
		}
		
function take_snapshot() {

        document.getElementById("snap").style.display='none';
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				
        document.getElementById('my_camera').innerHTML = 
			'<img src="'+data_uri+'"/>';
			} );

      document.getElementById("upload").style.display='block';
      document.getElementById("another").style.display='block';			
}


function upload_pic()
{  

//var username = 'jhuckaby';

     
     var pp = document.getElementById('email').value;
	 var ps =pp.substring(0,pp.lastIndexOf('@'));
	 if(ps=="")
	 alert('enter email field');
	 else
	 {
	 var today = new Date();
	 var t=today.getSeconds();
	 
	 var filename=ps+'_sigana_4'+t+'.jpg';
	
	document.getElementById('hid').value=filename;      //name of image uploaded
	var x=document.getElementById('hid').value;
	/*alert(filename);
	alert(x);*/
	//var image_fmt = 'jpeg';
	//var url = 'saveimage.php?username=' + username + '&format=' + image_fmt;
     Webcam.snap(function(data_uri) {
				// display results in page
				Webcam.upload( data_uri,'saveimage.php?username=' + filename,function(code, text) {
					document.getElementById('my_camera').innerHTML = 
				'<img src="'+text+'"/>';
				} );	
			} );
Webcam.reset();
    document.getElementById('l').style.display='none';
    document.getElementById('w').style.display='none';
    document.getElementById('choose').style.display='none';
    document.getElementById('device').style.display='none';
    document.getElementById('cam').style.display='none';
    document.getElementById("i1").style.display="none";
	document.getElementById("i2").style.display="none";
	document.getElementById("upload").style.display="none";
	document.getElementById("another").style.display="none";
	document.getElementById("snap").style.display="none"; 
    }
}


function another_pic()
{
Webcam.attach('#my_camera' );
document.getElementById("snap").style.display='block';
document.getElementById("upload").style.display='block';
document.getElementById("another").style.display='none';
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
input[type=text]{
width:750px;
}

input[type=time]{
width:750px;
}

input[type=number]{
width:750px;
}
input[type=date]{
width:750px;
}
#gender,#sound,#address{
width:750px;
}

input[type=email]{
width:750px;
}

input[type=password]{
width:750px;
}

#my_camera{
height:200px;
width:200px;
border:1px solid #000;
margin:5px auto;

}

.imagediv{
height:350px;
width:350px;
float:right;
/*border:2px solid;
border-color:#ff2014;*/

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
    if (isset($_SESSION["id"])) {
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
 <li><a href="signup.php">Sign up</a></li>     
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


<h1 align="center">CLIENT'S POFILE</h1>
<div class="container">
  <form action="update1.php" method="POST" enctype="multipart/form-data" >
  
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $_SESSION['id'];?>" />

  <div class="imagediv">
<div id="my_camera"><img src="saveimages/<?php echo $_SESSION['image_name']; ?>" width="200" height="200"  id="blah" /></div>   <!--for displaying video of webcam-->
<table  align="center"  width="270">
<th>
<label style="margin-left:20px"; id="choose">Choose mode of photo upload :</label><br/>
</th>
<tr>
<td align="center" colspan="2">
<input type="radio" name="rad"  onclick="disp(this.id)" id="device" value="d" /> <span id="l">Local Device</span> <input type=radio name="rad"
                        onclick="disp(this.id)" id="cam" value="w"/><span id="w">Webcam</span>   </label>
</td>
</tr>

<tr  align="center" >
<td colspan="2">
<input type="file" accept="image/*"  onchange="readURL(this);" id="i1"  name="pic" style="display:none" /> 
<input type="button" style="display:none;" value="Connect Webcam"  id="i2"  onClick="setup(); $(this).hide().next().show();" />
<input type="button" value="Take Snapshot" onClick="take_snapshot();show();" style="display:none" id="snap" ><br/>
</td>
</tr>

<tr  align="center" >
<td colspan="2" >
<input type="button" value="Take another picture" style="display:none;" id="another" onclick="another_pic()"><br />
<input type="button" value="Upload" style="display:none;" id="upload" onclick="upload_pic()">
</td>
</tr>
</table>



  <br/>
  <br />
  </div>

   <div class="form-group">
     <label for="Firstname">First Name:</label>
       <input type="text" class="form-control" id="fname" value="<?php echo $_SESSION['fname'];?>"placeholder="Enter firstname" name="fname"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Stylecolor',0),ShowPicture('Styleeye',0),ShowPicture('Styletaste',0))">
      </div>
       <div class="form-group">
      <label for="Lastname">Last Name:</label>
       <input type="text" class="form-control" id="lname" value="<?php echo $_SESSION['lname'];?>" placeholder="Enter lastname" name="lname" onfocus="(ShowPicture('Stylehand',0),ShowPicture('Styleeye',0),ShowPicture('Stylecolor',0),ShowPicture('Styletaste',0))">
    </div>
    <div class="form-group">
     <label for="Fathersname">Father's Name:</label>
       <input type="text" class="form-control" id="ffname"  value="<?php echo $_SESSION['ffname'];?>"placeholder="Enter father's name" name="ffname"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Stylecolor',0),ShowPicture('Styleeye',0),ShowPicture('Styletaste',0))">

    </div>
     <div class="form-group">
     <label for="Mothersname">Mother's Name:</label>
       <input type="text" class="form-control" id="mfname"  value="<?php echo $_SESSION['mfname'];?>" placeholder="Enter mother's name" name="mfname"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Stylecolor',0),ShowPicture('Styleeye',0),ShowPicture('Styletaste',0))">

     <div class="form-group">
     <label for="Date of Birth">Date of Birth:</label>
       <input type="date" class="form-control" id="dob"  value="<?php echo $_SESSION['dob'];?>"  name="dob"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Styleeye',0),ShowPicture('Stylecolor',0),ShowPicture('Styletaste',0))">
    </div>

      <div class="form-group">
     <label for="Gender">Gender:</label>
     <select id="gender" class="form-control" name="gender" onfocus="(ShowPicture('Stylehand',0),ShowPicture('Stylecolor',0),ShowPicture('Styleeye',0),ShowPicture('Styletaste',0))">
   <option value="">- Choose -</option>
  <option value="male"
  <?php
  if($_SESSION['gender']=='male')
  echo"selected"
  ?>
  >Male</option>
<option value="female"
 <?php
  if($_SESSION['gender']=='female')
  echo"selected"
  ?>
  >Female</option>

</select>
   </div>

    <div class="form-group">
     <label for="Address">Address</label>
       <input type="text" class="form-control"  value="<?php echo $_SESSION['address'];?>" id="address" placeholder="Enter address" name="address"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Styleeye',0),ShowPicture('Stylecolor',0),ShowPicture('Styletaste',0))">
    </div>
     <div class="form-group">
     <label for="weight">Weight:</label>
      <input type="number" class="form-control"  value="<?php echo $_SESSION['weight'];?>" id="weight" placeholder="Enter your weight" name="weight"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Styleeye',0),ShowPicture('Stylecolor',0),ShowPicture('Styletaste',0))">
    </div>

    <div class="form-group">
     <label for="Birth Place">Birth Place:</label>
      <input type="text" class="form-control"  value="<?php echo $_SESSION['birthplace'];?>" id="birthplace" placeholder="Enter birthplace" name="birthplace"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Styleeye',0),ShowPicture('Stylecolor',0),ShowPicture('Styletaste',0))">
    </div>
    <div class="form-group">
     <label for="Birth Time">Birth Time:</label>
      <input type="time" class="form-control" id="birthtime"  value="<?php echo $_SESSION['birthtime'];?>" placeholder="Enter birthtime" name="birthtime"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Styleeye',0),ShowPicture('Stylecolor',0),ShowPicture('Styletaste',0))">
    </div>
    <div class="form-group">
     <label for="Location where you lived maximum time">Place where you stayed the longest:</label>
     <input type="text" class="form-control"  value="<?php echo $_SESSION['maxloc'];?>" id="maxloc" placeholder="Enter location" name="maxloc"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Styleeye',0),ShowPicture('Stylecolor',0),ShowPicture('Styletaste',0))">
     </div>

    <div class="form-group">
     <label for="Hands">Choose type of your hands:</label>

     <input type="text" class="form-control" name="t4"  value="<?php echo $_SESSION['t4'];?>"  id="t4" onfocus="(ShowPicture('Stylehand',1),ShowPicture('Styleeye',0),ShowPicture('Stylecolor',0),ShowPicture('Styletaste',0))">
<div id="Stylehand"><img src="images/Types-of-Hand.png" border="1" width="650" height="400" alt="hand" usemap="#handcollage">
<map name="handcollage">
  <area shape="rect" coords="0,0,80,400" alt="square" name="square" href="#" title="square" id="square" onclick="hand(this.id)";>
<area shape="rect" coords="80,0,180,400" alt="spatulate" name="spatulate" href="#" title="spatulate" id="spatulate" onclick="hand(this.id)";>
<area shape="rect" coords="180,0,270,400" alt="conical" name="conical" href="#" title="conical" id="conical" onclick="hand(this.id)";>
<area shape="rect" coords="270,0,360,400" alt="knotty" name="knotty" href="#" title="knotty" id="knotty" onclick="hand(this.id)";>
<area shape="rect" coords="360,0,450,400" alt="pointed" name="pointed" href="#" title="pointed" id="pointed" onclick="hand(this.id)";>
<area shape="rect" coords="450,0,560,400" alt="elemental" name="elemental" href="#" title="elemental" id="elemental" onclick="hand(this.id)";>
<area shape="rect" coords="560,0,650,400" alt="mixed" name="mixed" href="#" title="mixed" id="mixed" onclick="hand(this.id)";>
</map>
</div>



    </div>
    <div class="form-group">
     <label for="Eyes">Choose type of your eyes:</label>
     <input type="text" class="form-control" name="t3"  value="<?php echo $_SESSION['t3'];?>"  id="t3" onfocus="(ShowPicture('Stylehand',0),ShowPicture('Stylecolor',0),ShowPicture('Styleeye',1),ShowPicture('Styletaste',0))">
<div id="Styleeye"><img src="images\fresh-look-color-blends.jpg" border="1" width="550" height="407" alt="eye" usemap="#eyecollage">
<map name="eyecollage">
  <area shape="rect" coords="0,0,180,130" alt="gray" name="gray" href="#" title="gray" id="gray" onclick="eye(this.id)";>
  <area shape="rect" coords="180,0,370,130" alt="green" href="#" name="green"  title="green" id="green" onclick="eye(this.id)";>
  <area shape="rect" coords="370,0,550,130" alt="brown" href="#" name="brown"  title="brown" id="brown" onclick="eye(this.id)";>
  <area shape="rect" coords="0,130,180,260" alt="amethyst" href="#" name="amethyst"  title="amethyst" id="amethyst" onclick="eye(this.id)";>
  <area shape="rect" coords="180,130,370,260" alt="blue" href="#" name="blue"  title="blue" id="blue" onclick="eye(this.id)";>
  <area shape="rect" coords="370,130,550,260" alt="turquoise" href="#" name="turquoise"  title="turquoise" id="turquoise" onclick="eye(this.id)";>
  <area shape="rect" coords="0,270,180,406" alt="hazel" href="#" name="hazel"  title="hazel" id="hazel" onclick="eye(this.id)";>
  <area shape="rect" coords="180,270,370,406" alt="sapphire" href="#" name="sapphire"  title="sapphire" id="sapphire" onclick="eye(this.id)";>
  <area shape="rect" coords="370,270,550,406" alt="honey" href="#" name="honey"  title="honey" id="honey" onclick="eye(this.id)";>
</map>
</div>



    </div>
    <div class="form-group">
     <label for="Color">Choose any color:</label>

      <input type="text" class="form-control" name="t5"  value="<?php echo $_SESSION['t5'];?>"  id="t5" onfocus="(ShowPicture('Stylehand',0),ShowPicture('Styleeye',0),ShowPicture('Styletaste',0),ShowPicture('Stylecolor',1))">
<div id="Stylecolor"><img src="images\color.png" border="1" width="400" height="400" alt="eye" usemap="#colorcollage">
<map name="colorcollage">
  <area shape="poly" coords="152,20,246,21,230,88,170,88,152,20" alt="orange" name="orange" href="#" title="orange" id="orange" onclick="color(this.id)";>
  <area shape="poly" coords="247,21,330,68,280,120,228,90,247,21" alt="saffron" name="saffron" href="#" title="saffron" id="saffron" onclick="color(this.id)";>
  <area shape="poly" coords="330,68,377,152,308,170,280,120,330,68" alt="yellow" name="yellow" href="#" title="yellow" id="yellow" onclick="color(this.id)";>
  <area shape="poly" coords="379,151,377,247,310,230,310,168,379,151" alt="light-yellow" name="light-yellow" href="#" title="light-yellow" id="light-yellow" onclick="color(this.id)";>
  <area shape="poly" coords="310,230,377,248,331,331,280,281,310,230" alt="lime" name="lime" href="#" title="lime" id="lime" onclick="color(this.id)";>
  <area shape="poly" coords="280,280,330,331,246,377,231,310,280,280" alt="green" name="green" href="#" title="green" id="green" onclick="color(this.id)";>
  <area shape="poly" coords="228,310,246,376,152,378,170,309,228,310" alt="light-blue" name="light-blue" href="#" title="light-blue" id="light-blue" onclick="color(this.id)";>
  <area shape="poly" coords="170,311,152,378,68,330,118,281,170,311" alt="blue" name="blue" href="#" title="blue" id="blue" onclick="color(this.id)";>
  <area shape="poly" coords="118,280,70,330,21,247,89,230,118,280" alt="indigo" name="indigo" href="#" title="indigo" id="indigo" onclick="color(this.id)";>
  <area shape="poly" coords="90,229,21,248,21,151,89,169,90,229" alt="violet" name="violet" href="#" title="violet" id="violet" onclick="color(this.id)";>
  <area shape="poly" coords="90,168,22,151,70,68,119,120,90,168" alt="magenta" name="magenta" href="#" title="magenta" id="magenta" onclick="color(this.id)";>
  <area shape="poly" coords="119,118,68,69,152,20,170,90,119,118" alt="red" name="red" href="#" title="red" id="red" onclick="color(this.id)";>
</map>
</div>


    </div>

     <div class="form-group">
     <label for="Taste">Choose any taste:</label>
      <input type="text" class="form-control" name="t2"  value="<?php echo $_SESSION['t2'];?>"  id="t2" onfocus="(ShowPicture('Stylehand',0),ShowPicture('Stylecolor',0),ShowPicture('Styleeye',0),ShowPicture('Styletaste',1))">
<div id="Styletaste"><img src="images\collage.jpg" border="1" width="550" height="407" alt="taste" usemap="#tastecollage">
<map name="tastecollage">
  <area shape="rect" coords="0,0,165,200" alt="bitter" name="bitter" href="#" title="bitter" id="bitter" onclick="taste(this.id)";>
  <area shape="rect" coords="0,200,165,406" alt="spicy" href="#" name="spicy"  title="spicy" id="spicy" onclick="taste(this.id)";>
  <area shape="rect" coords="165,0,385,406" alt="salt" href="#" name="salt"  title="salt" id="salt" onclick="taste(this.id)";>
  <area shape="rect" coords="385,0,550,200" alt="sour" href="#" name="sour"  title="sour" id="sour" onclick="taste(this.id)";>
  <area shape="rect" coords="385,200,550,406" alt="sweet" href="#" name="sweet"  title="sweet" id="sweet" onclick="taste(this.id)";>
</map>
</div>
 </div>


 <div class="form-group">
     <label for="sound">Choose music of your choice:</label>
    <select id="sound" class="form-control"  value="<?php echo $_SESSION['sound'];?>"  name="sound" onfocus="(ShowPicture('Stylehand',0),ShowPicture('Stylecolor',0),ShowPicture('Styleeye',0),ShowPicture('Styletaste',0))" ;>
  <option value="">- Select track -</option>
  <option value="images/SleepAway.mp3"
 <?php
  if($_SESSION['sound']=='images/SleepAway.mp3')
  echo"selected"
  ?>
  >Flying in clouds</option>
  <option value="images/Kalimba.mp3"
  <?php
  if($_SESSION['sound']=='images/Kalimba.mp3')
  echo"selected"
  ?>
  >Chilling on beach</option>
</select>
<br/>

<audio id="player" controls="controls">
  <source id="mp3_src" src="/teachings/2011_01_09_Cut.mp3" type="audio/mp3" />Your browser does not support the audio element.
</audio>
    </div>


    <div class="form-group">
     <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" value="<?php echo $_SESSION['email'];?>"placeholder="Enter email" name="email"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Stylecolor',0),ShowPicture('Styleeye',0),ShowPicture('Styletaste',0))">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  value="<?php echo $_SESSION['pwd'];?>" id="pwd" placeholder="Enter new password" name="pwd"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Stylecolor',0),ShowPicture('Styleeye',0),ShowPicture('Styletaste',0))">
    </div>
        <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control"  value="<?php echo $_SESSION['cpwd'];?>" id="pwd" placeholder="Confirm your password" name="cpwd"  onfocus="(ShowPicture('Stylehand',0),ShowPicture('Stylecolor',0),ShowPicture('Styleeye',0),ShowPicture('Styletaste',0))">
    </div>

  <input type="text" id="hid"  style="display:none;" name="hid" />

    <input type="submit"  name="submit" class="btn btn-success" value="Update" onfocus="(ShowPicture('Stylehand',0),ShowPicture('Styleeye',0),ShowPicture('Stylecolor',0),ShowPicture('Styletaste',0))"/>
     <input type="button"  onclick="location.href='vp.php';" value="Cancel" class="btn btn-warning" />
      </form>

 </div>
<?php  ?>
</body>
</html>