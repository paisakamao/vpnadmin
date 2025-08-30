<?php 
  require 'include/header.php';
  ?>
  
<?php
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		include('dbconfig.php');
		$hostname = $_POST['hostname'];
		$ip = $_POST['ip'];
		$flag = $_POST['flag'];
		$status = $_POST['status'];
		$type = $_POST['type'];
		$Priority = $_POST['Priority'];
		
		
		
		$query = "INSERT INTO servers(HostName, IP, Flag, ServerStatus, Priority, type) VALUES('$hostname', '$ip', '$flag', $status, $Priority, $type)";
		$result = mysqli_query($con, $query);
		if(!$result){
			$status = 0;
			$message = "Query Error: ".mysqli_error($con);
		} else {
			$status = 1;
			$message = "Server Added Successfully";
		}
	}
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
					<h4 class="card-title" id="basic-layout-form">Add Server</h4>
					
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

         
		  
		  <div class="card shadow mb-4">
            
              
            </div>
            <div class="card-body">
				<form action="" method="POST">
				  <div class="form-group">
					<label for="hostname">Server Country Name</label>
					<input type="text" class="form-control" id="hostname" name="hostname" aria-describedby="emailHelp"  required>
					<small id="emailHelp" class="form-text text-muted"></small>
				  </div>
				  
				  <div class="form-group">
					<label for="flag">Flag</label>
					<input type="text" class="form-control" id="flag" name="flag" aria-describedby="emailHelp" required>
					<small id="emailHelp" class="form-text text-muted"></small>
				  </div>
				  <div class="form-group">
					<label for="status">Status</label>
					<select class="form-control" id="status" name="status" required>
					  <option value="1">Active</option>
					  <option value="0">Inactive</option>
					</select>
				  </div>
				  
				   <div class="form-group">
					<label for="Priority">Show in List</label>
					<select class="form-control" id="Priority" name="Priority" required>
					  <option value="1" <?php echo $server['ServerStatus'] == 1 ? "selected" : ""; ?>>Free Section</option>
					  <option value="2" <?php echo $server['ServerStatus'] == 2 ? "selected" : ""; ?>>VIP Section</option>
					</select>
				  </div>
				  
				  
				  
				  <div class="form-group">
					<label for="type">Type</label>
					<select class="form-control" id="type" name="type" required>
					  <option value="1">Free</option>
					  <option value="2">Premium</option>
					</select>
				  </div>
				  
				  
				  
				  <div class="form-group">
					<label for="ip">OpenVPN_ConfigData_Base64</label>
					<input type="text" class="form-control" id="ip" name="ip" aria-describedby="emailHelp" required>
					<small id="emailHelp" class="form-text text-muted"></small>
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
    
   <?php 
  require 'include/js.php';
  ?>
    

  </body>


</html>