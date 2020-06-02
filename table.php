
<?php include_once "db.php"; ?>
<?php  include_once "functions.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table shadow">
		 <a class="btn btn-success btn-sm" href="index.php">Sign Up From</a>
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
                 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">  
                    <input name="search" type="text">
                     <input style="padding:1px 10px; display:inline-block; margin-bottom:3px;" name="search-btn" class="btn  btn-primary" type="submit" value="Search">
                     </form>
                 <br>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Age</th>
							<th>Location</th>
							<th>Gender</th>
							<th>Photo</th>
							<th>Action</th>
							
						</tr>
					</thead>
					<tbody>
					
					<?php
                        
                        $search = '';
                        if(isset($_POST['search-btn'])){
                         $search =   $_POST['search'];
                            
                        }
            
                         $sql = "SELECT * FROM students WHERE name LIKE '%$search%' OR email ='$search' OR age='$search'  OR location ='$search' OR gender ='$search' ";
                       $data =  $connection -> query($sql);
                        
                       
                        
                             $i = 1;
                           while( $single_data = $data -> fetch_assoc()):
    
                              ?>
						<tr>
							<td><?php echo $i; $i++;?></td>
							<td><?php echo $single_data['name']?></td>
							<td><?php echo $single_data['email']?></td>
							<td><?php echo $single_data['cell']?></td>
							<td><?php echo $single_data['age']?></td>
							<td><?php echo $single_data['location']?></td>
							<td><?php echo $single_data['gender']?></td>
							<td><img src="students/<?php echo $single_data['photo'];?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="single_data.php?id=<?php echo $single_data ['id']?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $single_data['id']?>">Edit</a>
								<a id="delete_btn" class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $single_data ['id']?>">Delete</a>
							</td>
						</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	


 




	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	
	
	<script>
        $('a#delete_btn').click(function(){
            
            let con = confirm('Are you sure?');
              if(con==true){
                  return true;
              }else{
                  return false;
              }
        });
    </script>
	
	
	
	
	
		
</body>
</html>