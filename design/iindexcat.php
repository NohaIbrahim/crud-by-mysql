<?php
if(session_status()===PHP_SESSION_NONE)session_start();


 include('../inc/header2.php'); 
 include('../inc/nav3.php');
  
 if($_SESSION['password']!='admin123456'){
    header('location:../design/rgister.php');
    exit; ; }
    $mysql=" SELECT * FROM `catogray`";
    $res=mysqli_query($conn,$mysql);
  
    
    ?>
    
    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">catogray Page</h1>
    <?php   if(isset($_SESSION['success'])){?>
                    <div class="alert alert-info">
                    <?php
                         echo   $_SESSION['success'] ;
                      
                           unset($_SESSION['success']);  ?>
                           </div>
                <?php         
              }
              ?>
              <div class="row">
                  <div class="col-sm-12">
                      <table class="table">
                          <thead>
                              <tr>
                              <th scope="col">iD</th>
                              <th scope="col">Name</th>
                              
                                <th scope="col">Edit</th>
                              <th scope="col">Delete</th> 
                              
               
                              </tr>
                          </thead>
                          <tbody>
                              <?php $rows=mysqli_fetch_all($res,MYSQLI_ASSOC); 
                              foreach($rows as $row){
                                 
          
                              ?>
                              
                             
                             
                             <tr>
                             <td><?php echo $row['id']?></td>
                       <td><?php echo $row['name']?></td>
                       



                    
                        
                        <td>
                            <a class="btn btn-info" href="editcat.php?id=<?php echo $row['id']?>"> <i class="fa-solid fa-edit"></i> </a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="deletcat.php?id=<?php echo $row['id']?>"> <i class="fa fa-close"></i> </a>
                        </td> <?php }?>
                        


                   
                    
                   
                </tbody>
            </table>
        </div>
    </div>

<?php  include('../inc/footer.php'); ?>

 
  