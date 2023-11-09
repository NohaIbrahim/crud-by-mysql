<?php

if(session_status()===PHP_SESSION_NONE)session_start();
include('../inc/header.php'); 
include('../inc/conn.php'); 
if($_SESSION['password']=='admin123456'){
    header('location:../design/iindex.php');
        exit;
 }
   if(isset($_GET['id'])){
    $id=$_GET['id'];
    $mysql="SELECT *  FROM `products` WHERE `id`='$id'";
    $res=mysqli_query($conn,$mysql);
    $row=mysqli_fetch_assoc($res); 
    if($row){;
       // فى حاله مش موجودid   mysqlifetch=null
       ?>
        <div class="row">
        <style>
        img{
            width: 90px;
            height: 60px;
        }
       
    </style>
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
                    
                    </tr>
                </thead>
                <tbody>
                    
                    
                 
                       <tr>
                       <td><?php echo $row['id']?></td>
                       <td><?php echo $row['name']?></td>
                       <td><?php echo $row['price']?></td>
                       <td><?php echo $row['quantity']?></td>
                       <td><?php echo'<img src="data:image/png;base64,'.base64_encode($row['image']).'">' ?></td>
                       <td><?php echo $row['catogray']?></td>
                      
                       
                  

                    <?php //}?>
                    
                    </tr>

                   
                </tbody>
            </table>
            <style>h1{background-color: blue;background: white;

            }
            </style>
            <?php echo "<h3 >order complete</h3>";?>
        </div>
    </div>

<?php  
 
  
    }
      
   else{


  header('location:../design/iindex.php');
   }}else
   header('location:../design/iindex.php');
   include('../inc/footer.php'); ?>
