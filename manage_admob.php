<?php 
  require 'include/header.php';
  ?>
<?php
	include('dbconfig.php');
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$App_Id = $_POST['App_Id'];
		$admob_banner = $_POST['admob_banner'];
		$admob_inter = $_POST['admob_inter'];
		$admob_native = $_POST['admob_native'];
		$Admob_OpenAd = $_POST['Admob_OpenAd'];
		$Admob_Reward = $_POST['Admob_Reward'];
		$fb_banner = $_POST['fb_banner'];
		$fb_inter = $_POST['fb_inter'];
		
		$query = "UPDATE admob SET App_Id='$App_Id', admob_banner='$admob_banner', admob_inter='$admob_inter', admob_native='$admob_native', Admob_OpenAd='$Admob_OpenAd',
		Admob_Reward='$Admob_Reward', fb_banner='$fb_banner', fb_inter='$fb_inter'";
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
					<h4 class="card-title" id="basic-layout-form">Manage Ad IDs</h4>
					
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
              <h6 class="m-0 font-weight-bold text-primary">AdMob Info</h6>
            </div>
            <div class="card-body">
				<form action="" method="POST">
				  <div class="form-group">
					<label for="App_Id">Admob App ID</label>
					<input type="text" class="form-control" value="<?php echo $admob['App_Id']; ?>" id="App_Id" name="App_Id" aria-describedby="emailHelp" required>
				  </div>
				  <div class="form-group">
					<label for="admob_banner">Admob Banner Ad</label>
					<input type="text" class="form-control" value="<?php echo $admob['admob_banner']; ?>" id="admob_banner" name="admob_banner" required>
				  </div>
				  <div class="form-group">
					<label for="admob_inter">Admob Interstitial Ad</label>
					<input type="text" class="form-control" value="<?php echo $admob['admob_inter']; ?>" id="admob_inter" name="admob_inter" required>
				  </div>
				  <div class="form-group">
					<label for="admob_native">Admob Native Ad</label>
					<input type="text" class="form-control" value="<?php echo $admob['admob_native']; ?>" id="admob_native" name="admob_native" required>
				  </div>
				  <div class="form-group">
					<label for="Admob_OpenAd">Admob Open App Ad</label>
					<input type="text" class="form-control" value="<?php echo $admob['Admob_OpenAd']; ?>" id="Admob_OpenAd" name="Admob_OpenAd" required>
				  </div>
				  <div class="form-group">
					<label for="Admob_Reward">Admob Rewarded</label>
					<input type="text" class="form-control" value="<?php echo $admob['Admob_Reward']; ?>" id="Admob_Reward" name="Admob_Reward" required>
				  </div>
				  <div class="form-group">
					<label for="fb_banner">Facebook Banner Ad</label>
					<input type="text" class="form-control" value="<?php echo $admob['fb_banner']; ?>" id="fb_banner" name="fb_banner" required>
				  </div>
				  <div class="form-group">
					<label for="fb_inter">Facebook Interstitial Ad</label>
					<input type="text" class="form-control" value="<?php echo $admob['fb_inter']; ?>" id="fb_inter" name="fb_inter" required>
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
