<?php 
  require 'include/header.php';
  ?>
<?php
	if(!isset($_GET['server_id'])){
		header("location:manage_servers.php");
		die();
	}
	include('include/dbconfig.php');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$hostname = $_POST['hostname'];
		$ip = $_POST['ip'];
		$flag = $_POST['flag'];
		$status = $_POST['status'];
		$type = $_POST['type'];
		$server_id = $_POST['server_id'];
		$Priority = $_POST['Priority'];
		
		$query = "UPDATE servers SET HostName='$hostname', IP='$ip',  Flag='$flag', ServerStatus=$status, Priority=$Priority, Type=$type WHERE server_id=$server_id";
		$result = mysqli_query($con, $query);
		if(!$result){
			$status = 0;
			$message = "Query Error: ".mysqli_error($con);
		} else {
			if(mysqli_affected_rows($con) > 0){
				$status = 1;
				$message = "Server Updated Successfully";
			} else {
				$status = 0;
				$message = "Unable to update server";
			}
		}
	}
	$server_id = $_GET['server_id'];
	$server = mysqli_query($con, "SELECT * FROM servers WHERE server_id=$server_id");
	if(!$server || mysqli_num_rows($server) == 0){
		header("location:manage_servers.php");
		die();
	}
	$server = mysqli_fetch_assoc($server);
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
					<h4 class="card-title" id="basic-layout-form">Update Server</h4>
					
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

          
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Server Info</h6>
            </div>
            <div class="card-body">
				<form action="" method="POST">
				  <input type="hidden" class="form-control" value="<?php echo $server['server_id']; ?>" id="server_id" name="server_id">
				  <div class="form-group">
					<label for="hostname">Server Country Name</label>
					<input type="text" class="form-control" value="<?php echo $server['HostName']; ?>" id="hostname" name="hostname" aria-describedby="emailHelp" required>
					<small id="emailHelp" class="form-text text-muted"></small>
				  </div>
				  
				  <div class="form-group">
					<label for="flag">Flag</label>
					<input type="text" class="form-control" value="<?php echo $server['Flag']; ?>" id="flag" name="flag" aria-describedby="emailHelp" required>
					<small id="emailHelp" class="form-text text-muted"></small>
				  </div>
				  <div class="form-group">
					<label for="status">Status</label>
					<select class="form-control" id="status" name="status" required>
					  <option value="1" <?php echo $server['ServerStatus'] == 1 ? "selected" : ""; ?>>Active</option>
					  <option value="0" <?php echo $server['ServerStatus'] == 0 ? "selected" : ""; ?>>Inactive</option>
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
					  <option value="1" <?php echo $server['Type'] == 1 ? "selected" : ""; ?>>Free</option>
					  <option value="2" <?php echo $server['Type'] == 2 ? "selected" : ""; ?>>Premium</option>
					</select>
				  </div>
				  
				  
				  
				  
				  
				  <div class="form-group">
					<label for="ip">OpenVPN_ConfigData_Base64</label>
					<input type="text" class="form-control" value="<?php echo $server['IP']; ?>" id="ip" name="ip" aria-describedby="emailHelp" required>
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
    </div>
    
   <?php 
  require 'include/js.php';
  ?>
    

  </body>


</html>
