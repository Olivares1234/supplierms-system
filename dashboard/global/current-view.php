<?php
    include_once('db.php');
 
    $output = array('error' => false);
 
    $database = new connDB();
    $db = $database->open();
    try{
        $id = $_POST['sppr_p_id'];     
        $sppr_p_company_name = $_POST['sppr_p_company_name'];
      
        // $sppr_raw_extension = $_POST['sppr_raw_extension'];
        // $status = $_POST['status'];
 
        $sql = "UPDATE tbl_history_price SET sppr_p_company_name = '$sppr_p_company_name' WHERE sppr_p_id = '$id'";
        //if-else statement executing query
        if($db->exec($sql)){
            $output['message'] = 'Member updated successfully';
            
        } 
        else{
            $output['error'] = true;
            $output['message'] = 'Something went wrong. Cannot update member';
        }
 
    }
    catch(PDOException $e){
        $output['error'] = true;
        $output['message'] = $e->getMessage();
    }
 
    //close connection
    $database->close();
 
    echo json_encode($output);
?>