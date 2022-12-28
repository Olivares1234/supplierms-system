<?php

    include_once('../controller/db.php');
    $output = array('error' => false);
 
    $database = new connDB();
    $db = $database->open();
    try{
        //use of prepared statement to prevent sql injection
        $stmt = $db->prepare("INSERT INTO tbl_supplier (sppr_raw_materials, sppr_company_name, sppr_address, sppr_product_lists, sppr_current_price, sppr_nationality, sppr_owner, sppr_contact_person, sppr_contact_num, sppr_fax_num, sppr_email, sppr_current_pay_terms, sppr_approved, sppr_remarks, sppr_raw_extension) 
        VALUES (:sppr_raw_materials, :sppr_company_name, :sppr_address, :sppr_product_lists, :sppr_current_price, :sppr_nationality, :sppr_owner, :sppr_contact_person, :sppr_contact_num, :sppr_fax_num, :sppr_email, :sppr_current_pay_terms, :sppr_approved, :sppr_remarks, :sppr_raw_extension)");
        //if-else statement executing prepared statement
        if ($stmt->execute(array(':sppr_raw_materials' => $_POST['sppr_raw_materials'], ':sppr_company_name' => $_POST['sppr_company_name'], ':sppr_address' => $_POST['sppr_address'],
        ':sppr_product_lists' => $_POST['sppr_product_lists'], ':sppr_current_price' => $_POST['sppr_current_price'], ':sppr_nationality' => $_POST['sppr_nationality'], ':sppr_nationality' => $_POST['sppr_nationality'], 
        ':sppr_owner' => $_POST['sppr_owner'], ':sppr_contact_person' => $_POST['sppr_contact_person'], ':sppr_contact_num' => $_POST['sppr_contact_num'], ':sppr_fax_num' => $_POST['sppr_fax_num'], ':sppr_raw_extension' => $_POST['sppr_raw_extension'],
        ':sppr_email' => $_POST['sppr_email'], ':sppr_current_pay_terms' => $_POST['sppr_current_pay_terms'], ':sppr_remarks' => $_POST['sppr_remarks'], ':sppr_approved' => $_POST['sppr_approved'])) ){	
            $output['message'] = 'Member added successfully';			
            
        }
        else{
            $output['error'] = true;
            $output['message'] = 'Something went wrong. Cannot add member';
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