<!-- content -->

<style>
	.imgs {
		height: 12rem;
		width: 12rem;
		border-radius: 50%;
		object-fit: cover;
		margin-bottom: 0.5rem;
	}
</style>

<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<h4 class="page-title">User Profile</h4>
			<div class="row">
				<div class="col-lg-12">
					<div class="card card-with-nav">
						<div class="card-header">
							<div class="row row-nav-line">
								<ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
									<li class="nav-item"> <a class="nav-link" data-toggle="" href="profile.php" role="tab" aria-selected="false">Profile</a> </li>
									<li class="nav-item"> <a class="nav-link active show" data-toggle="" href="security.php" role="tab" aria-selected="true">Security</a> </li>
									<li class="nav-item"> <a class="nav-link" data-toggle="" href="profile-change.php" role="tab" aria-selected="false">Change Picture</a> </li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<form action="security.php" method="POST">
								<div class="row mt-3">
									<div class="col-md-6">
										<div class="form-group form-group-default">
											<input type="hidden" name="old_pass" value="<?php echo $_SESSION["password"]; ?>">
											<span>new password :</span>
											<input type="password" name="new_pass" class="form-control" placeholder="enter new password">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group form-group-default">
											<input type="hidden" name="old_pass" value="<?php echo $_SESSION["password"]; ?>">
											<span>confirm password :</span>
											<input type="text" name="confirm_pass" class="form-control" placeholder="confirm new password" required>
										</div>
									</div>
								</div>

								<div class="text-right mt-3 mb-3">
									<button type="submit" name="reset" class="btn btn-danger" data-bs-dismiss="modal"><i class="fas fa-retweet"></i> Reset</button>
									<button type="submit" id="refresh" name="update" class="btn btn-primary"><i class="fas fa-marker"></i>Update</button>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?php

include 'controller/db.php';

$passid = $_SESSION['id'];

if (isset($_POST['update'])) {

	// $name = mysqli_real_escape_string($con, $_POST["name"]);
	// $image = mysqli_real_escape_string($con, $_POST["images"]);
	// $passid = mysqli_real_escape_string($con, $_POST["id"]);
	$newpass = mysqli_real_escape_string($con, $_POST["new_pass"]);
	$cpass = mysqli_real_escape_string($con, $_POST["confirm_pass"]);

	$secure_newpass = md5($newpass);
	$secure_cpass = md5($cpass);
	// $imagename=$_FILES["image"]["name"];

	if ($newpass === $cpass) {

		$sql = mysqli_query($con, "UPDATE tbl_users SET password='$secure_newpass' WHERE id='$passid'");

		// execute the query
		$result = mysqli_query($con, $sql);
		// echo "<script>alert('User updated successfully')</script>";
			flash("msg4", "Successfully Update Password Please Logout & Login Again!");
	}else{
		flash("msg3", "Confirm Password Not Equal Try It & Check Again!");
	}
	// close the database connection
	mysqli_close($con);
	
}

if (isset($_POST['reset'])) {
	// $name = $_POST["name"] = $_SESSION['username'];
	$cpass = $_POST["confirm_pass"] = '';
	$new_pass = $_POST["new_pass"] = '';

}


?>