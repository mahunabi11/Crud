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
    
    if(isset($_POST['add'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cell = $_POST['cell'];
        $age = $_POST['age'];
        $location = $_POST['location'];
         
        if(isset($_POST['gender'])){
            
            $gender = $_POST['gender'];
        }
           
          
        
       

            
            
            
            if(empty($name)|| empty($email)|| empty($cell)|| empty($age)|| empty($location)|| empty($gender)|| empty($_FILES['photo']['tmp_name'])){
                
                $mess = '<p class="alert alert-danger">Empty Fields Required !<button data-dismiss="alert" class="close">&times;</button></p>';
                
            }elseif(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
                
               $mess = '<p class="alert alert-danger">Invalid Email !<button data-dismiss="alert" class="close">&times;</button></p>';
                
            }elseif($age < 20){
                
                  
               $mess = '<p class="alert alert-danger">Under 20 not Eligible !<button data-dismiss="alert" class="close">&times;</button></p>';
            }else{
                
                $data = fileUpload($_FILES['photo'], 'students/', ['png', 'jpg', 'docx',  'pdf'],[
                    
                    'type'        => 'image',
                    'file_name'   => 'Photo',
                    'fname'        => $name,
                    'lname'        => $location
                ]); 
                
                if(!empty($data['mess'])){
                    $mess = $data['mess'];
                }else{
                     $photo = $data['file_name'];
                
                $sqli = "INSERT INTO students (name, email, cell, age, location, gender, photo, status ) VALUES('$name', '$email', '$cell', '$age', '$location', '$gender', '$photo', 'active' )";
               $connection -> query($sqli);
               $mess = '<p class="alert alert-success">Data Stable!<button data-dismiss="alert" class="close">&times;</button></p>';
                }
              
            }
        
          
        }
    
    
    
    
    ?>
    
    
    
    
    
     <div class="container">
         <div class="log w-50 mx-auto mt-3 ">
            <a class="btn btn-success btn-sm" href="table.php">All students</a>
             <div class="card">
                 <div class="card-body ">
                       <h2 class="text-center  p-2">Registration</h2>
                         <?php
                               if(isset($mess)){
                               echo $mess;
                             }
                         ?>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                   <label for="">Name</label>
                    <input name="name"  class="form-control"  type="text">
                </div> 
                  <div class="form-group">
                   <label for="">Email</label>
                    <input name="email" class="form-control" type="email">
                </div>
                   <div class="form-group">
                   <label for="">Cell</label>
                    <input name="cell" class="form-control" type="text">
                </div>
                  
                  
                  <div class="form-group">
                   <label for="">Age</label>
                    <input name="age" class="form-control" type="text">
                 </div>
                   
                   <div class="form-group">
                   <label for="">Location</label>
                    
                    <select name="location" class="form-control" name="" id="">
                        <option value="">--Select--</option>
                        <option value="Banani">Banani</option>
                        <option value="Gulshan">Gulshan</option>
                        <option value="Dhanmondi">Dhanmondi</option>
                        <option value="Mirpur">Mirpur</option>
                        <option value="Pubail">Pubail</option>
                        <option value="Joydebpur">Joydebpur</option>
                        
                    </select>
                 </div>
                 <div class="form-group">
                   <label for="">Gender</label>
                   <br>
                  <input name="gender" value="male" type="radio" id="male"><label for="male">Male</label>
                  <input name="gender" value="female" type="radio" id="female"><label for="female">Female</label>
                </div>
                 <div class="form-group">
                     <label for="">Photo</label>
                     <input name="photo" type="file">
                 </div>
                  <div class="form-group">
                    <input name="add" class="btn btn-info " type="submit" value="Sign Up">
                </div>
            </form>
                 </div>
             </div>
         </div>
     </div>
    
    
    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>
