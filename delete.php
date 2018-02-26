<?php
include("db.php");
$delete_id=$_GET['del'];  
$delete_query="delete  from `users` WHERE id='$delete_id'";
$run=mysqli_query($con,$delete_query);
if($run)  
{
    echo "<script>window.open('viewusers.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>