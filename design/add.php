

<?php
 if(session_status()===PHP_SESSION_NONE)session_start();
 if($_SESSION['password']!='admin123456'){
    header('location:../design/rgister.php');
        exit;
 }

 
 include('../inc/header.php'); 
 
 include('../inc/nav2.php'); ?>
 
    <h1 class="text-center col-12 bg-info py-3 text-white my-3  ">Add New product</h1>
    <?php   if(isset($_SESSION["errors"])){?>
                    <div class="alert alert-danger">
                    <?php
                        foreach($_SESSION['errors'] as $error)
                        echo $error; 
                           unset($_SESSION['errors']);  ?>
                           </div>
                <?php         
              }
              ?>
    <div class="col-md-6 offset-md-3">
        <form class="my-2 p-3 border" action="../handlender/add.php" method="POST" enctype="multipart/form-data" >
            <div class="form-group">
            <div class="form-group">
               <div class="form-group">
                <label for="id">ID</label>
                <input type="number" name="id" class="form-control" id="id" aria-describedby="emailHelp">
            </div>
                <label for="exampleInputName1">name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" >
            </div>
            
            <div class="form-group">
                <label for="price">price</label>
                <input type="number" name="price" class="form-control" id="price" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="quantity">quantity</label>
                <input type="number" name="quantity" class="form-control" id="quantity">
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>
            <div class="form-group">
                <label for="catogray">catogray_id</label>
                <input type="number" name="catogray" class="form-control" id="catogray">
            </div>
         
         
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
<?php  include('../inc/footer.php'); ?>

 
  