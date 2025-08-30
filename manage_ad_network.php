<?php 
  require 'include/header.php';
  ?>
<?php
	include('dbconfig.php');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
	
		$type = $_POST['type'];
		
		
		$query = "UPDATE admob SET type='$type'";
		$result = mysqli_query($con, $query);
		if(!$result){
			$status = 0;
			$message = "Query Error: ".mysqli_error($con);
		} else {
			if(mysqli_affected_rows($con) > 0){
				$status = 1;
				$message = "Updated Successfully";
			} else {
				$status = 0;
				$message = "Unable to update";
			}
		}
	}
	$admob = mysqli_query($con, "SELECT * FROM admob LIMIT 1");
	$admob = mysqli_fetch_assoc($admob);
?>
<!DOCTYPE html>
<html lang="en">


  <body data-col="2-columns" class=" 2-columns ">
      <div class="layer"></div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


     
      <?php include('main.php'); ?>
      <!-- Navbar (Header) Ends-->

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper"><!--Statistics cards Starts-->

<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title" id="basic-layout-form">Manage Ad Networks</h4>
					
				</div>
			<div class="row">
			<div class="col-sm-10 offset-sm-1">
		<?php
			if(isset($status)){
				if($status == 1){
					echo '<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> '.$message.'
</div>';
				} else {
					echo '<div class="alert alert-danger alert-dismissible">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Error!</strong> '.$message.'
</div>';
				}
			}
		?>

          
		  
		  
           
            <div class="card-body">
				<form action="" method="POST">
				
				
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				   <div class="form-group">
					<label for="type">Ad Network</label>
					<select class="form-control" id="type" name="type" required>
					  <option value="1">Admob</option>
					  <option value="2">Facebook</option>
					</select>
				  </div>
				  
				  
				  
				  
				  
				  
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		  </div>
		</div>
		</div>
		</div>
			</div>
		</div>

		
	</div>
	


 


          </div>
        </div>

        

      </div>
    </div>
    
   <?php 
  require 'include/js.php';
  ?>
    

  </body>


</html>
