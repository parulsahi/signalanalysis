<?php
require('db.php');
$status = "";
    
if(isset($_POST['new']) && $_POST['new']==1)
{
    $id=$_POST['id'];
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
    $image_name=$_POST['hid'];
    $rad=$_POST['rad'];
                                    //uploading new photo to saveimages folder
     $filename=$image_name;  //imagename
if($rad=='d')    //if image is taken from local device
{

	$filepath = 'saveimages/';
move_uploaded_file($_FILES['pic']['tmp_name'], $filepath.$filename);
}
//echo $filepath.$filename;


$update="UPDATE `users` SET `fname`='".$fname."',`lname`='".$lname."',`ffname`='".$ffname."',`mfname`='".$mfname."',
`dob`='".$dob."',`gender`='".$gender."',`address`='".$address."',`weight`='".$weight."',`birthplace`='".$birthplace."',
`birthtime`='".$birthtime."',`t4`='".$t4."',`t3`='".$t3."',`t5`='".$t5."',`t2`='".$t2."',`maxloc`='".$maxloc."',`sound`='".$sound."',
`image_name`='".$image_name."'
 WHERE id='".$id."'";
$res=mysqli_query($con, $update) or die(mysqli_error($con));
 if($res)
 {
echo $status = "Record updated Successfully";
//'alert('Record updated Successfully');'
echo"</br>Click here to <a href='viewusers.php'>Go Back</a>";

//header("Location: viewusers.php");


}
  else
     {
      echo("Error description: " . mysqli_error($con));
      }
  }
?>
