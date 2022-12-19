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
									<li class="nav-item"> <a class="nav-link" data-toggle="" href="security.php" role="tab" aria-selected="true">Security</a> </li>
									<li class="nav-item"> <a class="nav-link active show" data-toggle="" href="profile-change.php" role="tab" aria-selected="false">Change Picture</a> </li>
								</ul>
							</div>
						</div>
						<div class="card-body">
							<form action="profile-change.php" method="POST" enctype="multipart/form-data">
								<center><img src="assets/img/<?= $_SESSION['image']; ?>" alt="..." class="imgs rounded-circle" height="" width="30%"></center>
								<hr style="background-color: #333;">

								<div class="row mt-3">
									<input type="hidden" class="form-control" name="id" placeholder="Name" value="<?php echo $_SESSION["id"]; ?>">
									<div class="col-lg-12">
										<div class="form-group form-group-default">
											<label><b>Change Picture:</b></label>
											<input type="file" class="form-control" name="image">
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

	$pictureid = $_SESSION['id'];

	if (isset($_POST['update'])) {

	
		$pictureid = mysqli_real_escape_string($con, $_POST["id"]);

		$files = $_FILES["image"];

		$filename = $_FILES["image"]['name'];
		$fileerror = $files["error"];
		$filetmp = $files["tmp_name"];

		$fileext = explode(".", $filename);
		$filecheck = strtolower(end($fileext));
		$fileextstored = array("png", "jpg", "jpeg");

		if (in_array($filecheck, $fileextstored)) {
			$destinationfile = "assets/img/" . $filename;
			move_uploaded_file($filetmp, $destinationfile);
		}

		// if ($newpass === $cpass) {	// }

			$sql = mysqli_query($con, "UPDATE tbl_users SET image='$filename' WHERE id='$pictureid'");

			// execute the query
			$result = mysqli_query($con, $sql);
			// echo "<script>alert('User updated successfully')</script>";
			if($result >= 0){
			flash("msg4", "Successfully Update Please Logout & Login Again!");

		} else {

			flash("msg3", "Failed to submit!");
		}
		// close the database connection
		mysqli_close($con);
	}


	if (isset($_POST['reset'])) {
		// $name = $_POST["name"] = $_SESSION['username'];
		$image = $_POST["images"] = '';

	}


	?>