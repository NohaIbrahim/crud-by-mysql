<?php
include"../core/function.php";
include"../core/valdate.php";
include"../inc/conn.php";
if(session_status()===PHP_SESSION_NONE)session_start();


$errors=[];

if(checkRequestMethod("POST")&&checkisset('name')){

   foreach($_POST as $key=>$value){
   $$key =santizeinput($value);
   
   }//$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
   
    if(reqinput($name)){
   $errors[]="name require";
   }
  
   else if(minreqinput($name,8)){
    $errors[]= 'min cha 8';

   }
   else if(maxreqinput($name,20)){
    $errors[]= 'max cha 20';
   }
  
   

   else if(reqinput($id)){
        $errors[]="id require";
        }
       
       
   
    if (empty($errors)){
        $sql="INSERT INTO `catogray`(`name`,`id`) VALUES('$name','$id')";
        mysqli_query($conn,$sql);
     // echo  mysqli_affected_rows($con);لو الداتا دخلت الناتح=1
    
     //  echo mysqli_connect_error($con);
     
     if(mysqli_affected_rows($conn)==1){
         $_SESSION['success'] ='data suc';
       
       header('location:../design/iindexcat.php');
       die;}
       else{
        header('location:../design/addcat.php');
           exit;
       }
        
       
        
    }
  
     else{  $_SESSION['errors']=$errors;
             header('location:../design/addcat.php');
             exit;
    }
   
}
else header('location:../design/rgister.php');