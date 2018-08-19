<?php
session_start();
    require('db.php');
   $id=$_SESSION['id'];
   
if(!is_dir("recordings"))
{
	$res = mkdir("recordings",0777); 
}

// pull the raw binary data from the POST array
$data = substr($_POST['data'], strpos($_POST['data'], ",") + 1);
// decode it
$decodedData = base64_decode($data);
// print out the raw data, 
//echo ($decodedData);
$filename = 'audio_recording_' . date( 'Y-m-d-H-i-s' ) .'.mp3';
// write the data out to the file
$fp = fopen('recordings/'.$filename, 'wb');
fwrite($fp, $decodedData);
fclose($fp);
   $query = "INSERT into  `sound` (`id`,`aud_name`) VALUES ('$id','$filename')";
	$result = mysqli_query($con,$query);


  if(!is_dir("file"))
{
	$res = mkdir("file",0777); 
}

 $ext = ".txt";
 $namef= $_SESSION['id'];
 $textfile = $namef.$ext;
 $filename=$filename.PHP_EOL;
 file_put_contents('file/'.$textfile, $filename, FILE_APPEND);


 $q="UPDATE `users` SET `recordingfile`='".$textfile."' WHERE id='".$id."'";
 
  $r = mysqli_query($con,$q);





?>










