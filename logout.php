<?php
session_start();
if(session_destroy())
{
header("Location: 11.php");
}
?>