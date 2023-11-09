<?php
include '../inc/header.php';
  
   include '../inc/nav.php';
     
     if(session_status()===PHP_SESSION_NONE)session_start();
    
     ?>

    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto  my-5 ">
              <h2 class=" border p-2 my-2 text-center"> Register </h2>
                
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
                          
                        


                    
                   
                   
                  
               

                <form  action="../handlender/handelregister.php" method="POST" class="border p-3" >
                
                       
                    <div class="form group p-2 my-1" >
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="form group p-2 my-1">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form group p-2 my-1">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control my-3 border border-success">
                    </div>
                    
                    <div class="form group p-2 my-1">
                    <input type="submit" value="USER" class="btn btn-danger ">
               
                       <input type="submit" value="Admin" class= "btn btn-info mx-5" >
               
                     
                   
                    </div>

                </form>
            </div>
        </div>
    </div>


   
   

    
<?php include '../inc/footer.php';?>
  