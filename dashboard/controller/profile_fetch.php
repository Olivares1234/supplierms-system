<?php

include 'db.php';

$admin_id = $_SESSION['id'];

if(isset($_POST['update'])){
 
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $datetimestamp = date('Y-m-d-H-i-s-a', $_POST['dateadded']);
    $update_profile = $con->prepare("UPDATE `tbl_users` SET username = ?, email = ? WHERE id = ?");
    $update_profile->execute([$name, $email, $admin_id]);
 
    $old_image = $_POST['old_image'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image'];
    $image_size = $_FILES['image']['size'];
    $image_folder = 'uploaded_img/'.$image;
 
    if(!empty($image)){
 
       if($image_size > 2000000){
         echo "Password Has Been Updated!";
       
          
       }else{
          $update_image = $con->prepare("UPDATE `tbl_users` SET image = ? WHERE id = ?");
          $update_image->execute([$image, $admin_id]);
 
          if($update_image){
             // move_uploaded_file($image_tmp_name, $image_folder);
             // link('uploaded_img/'.$old_image);
             move_uploaded_file($_FILES['image']['tmp_name'], "uploaded_img/$image");
             echo "Password Has Been Updated!";
         
          }
       }
 
    }
 
    $old_pass = $_POST['old_pass'];
    $previous_pass = md5($_POST['previous_pass']);
    $previous_pass = filter_var($previous_pass, FILTER_SANITIZE_STRING);
    $new_pass = md5($_POST['new_pass']);
    $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
    $confirm_pass = md5($_POST['confirm_pass']);
    $confirm_pass = filter_var($confirm_pass, FILTER_SANITIZE_STRING);
 
    if(!empty($previous_pass) || !empty($new_pass) || !empty($confirm_pass)){
       if($previous_pass != $old_pass){
   
          // flash("msg4","Old password not matched!");
   
       }elseif($new_pass != $confirm_pass){
    
         echo "Password Has Been Updated!";
        
       }else{
          $update_password = $con->prepare("UPDATE `tbl_users` SET password = ? WHERE id = ?");
          $update_password->execute([$confirm_pass, $admin_id]);
 
          echo "Password Has Been Updated!";
       
       }
    }
 
 }
 


?>