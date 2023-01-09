
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

    include_once('../controller/db.php');
    $output = array('error' => false);
 
    $database = new connDB();
    $db = $database->open();
    try{
        //use of prepared statement to prevent sql injection
        $stmt = $db->prepare("INSERT INTO tbl_supplier (sppr_raw_materials, sppr_company_name, sppr_address, sppr_product_lists, sppr_current_price, sppr_nationality, sppr_owner, sppr_contact_person, sppr_contact_num, sppr_fax_num, sppr_email, sppr_current_pay_terms, sppr_approved, sppr_remarks, sppr_raw_extension, sppr_status) 
        VALUES (:sppr_raw_materials, :sppr_company_name, :sppr_address, :sppr_product_lists, :sppr_current_price, :sppr_nationality, :sppr_owner, :sppr_contact_person, :sppr_contact_num, :sppr_fax_num, :sppr_email, :sppr_current_pay_terms, :sppr_approved, :sppr_remarks, :sppr_raw_extension, :sppr_status)");
        //if-else statement executing prepared statement
        if ($stmt->execute(array(':sppr_raw_materials' => $_POST['sppr_raw_materials'], ':sppr_company_name' => $_POST['sppr_company_name'], ':sppr_address' => $_POST['sppr_address'],
        ':sppr_product_lists' => $_POST['sppr_product_lists'], ':sppr_current_price' => $_POST['sppr_current_price'], ':sppr_nationality' => $_POST['sppr_nationality'], ':sppr_nationality' => $_POST['sppr_nationality'], 
        ':sppr_owner' => $_POST['sppr_owner'], ':sppr_contact_person' => $_POST['sppr_contact_person'], ':sppr_contact_num' => $_POST['sppr_contact_num'], ':sppr_fax_num' => $_POST['sppr_fax_num'], ':sppr_raw_extension' => $_POST['sppr_raw_extension'],
        ':sppr_email' => $_POST['sppr_email'], ':sppr_current_pay_terms' => $_POST['sppr_current_pay_terms'], ':sppr_remarks' => $_POST['sppr_remarks'], ':sppr_approved' => $_POST['sppr_approved'], ':sppr_status' => $_POST['sppr_status'])) ){	
            $output['message'] = 'Member added successfully';		
            
            $mail = new PHPMailer(true);     

			
				//Server settings
				$mail->isSMTP();                                     
				$mail->Host = 'smtp.gmail.com';                     
		
				$mail->SMTPAuth = true;                             
				$mail->Username = 'gabolivares63@gmail.com';
				$mail->Password = 'vcqihabipcpqwkgo';           
				$mail->SMTPOptions = array(
					'ssl' => array(
					'verify_peer' => false,
					'verify_peer_name' => false,
					'allow_self_signed' => true
					)
				);                         
				$mail->SMTPSecure = 'ssl';                           
				$mail->Port = 465;                                   
		
				//Send Email
				$mail->setFrom('gabolivares63@gmail.com','Minamoto Enterprise');
				
				//Recipients
				$mail->addAddress($_POST['email']='gabolivares63@gmail.com');              
				$mail->addReplyTo($_POST['email']='gabolivares63@gmail.com');
				
				
				//Content
				$mail->isHTML(true);                                  
				$mail->Subject = $subject = "Approval Request!";
				$mail->Body    = $message = "
                <img src='https://img.freepik.com/premium-vector/shipping-fast-icon-flat-style_157943-724.jpg?w=2000' height='200px' width='300px'><br>
                <h4>Checking Details Supplier For Approval Request!<br>
                Go to the System Link: <a style='color:#2b7fa5;' href='http://localhost/supplierms-system/login.php'>supplierms-system.exel-portal.com</a>"."</h4><br>
                <table style='width:100%;' class='table table-bordered' border='1px solid #333;'>
                <thead>
                    <tr> 
                        <th rowspan='2' style='text-align: center; background: #2c8cb7; color:#fff;'>Raw Materials</th>
                        <th rowspan='2' style='text-align: center; background: #2c8cb7; color:#fff;'>Company Name</th>
                        <th rowspan='2' style='background: #2c8cb7; color:#fff;'>Address</th>
                        <th rowspan='2' style='text-align: center; background: #2c8cb7; color:#fff; '>Product List</th>
                        <th rowspan='2' style='text-align: center; background: #2c8cb7; color:#fff; '>Contact Person</th>
                        <th rowspan='2' style='text-align: center; background: #2c8cb7; color:#fff; '>Contact #.</th>
                        <th rowspan='2' style='text-align: center; background: #2c8cb7; color:#fff; '>Status</th>
                    </tr>
                </thead>
                <tbody>
              <tr>
                <td rowspan='2' style='text-align: center; font-weight:500;'>".$_POST['sppr_raw_materials']."</td>
                <td rowspan='2' style='text-align: center; font-weight:500;'>".$_POST['sppr_company_name']."</td>
                <td rowspan='2' style='text-align: center; font-weight:500;'>".$_POST['sppr_address']."</td>
                <td rowspan='2' style='text-align: center; font-weight:500;'>".$_POST['sppr_product_lists']."</td>
                <td rowspan='2' style='text-align: center; font-weight:500;'>".$_POST['sppr_contact_person']."</td>
                <td rowspan='2' style='text-align: center; font-weight:500;'>".$_POST['sppr_contact_num']."</td>
                <td rowspan='2' style='text-align: center; font-weight:500; color:red;'>".$_POST['sppr_status']."</td>
              </tr>
                </tbody>
            </table><br>
            <h4 style='color:red;'>This Email Is Auto Generated By The System.</h4>";


				$mail->send();

			//    $_SESSION['result'] = 'Message has been sent';
			//    $_SESSION['status'] = 'ok';
		
			// echo "send";
			// header("location: index.php");

			// flash("msg3","Successfully Send Done!");
				// echo "<script>document.location='pendingRequest.php'</script>";
				// header("Location:newRequest");
				// echo "<script>document.location='pendingRequest.php'</script>";
            
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

