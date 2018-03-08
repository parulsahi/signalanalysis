<?php

//set random name for the image, used time() for uniqueness



$filename=$_GET['username'];

//$filename =  time() . '.jpg';

$filepath = 'saveimages/';


move_uploaded_file($_FILES['webcam']['tmp_name'], $filepath.$filename);

//header('Location: signup.html');
echo $filepath.$filename;

?>
