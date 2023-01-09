<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<!-- <script src="https://cdn.datatables.net/rowreorder/1.3.1/js/dataTables.rowReorder.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> -->
<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
<!-- jQuery UI -->
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<!-- <script src="assets/js/plugin/moment/moment.min.js"></script> -->

<!-- Chart JS -->
<!-- <script src="assets/js/plugin/chart.js/chart.min.js"></script> -->

<!-- jQuery Sparkline -->
<!-- <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script> -->

<!-- Chart Circle -->
<!-- <script src="assets/js/plugin/chart-circle/circles.min.js"></script> -->

<!-- Datatables -->
<script src="assets/js/plugin/datatables/datatables-tape.min.js"></script>

<!-- Bootstrap Notify -->
<!-- <script src="assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script> -->

<!-- Bootstrap Toggle -->
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>


<!-- Sweet Alert -->
<script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="assets/js/ready.min.js"></script>

<!-- Azzara DEMO methods, don't include it in your project! -->
<!-- <script src="assets/js/setting-demo.js"></script>
<script src="assets/js/demo.js"></script> -->

<!-- message alert -->



<!-- Datetime Display -->
<script src="assets/js/datetime.js"></script>

<!-- <script src="assets/js/datatable.js"></script> -->

<script src="assets/js/toastr.min.js"></script>
<script src="assets/js/toastr-options.js"></script>
<script>	  // message popup info

// ../../config/msg_popup.php
</script>
<script src="assets/js/reponsive-datatable.js"></script>

<!-- controller/modal.php -->
<script>
//   $(document).ready(function(){
//   $('#submitBtn').click(function(e) { 
//     // e.preventDefault();   //  cancel submit action
//     $(this).html('<i class="fa fa-spinner fa-spin gap-right"></i> Searching ...');  // change text
//     setInterval(function(){ document.forms[0].submit(); }, 5000); // submit after two seconds
//     $('#submitBtn').attr("disabled", true);
//   });    
// });

$('#submitBtn').click(function() {
    // $(this).attr('disabled','disabled');
    $(this).html('<i class="fa fa-spinner fa-spin gap-right"></i> Sending ...');  // change text
    setTimeout(function() {
        $('#submitBtn').attr('disabled','disabled');
    },10);   // enable after 2 seconds
});

</script>

</body>
</html>