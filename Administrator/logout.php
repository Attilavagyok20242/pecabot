<?php
 include 'connection.php';
session_start();
$id=0;
$nev="";
$jelszo="";
if(isset($_SESSION['id'])&&isset($_SESSION['nev'])&&isset($_SESSION['jelszo']))
{
   $id=$_SESSION['id'];
   $nev=$_SESSION['nev'];
   $jelszo=$_SESSION['jelszo'];
  
   $query = "UPDATE felhasznalo SET aktív = false WHERE id = " . $_SESSION['id'];
   mysqli_query($con, $query);
   session_destroy();
}
header('Location: http://localhost/mappa/Egeszegyben/asd/index.php'); 
?>