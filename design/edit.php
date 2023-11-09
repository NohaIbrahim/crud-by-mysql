<?php

 include('../inc/header.php'); 
if(session_status()===PHP_SESSION_NONE)session_start();
if($_SESSION['password']!='admin123456'){
    header('location:../design/rgister.php');
        exit;
 }
 include('../inc/nav2.php');



 if(isset($_GET['id'])&&is_numeric($_GET['id'])){
    $id=$_GET['id'];
    $mysql="SELECT *  FROM `products` WHERE `id`='$id'";
    $res=mysqli_query($conn,$mysql);
    $row=mysqli_fetch_assoc($res);
    if(!$row){//فى حاله مش موجودid   mysqlifetch=null
    $_SESSION['error']='data error';
    header('location:../design/iindex.php');
  
        die;
    }else 
 



?>

    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">Edit Info About product</h1>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border"action="update.php" method="POST"  >
            <div class="form-group">
                <label for="Name1"> Name</label>
                <input type="text" name="name"  value="<?php echo $row['name']?>"     class="form-control" id="exampleInputName1" >
            </div>
            <div class="form-group">
            <input type="hidden" value="<?php echo $id; ?>" name="id" />
                <label for="price">price</label>
                <input type="number" name="price" value="<?php echo $row['price']?>" class="form-control" id="price" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="quantity">quantity</label>
                <input type="number" name="quantity"  value="<?php echo $row['quantity']?>"class="form-control" id="quantity">
            </div>
            <!-- <div class="form-group">
                <label for="image">image</label>
                <input type="file" name="image"value="<?php echo'<img src="data:image/png;base64,'.base64_encode($row['image']).'">' ?>"
                        class="form-control" id="image">
            </div> -->
            
            <div class="form-group">
                <label for="catogray">catogray</label>
                <input type="text" name="catogray"  class="form-control" id="catogray">
            </div>
           
         
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
<?php  include('../inc/footer.php'); 
}else {header('location:../design/iindex.php');
    die;
    }

?>

 
  