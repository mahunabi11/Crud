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
    
//    Get Id for Updte information
    
    
    if(isset($_GET['id'])){
        
        $id_url = $_GET['id'];
    }

 
    
    //    Add students Form submit  
    if(isset($_POST['add'])){
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $cell = $_POST['cell'];
        $age = $_POST['age'];
        $location = $_POST['location'];
         
        if(isset($_POST['gender'])){
            
            $gender = $_POST['gender'];
        }
           
          
        
       

            
            
            
            if(empty($name)|| empty($email)|| empty($cell)|| empty($age)|| empty($location)|| empty($gender)){
                
                $mess = '<p class="alert alert-danger">Empty Fields Required !<button data-dismiss="alert" class="close">&times;</button></p>';
                
            }elseif(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
                
               $mess = '<p class="alert alert-danger">Invalid Email !<button data-dismiss="alert" class="close">&times;</button></p>';
                
            }elseif($age < 20){
                
                  
               $mess = '<p class="alert alert-danger">Under 20 not Eligible !<button data-dismiss="alert" class="close">&times;</button></p>';
            }else{
               
                 if(isset($_FILES['new_photo']['name'])){
                     
                    $data = fileUpload($_FILES['new_photo'], 'students/');
                    $photo_name = $data['file_name'];
//                    unlink('students/' . $_POST['old_photo']);
                      
                 }else {
                     $photo_name = $_POST['old_photo'];
                     
                 }
                
                $sqli = "UPDATE students SET 
                name='$name',
                email='$email',
                cell='$cell',
                age = '$age',
                location= '$location',
                photo = '$photo_name'
                WHERE id = '$id_url' ";
                
                $connection -> query($sqli);
                
               $mess = '<p class="alert alert-success">Data Updated!<button data-dismiss="alert" class="close">&times;</button></p>';
                }
              
            }
        
       
    
       $sqli = "SELECT * FROM students WHERE id='$id_url'";
       $data =   $connection -> query($sqli);
       $single_data =$data -> fetch_assoc();
    
    
    
    ?>
    
    
    
    
    
     <div class="container">
         <div class="log w-50 mx-auto mt-3 ">
            <a class="btn btn-success btn-sm" href="table.php">All Students</a>
             <div class="card">
                 <div class="card-body ">
                       <h2 class="text-center  p-2">Update Informaton</h2>
                         <?php
                               if(isset($mess)){
                               echo $mess;
                             }
                         ?>
                        <form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $id_url; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                   <label for="">User Name</label>
                    <input name="name"  class="form-control" value="<?php echo $single_data ['name']?>"  type="text">
                </div> 
                  <div class="form-group">
                   <label for="">Email</label>
                    <input name="email" class="form-control" value="<?php echo $single_data ['email']?>" type="email">
                </div>
                   <div class="form-group">
                   <label for="">Cell</label>
                    <input name="cell" class="form-control" value="<?php echo $single_data ['cell']?>" type="text">
                </div>
                  
                  
                  <div class="form-group">
                   <label for="">Age</label>
                    <input name="age" class="form-control" value="<?php echo $single_data ['age']?>" type="text">
                 </div>
                   
                   <div class="form-group">
                   <label for="">Location</label>
                    
                    <select name="location" class="form-control"  id="">
                        <option value="">-Select-</option>
                        <option <?php if($single_data['location']== 'Banani'): echo "selected"; endif;?> value="Banani">Banani</option>
                        <option <?php if($single_data['location']== 'Gulshan'): echo "selected"; endif;?>   value="Gulshan">Gulshan</option>
                        <option <?php if($single_data['location']== 'Dhanmondi'): echo "selected"; endif;?>
                        value="Dhanmondi">Dhanmondi</option>
                        <option <?php if($single_data['location']== 'Mirpur'): echo "selected"; endif;?>  value="Mirpur">Mirpur</option>
                        <option <?php if($single_data['location']== 'Pubail'): echo "selected"; endif;?>  value="Pubail">Pubail</option>
                        <option <?php if($single_data['location']== 'Joydebpur'): echo "selected"; endif;?>  value="Joydebpur">Joydebpur</option>
                        
                    </select>
                 </div>
                 <div class="form-group">
                   <label for="">Gender</label>
                   <br>
                  <input name="gender" <?php if($single_data['gender']== 'male'): echo "checked"; endif;?> value="male" type="radio" id="male"><label for="male">Male</label>
                  <input name="gender" <?php if($single_data['gender']=='female'): echo "checked"; endif;?>
                value="female" type="radio" id="female"><label for="female">Female</label>
                </div>

                <div class="form-group">
                    <img style="width:150px" src="students/<?php echo $single_data ['photo']?>" alt="">
                    <input name = "old_photo" value="<?php echo $single_data ['photo']?>" type="hidden">
                </div>
                 <div class="form-group">
                     <label for="">Photo</label>
                     <input name="new_photo"  type="file">
                 </div>
                 
                  <div class="form-group">
                    <input name="add" class="btn btn-info " type="submit" value="Update Now">
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
