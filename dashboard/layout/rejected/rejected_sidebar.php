 <!-- Sidebar -->
 <div class="sidebar">

     <div class="sidebar-wrapper scrollbar-inner">
         <div class="sidebar-content">
             <div class="user">
                 <div class="avatar-sm float-left mr-2">
                 <img class="avatar-img rounded-circle" src="assets\img\<?= $_SESSION['image']; ?>">
                 </div>
                 <div class="info">
                     <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                     <span>
                         <?php echo $_SESSION["role"];?>
                             <span class="user-level"><?php echo $_SESSION["username"];?></span>
                             <span class="caret"></span>
                         </span>
                     </a>
                     <div class="clearfix"></div>

                     <div class="collapse in" id="collapseExample">
                         <ul class="nav">
                             <!-- <li>
                            <a href="#profile">
                                <span class="link-collapse">My Profile</span>
                            </a>
                        </li> -->
                             <li>
                                 <a href="profile.php">
                                     <span class="link-collapse">Edit Profile</span>
                                 </a>
                             </li>
                             <!-- <li>
                            <a href="#settings">
                                <span class="link-collapse">Settings</span>
                            </a>
                        </li> -->
                         </ul>
                     </div>
                 </div>
             </div>
             <br>
             <!--digital clock start-->
             <h4>
                 <center>

                     <span class="datetime">
                         <p class="date" style="color:#575962;">
                             <span><i class="fas fa-calendar-alt fa-lg" style="color:#2c8cb7;"></i></span>
                             <span id="dayname">Day</span>,
                             <span id="month">Month</span>
                             <span id="daynum">00</span>,
                             <span id="year">Year</span>
                             <br>
                         </p>
                         <p class="time" style="color:#575962;">
                             <span><i class="fas fa-clock fa-lg" style="color:#2c8cb7;"></i></span>
                             <span id="hour">00</span>:
                             <span id="minutes">00</span>:
                             <span id="seconds">00</span>
                             <span id="period">AM</span>
                         </p>
                     </span>
                 </center>
             </h4>
             <hr>
             <!--digital clock end-->
             <ul class="nav">
             <li class="nav-item">
				 <a href="bubble-roll.php">
                 <i class="fa-solid fa-truck-fast"></i>
					<p>Supplier List</p>
					<!-- <span class="badge badge-count" style="color:white; background:red;">5</span> -->
				 </a>
			    </li>

                <li class="nav-item">
				 <a href="pending.php">
                 <i class="fa-solid fa-message"></i>
					<p>Ongoing Approval</p>
					<span class="badge badge-count" style="color:white; background:orange;"><?php echo $total_pending;?></span>
				 </a>
			    </li>

                <li class="nav-item active">
				 <a href="rejected.php">
                 <i class="fa-solid fa-ban"></i>
					<p>Rejected List</p>
					<!-- <span class="badge badge-count" style="color:white; background:red;">5</span> -->
				 </a>
			    </li>

                         </ul>
                     </div>
                 </li>
             </ul>
         </div>
     </div>
 </div>
 <!-- End Sidebar -->






 