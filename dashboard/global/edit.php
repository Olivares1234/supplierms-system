<?php
    include_once('db.php');
 
    $output = array('error' => false);
 
    $database = new connDB();
    $db = $database->open();
    try{
        $id = $_POST['id'];
        $sppr_company_name = $_POST['sppr_company_name'];
        $sppr_address = $_POST['sppr_address'];
        $sppr_product_lists = $_POST['sppr_product_lists'];
        $sppr_current_price = $_POST['sppr_current_price'];
        $sppr_nationality = $_POST['sppr_nationality'];
        $sppr_owner = $_POST['sppr_owner'];
        $sppr_contact_person = $_POST['sppr_contact_person'];
        $sppr_contact_num = $_POST['sppr_contact_num'];
        $sppr_fax_num = $_POST['sppr_fax_num'];
        $sppr_email = $_POST['sppr_email'];
        $sppr_current_pay_terms = $_POST['sppr_current_pay_terms'];
        $sppr_approved = $_POST['sppr_approved'];
        $sppr_remarks = $_POST['sppr_remarks'];
        // $sppr_raw_extension = $_POST['sppr_raw_extension'];
        // $status = $_POST['status'];
 
        $sql = "UPDATE tbl_supplier SET sppr_company_name = '$sppr_company_name', sppr_address = '$sppr_address', sppr_product_lists = '$sppr_product_lists',
        sppr_current_price = '$sppr_current_price', sppr_nationality = '$sppr_nationality', sppr_owner = '$sppr_owner', sppr_contact_person = '$sppr_contact_person', sppr_contact_num = '$sppr_contact_num',
        sppr_fax_num = '$sppr_fax_num', sppr_email = '$sppr_email', sppr_current_pay_terms = '$sppr_current_pay_terms', sppr_approved = '$sppr_approved', sppr_remarks = '$sppr_remarks' WHERE id = '$id'";
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