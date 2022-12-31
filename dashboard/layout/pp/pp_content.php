<!-- Main Content -->
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="page-header">
				<!-- <h4 class="page-title">Resin Suppliers</h4> -->
			</div>

			<!-- <div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header">
							<div class="card-head-row">
								<div class="card-title">User Statistics</div>
								<div class="card-tools">
									<a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
										<span class="btn-label">
											<i class="fa fa-pencil"></i>
										</span>
										Export
									</a>
									<a href="#" class="btn btn-info btn-border btn-round btn-sm">
										<span class="btn-label">
											<i class="fa fa-print"></i>
										</span>
										Print
									</a>
								</div>
							</div>
						</div>
						<div class="card-body">
							<div class="chart-container" style="min-height: 375px">
								<canvas id="statisticsChart"></canvas>
							</div>
							<div id="myChartLegend"></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card-secondary">
						<div class="card-header">
							<div class="card-title">Daily Sales</div>
							<div class="card-category">March 25 - April 02</div>
						</div>
						<div class="card-body pb-0">
							<div class="mb-4 mt-2">
								<h1>$4,578.58</h1>
							</div>
							<div class="pull-in">
								<canvas id="dailySalesChart"></canvas>
							</div>
						</div>
					</div>
					<div class="card card-info bg-info-gradient">
						<div class="card-body">
							<h4 class="mb-1 fw-bold">Tasks Progress</h4>
							<div id="task-complete" class="chart-circle mt-4 mb-3"></div>
						</div>
					</div>
				</div>
			</div> -->

			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title" style="font-weight: 600;">PP Strap Suppliers</h4>
							<br>
							<form class="form-row">
								<div class="col-auto">
									<div class="form-check mb-2">
										<input class="form-check-input" type="checkbox" id="autoSizingCheck">
										<label class="form-check-label" for="autoSizingCheck">
											<h5><b>Select Raw Materials:</b></h5>
										</label>
									</div>
								</div>
								<div class="col-6">
								<select class="form-select" style="width: 100%;" tabindex="-1" aria-hidden="true" onchange="location = this.value;">
										<option value="pp.php">PP Strap</option>
										<option value="bubble-roll.php"><b>Bubble Roll</b></option>
										<option value="danpla.php">Danpla Sheets & Boxes</option>
										<option value="engg-plastic.php">Engineering Plastic</option>
										<option value="food-packaging.php">Food Packaging </option>
										<option value="forms-receipt.php">Forms & Receipt</option>
										<option value="hdpe-bag.php"><b>HDPE/PE & ESD Bag</b></option>
										<option value="metal-fabric.php">Metal Fabrication</option>
										<option value="tape.php">Packaging Tape</option>
										<option value="bubble-roll.php"><b>PE/PU Conductive</b></option>
										<option value="pallets.php">Pallets & Corner Protector </option>
										<option value="rsc.php">RSC & Shipping Box</option>
										<option value="forms.php">Stretch Film</option>
										<option value="bubble-roll.php"><b>Sticker & Label</b></option>
										<option value="danpla.php">Tooling Blade</option>
										<option value="packaging.php">Ziplock Bags</option>
									</select>

								</div>
								<div class="col-auto">
									<button class="btn btn-primary" id="addnew" type="button"><i class="fa-solid fa-trailer"></i>&nbsp;Add Supplier</button>
								</div>


							</form>

						</div>
						<div class="card-body">

							<div class="loaders">
								<center>
									<img src="assets/img/truck.gif" alt="" width="250px" height="250px">
								</center>
							</div>

							<div class="table-responsive lg" id="examples">
								<table id="example" class="display table-striped table-hover table-responsive" width="100%">
									<thead>
										<tr>
											<!-- <th style="background: #2c8cb7; color:#fff;">Supplier ID</th> -->
											<th style="background: #2c8cb7; color:#fff;">Company Name</th>
											<!-- <th style="background: #2c8cb7; color:#fff;">Address</th> -->
											<th style="background: #2c8cb7; color:#fff; ">Product List</th>
											<!-- <th style="background: #2c8cb7; color:#fff; ">Current Price</th>
                                            <th style="background: #2c8cb7; color:#fff; ">Nationality</th>
                                            <th style="background: #2c8cb7; color:#fff; ">Owner</th> -->
											<th style="background: #2c8cb7; color:#fff; ">Contact Person</th>
											<th style="background: #2c8cb7; color:#fff; ">Contact #.</th>
											<th style="background: #2c8cb7; color:#fff; ">Remarks</th>
											<th style="background: #2c8cb7; color:#fff; ">Action</th>
											<!-- <th style="background: #2c8cb7; color:#fff">Current Price</th>
                                            <th style="background: #2c8cb7; color:#fff">Nationality</th>
                                            <th style="background: #2c8cb7; color:#fff">Owner</th> -->
										</tr>
									</thead>
									<tbody id="tbody"></tbody>

								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="sticky-footer1 bg-white" style="top:250px">
		<div class="container my-auto">
			<div class="copyright text-center my-auto">
				<span style="font-weight: 600; font-size:1rem;">Copyright &copy; <script>
						document.write(new Date().getFullYear());
					</script> SupplierMS - v O.1</span>
			</div>
		</div>
	</footer>
</div>
</div>

</div>
<!-- End Main Content -->



</div>
</div>
</div>