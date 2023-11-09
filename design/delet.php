<?php
if(session_status()===PHP_SESSION_NONE)session_start();
include ('../inc/conn.php'); 
if($_SESSION['password']!='admin123456'){
    header('location:../design/rgister.php');
    exit; ; }
// $x=null;
// if($x==null){(!$x=$x==null)
//     echo 'hello';
// }
   if(isset($_GET['id'])){
    $id=$_GET['id'];
    $mysql="SELECT *  FROM `products` WHERE `id`='$id'";
    $res=mysqli_query($conn,$mysql);
    if(!mysqli_fetch_assoc($res)){//فى حاله مش موجودid   mysqlifetch=null
    $_SESSION['error']='data error';
    header('location:../design/iindex.php');
  
        die;
    }
      
   else{$mysql="DELETE FROM `products` WHERE `id`='$id'";
$res=mysqli_query($conn,$mysql);
if(mysqli_affected_rows($conn)){
    $_SESSION['success']='deleting succfull';
}}
//mysqli_fetch_all
  header('location:../design/iindex.php');
   }