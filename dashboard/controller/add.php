<?php

    include_once('db.php');
    $output = array('error' => false);
 
    $database = new connDB();
    $db = $database->open();
    try{
        //use of prepared statement to prevent sql injection
        $stmt = $db->prepare("INSERT INTO tbl_supplier (sppr_raw_materials, sppr_company_name, sppr_address, sppr_product_lists, sppr_current_price, sppr_nationality, sppr_owner) VALUES (:sppr_raw_materials, :sppr_company_name, :sppr_address, 
        :sppr_product_lists, :sppr_current_price, :sppr_nationality, :sppr_owner)");
        //if-else statement executing prepared statement
        if ($stmt->execute(array(':sppr_raw_materials' => $_POST['sppr_raw_materials'], ':sppr_company_name' => $_POST['sppr_company_name'], ':sppr_address' => $_POST['sppr_address'],
        ':sppr_product_lists' => $_POST['sppr_product_lists'], ':sppr_current_price' => $_POST['sppr_current_price'], ':sppr_nationality' => $_POST['sppr_nationality'], ':sppr_nationality' => $_POST['sppr_nationality'], 
        ':sppr_owner' => $_POST['sppr_owner'])) ){
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