  <!-- Sidebar -->
  <div class="sidebar">

<div class="sidebar-wrapper scrollbar-inner">
    <div class="sidebar-content">
        <div class="user">
            <div class="avatar-sm float-left mr-2">
                <img src=assets/img/<?= $_SESSION['image'];?> alt="..." class="avatar-img rounded-circle">
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
            <li class="nav-section">
                <span class="sidebar-mini-icon">
                    <i class="fa-solid fa-warehouse-full"></i>
                </span>
                <h4 class="text-section">List Raw Materials</h4>
            </li>
            <li class="nav-item active">
                <a data-toggle="collapse" href="#tables">
                    <i class="fa-solid fa-truck-fast"></i>
                    <p>All Suppliers</p>
                    <span class="caret"></span>
                </a>
                <div class="collapse" id="tables">
                    <ul class="nav nav-collapse">
                        <li class="nav-item">
                            <a href="butane.php">
                                <i class="fas fa-boxes"></i>
                                <p>Butane</p>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a href="blade.php">
                                <i class="fas fa-boxes"></i>
                                <p>Blade</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="colorant.php">
                                <i class="fas fa-boxes"></i>
                                <p>Colorant</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="fabrication.php">
                                <i class="fas fa-boxes"></i>
                                <p>Fabrication / Machine<br>Tools And Equipment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="home.php">
                                <i class="fas fa-boxes"></i>
                                <p>Home /Office/Production<br>Appliance</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="packaging-tapes.php">
                                <i class="fas fa-boxes"></i>
                                <p>Packaging Tapes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="printed-film.php">
                                <i class="fas fa-boxes"></i>
                                <p>Printed Film</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="ppe.php">
                                <i class="fas fa-boxes"></i>
                                <p>PPE</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="resin.php">
                                <i class="fas fa-boxes"></i>
                                <p>Resin</p>
                                <!-- <span class="caret"></span> -->
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="talc.php">
                                <i class="fas fa-boxes"></i>
                                <p>Talc</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="vmpet.php">
                                <i class="fas fa-boxes"></i>
                                <p>VmPet Foil</p>
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