<?php
    include_once('db.php');
 
    $output = array('error' => false);
 
    $database = new connDB();
    $db = $database->open();
    try{
        $sql = "DELETE FROM tbl_supplier WHERE id = '".$_POST['id']."'";
        //if-else statement executing query
        if($db->exec($sql)){
            $output['message'] = 'Member deleted successfully';
        }
        else{
            $output['error'] = true;
            $output['message'] = 'Something went wrong. Cannot delete member';
        } 
    }
    catch(PDOException $e){
        $output['error'] = true;
        $output['message'] = $e->getMessage();;
    }
 
    //close connection
    $database->close();
 
    echo json_encode($output);
?>