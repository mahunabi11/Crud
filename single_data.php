<?php include_once "db.php"; ?>
<?php  include_once "functions.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data validation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


       <?php
     
         if(isset($_GET['id'])){
             
             $id = $_GET['id'];
             
         }
          $sql = "SELECT * FROM students WHERE id = '$id'";   
        $data = $connection -> query($sql);
        
      $single_student =  $data -> fetch_assoc();
   
    ?> 
    
     <div class="container">
         <div class="log w-50 mx-auto mt-3 ">
             
             <div class="card">
               <img style="width:200px; margin:20px auto; display:block;" src="students/<?php echo $single_student['photo']?>" alt="">
                <table class="table table-striped">
                    <tr>
                        <td>Name</td>
                        <td><?php echo $single_student['name']?></td>
                    </tr>
                        <tr>
                        <td>Email</td>
                        <td><?php echo $single_student['email']?></td>
                    </tr>
                        <tr>
                        <td>Cell</td>
                        <td><?php echo $single_student['cell']?></td>
                    </tr>
                        <tr>
                        <td>Age</td>
                        <td><?php echo $single_student['age']?></td>
                    </tr>
                        <tr>
                        <td>Location</td>
                        <td><?php echo $single_student['location']?></td>
                    </tr>     
                        <tr>
                        <td>Gender</td>
                        <td><?php echo $single_student['gender']?></td>
                    </tr>
                </table>
                  
       
             </div>
         </div>
     </div>
    
    
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
