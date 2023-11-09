<?php
if(session_status()===PHP_SESSION_NONE)session_start();


 include('../inc/header.php'); 
 if($_SESSION['password']=='admin123456'){
    include('../inc/nav2.php'); }
    $mysql=" SELECT * FROM `products`";
    $res=mysqli_query($conn,$mysql);
  
    
    ?>
    <style>
        img{
            width: 90px;
            height: 60px;
        }
    </style>
 
    <h1 class="text-center col-12 bg-primary py-3 text-white my-2">product Page</h1>
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
                    <th scope="col">price</th>
                    <th scope="col">quantity</th>
                    <th scope="col">image</th>
                    <th scope="col">catogray</th>
                    <?php  if($_SESSION['password']=='admin123456'){?>  <th scope="col">Edit</th>
                    <th scope="col">Delete</th> <?php }?>
                    <?php  if($_SESSION['password']!='admin123456'){?> <th scope="col">makeorder</th>
                   <?php }?>
     
                    </tr>
                </thead>
                <tbody>
                    <?php $rows=mysqli_fetch_all($res,MYSQLI_ASSOC); 
                    foreach($rows as $row){
                       

                    ?>
                    
                   
                   
                   <tr>
                       
                       <td><?php echo $row['id']?></td>
                       <td><?php echo $row['name']?></td>
                       <td><?php echo $row['price']?></td>
                       <td><?php echo $row['quantity']?></td>
                       <td><?php echo'<img src="data:image/png;base64,'.base64_encode($row['image']).'">' ?></td>
                       <td><?php echo $row['catogray']?></td>
                       



                       <!-- <td>
                                    <a href="add.php?id=<?php echo $row['id']?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> </a>
                                    <a href="add.php?id=<?php echo $row['id']?>" class="btn btn-info"><i class="fa-solid fa-edit"></i> </a>
                                </td>
 -->

                    
                        
                        <?php  if($_SESSION['password']=='admin123456'){?>
                        <td>
                            <a class="btn btn-info" href="edit.php?id=<?php echo $row['id']?>"> <i class="fa-solid fa-edit"></i> </a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="delet.php?id=<?php echo $row['id']?>"> <i class="fa fa-close"></i> </a>
                        </td> <?php }?>
                        <?php  if($_SESSION['password']!='admin123456'){?> <td ><a class="btn btn-info" href="order.php?id=<?php echo $row['id']?>"> 
                           buy</a></td>
                   <?php }?>
                    </tr>

                    <?php }?>
                    
                   
                </tbody>
            </table>
        </div>
    </div>

<?php  include('../inc/footer.php'); ?>

 
  