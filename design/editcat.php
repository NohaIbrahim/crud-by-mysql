<?php
include('../inc/header2.php'); 
if(session_status()===PHP_SESSION_NONE)session_start();
if($_SESSION['password']!='admin123456'){
    header('location:../design/rgister.php');
        exit;
 }
 include('../inc/nav3.php');



 if(isset($_GET['id'])&&is_numeric($_GET['id'])){
    $id=$_GET['id'];
    $mysql="SELECT *  FROM `catogray` WHERE `id`='$id'";
    $res=mysqli_query($conn,$mysql);
    $row=mysqli_fetch_assoc($res);
    if(!$row){//فى حاله مش موجودid   mysqlifetch=null
    $_SESSION['error']='data error';
    header('location:../design/iindexcat.php');
  
        die;
    }else 
 



?>

    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit Info About catogray</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border"action="updatecat.php" method="POST" enctype="multipart/form-data" >
            <div class="form-group">
                <label for="Name1"> Name</label>
                <input type="text" name="name"  value="<?php echo $row['name']?>"     class="form-control" id="exampleInputName1" >
            </div>
           
            <div class="form-group">
                <label for="id">id</label>
                <input type="number" name="id"  value="<?php echo $row['id']?>"class="form-control" id="id">
            </div>
            
         
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
<?php  include('../inc/footer.php'); 
}else {header('location:../design/iindexcat.php');
    die;
    }

?>

 
  