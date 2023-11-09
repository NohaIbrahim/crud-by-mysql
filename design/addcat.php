<?php
 if(session_status()===PHP_SESSION_NONE)session_start();
 if($_SESSION['password']!='admin123456'){
    header('location:../design/rgister.php');
        exit;
 }

 
 include('../inc/header2.php'); 
 
 include('../inc/nav3.php'); ?>
 
    <h1 class="text-center col-12 bg-info py-3 text-white my-3  ">Add New catogray</h1>
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
        <form class="my-2 p-3 border" action="../handlender/addcat.php" method="POST"  >
            <div class="form-group">
            <div class="form-group">

               <div class="form-group">
                <label for="id">id</label>
                <input type="number" name="id" class="form-control" id="id" aria-describedby="emailHelp">
            </div>
                <label for="exampleInputName1">name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName1" >
            </div>
            
            
            
         
         
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
   
<?php  include('../inc/footer.php'); ?>

 
  