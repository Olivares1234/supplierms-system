<?php
include('db.php'); 

// count pending approval
$query =  'SELECT id FROM tbl_supplier WHERE sppr_status="Pending" ORDER BY id';
$query_run = mysqli_query($con, $query);
$total_pending = mysqli_num_rows($query_run);
?>