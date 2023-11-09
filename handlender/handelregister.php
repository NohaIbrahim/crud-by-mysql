<?php
include"../core/function.php";
include"../core/valdate.php";
if(session_status()===PHP_SESSION_NONE)session_start();


$errors=[];

if(checkRequestMethod("POST")&&checkisset('name')){

   foreach($_POST as $key=>$value){
   $$key =santizeinput($value);
   
   }
   
    if(reqinput($name)){
   $errors[]="name require";
   }
   else if(is_numeric($name)){
    $errors[]="name digit";
   }
   else if(minreqinput($name,8)){
    $errors[]= 'min cha 8';

   }
   else if(maxreqinput($name,20)){
    $errors[]= 'max cha 20';
   }
  
  // else if(preg_match('/^[a-z\d_]$',$name)==false){
  //   $errors[]= 'name must string';

  //  } 

   

   else if(reqinput($email)){
    $errors[]="email require";
    }   
   else if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $errors[]='error email';
   }

   else if(reqinput($password)){
        $errors[]="password require";
        }
   
    if (empty($errors)){
      // if($password=='admin123456'){//$_post['password']=='admin123456'.$k=password
      
      //   header('location:../design/iindex.php');
      //   exit;
      // }
      //   else { 
      //   header('location:../design/order.php');
      //   exit;
      //   } 
      $_SESSION['password']=$password;

      header('location:../design/iindex.php');
      //   exit;
        
    }
  else{  $_SESSION['errors']=$errors;
   header('location:../design/rgister.php');
exit;
    }
   
}
else header('location:../design/rgister.php');