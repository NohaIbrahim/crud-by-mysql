<?php
//  if($_SESSION['password']!='admin123456'){
//      header('location:../design/rgister.php');
//     exit;  }
include"../core/function.php";
include"../core/valdate.php"; 
include"../inc/conn.php";

if(session_status()===PHP_SESSION_NONE)session_start();


$errors=[];

if(checkRequestMethod("POST")){

   foreach($_POST as $key=>$value){
   $$key =santizeinput($value);
   
   }//$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
   
    if(reqinput($name)){
   $errors[]="name require";
   }
  
  //  else if(minreqinput($name,8)){
  //   $errors[]= 'min cha 8';

  //  }
  //  else if(maxreqinput($name,20)){
  //   $errors[]= 'max cha 20';
  //  }

  else if(reqinput($price)){
    $errors[]="price require";
    }   
  

   else if(reqinput($quantity)){
        $errors[]="quantity require";
        }
        else if(reqinput($catogray)){
            $errors[]="cat require";
            }
       
   $id=$_POST['id'];
   if(!empty($errors)){  $_SESSION['errors']=$errors;
    // print_r($_SESSION['errors']);
      header('location:../design/rgister.php');//make relation to index 
  exit;
      }
    if (empty($errors)){
      //  $sql="INSERT INTO `products`(`id`,`name`,`price`,`quantity`,`image`) VALUES('$id','$name','$price','$quantity','$image')";
      
     
      $sql = "UPDATE `products` SET  `price`='$price' ,`quantity`='$quantity', `image`='image' ,`catogray`='$catogray' ,`name`='$name'
      WHERE `id`='$id' ";
     $res= mysqli_query($conn,$sql);
    
    
     if(mysqli_affected_rows($conn)==1){
         $_SESSION['success'] ='data suc';
          header('location:../design/iindex.php');
       die;
      }
        else{
            header('location:../design/edit.php');
            exit;
        }
       
        
    }
  
   
}?>

