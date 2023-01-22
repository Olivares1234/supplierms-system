<?php
include_once('db.php');
$database = new connDB();
$db = $database->open();

try {
    $sql = 'SELECT * FROM tbl_history_price';
    foreach ($db->query($sql) as $row) {
        // WHERE sppr_raw_materials="Resin" 
?>
        <tr>

            <!-- <td style="text-align: center;"><php echo 'Sppr'.$row['id']; ?></td> -->
            <td style="text-align: center;"><?php echo $row['sppr_p_raw_materials']; ?></td>
            <td style="text-align: center;"><?php echo $row['sppr_p_company_name']; ?></td>
            <td style="text-align: center;"><?php echo $row['sppr_p_address']; ?></td>
            <td style="text-align: center;"><?php echo $row['sppr_p_product_list']; ?></td>
            <td style="text-align: center;"><?php echo $row['sppr_p_contact_person']; ?></td>
            <td style="text-align: center;"><?php echo '₱&nbsp;'.$row['sppr_p_current_price']; ?></td>
            <td style="text-align: center;"><?php echo $creation_time = date('Y-m-d / h:i:s a',strtotime($row['sppr_p_date_created'])); ?></td>
            <td style="text-align: center;">
                <div class="form-button-action">
                <span class="border border-bottom" style="background: #f7f9fb;">
                    <button type="button" class="btn-link btn-primary btn-md view" data-id="<?php echo $row['sppr_p_id']; ?>" data-toggle="tooltip"  data-placement="top" title="View" data-original-title="View">
                         <i class="fa-solid fa-magnifying-glass"></i>
                    <!-- </button></span>&nbsp;
                    <span class="border border-bottom" style="background: #f7f9fb;"><button type="button" class="btn-link btn-outline-success btn-md edit" data-id="<php echo $row['id']; ?>" data-toggle="tooltip"  data-placement="top" title="Edit"  data-original-title="Edit">
                        <i class="fa fa-edit"></i> 
                    </button></span>&nbsp;
                    <span class="border border-bottom" style="background: #f7f9fb;"><button type="button" class="btn-link btn-danger btn-md delete" data-id="<php echo $row['id']; ?>" data-toggle="tooltip"  data-placement="top" title="Delete"  data-original-title="Delete">
                        <i class="fa fa-trash"></i>
                    </button></span>
                </div> -->
            </td>
            

        </tr>
<?php
    }
} catch (PDOException $e) {
    echo "There is some problem in connection: " . $e->getMessage();
}

//close connection
$database->close();
?>