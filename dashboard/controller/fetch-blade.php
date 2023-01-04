<?php
include_once('db.php');
$database = new connDB();
$db = $database->open();

try {
    $sql = 'SELECT * FROM tbl_supplier WHERE sppr_raw_extension="Blade"';
    foreach ($db->query($sql) as $row) {
        // WHERE sppr_raw_materials="Forms" 
?>
        <tr>
            <!-- <td style="text-align: center;"><php echo 'Sppr'.$row['id']; ?></td> -->
            <td><?php echo $row['sppr_company_name']; ?></td>
            <td><?php echo $row['sppr_product_lists']; ?></td>
            <td><?php echo $row['sppr_contact_person']; ?></td>
            <td><?php echo $row['sppr_contact_num']; ?></td>
            <td style="text-align: center; color:#209d8f;"><?php echo $row['sppr_remarks']; ?></td>
            <td>
                <div class="form-button-action">
                <span class="border border-bottom" style="background: #f7f9fb;">
                    <button type="button" class="btn-link btn-primary btn-md view" data-id="<?php echo $row['id']; ?>" data-toggle="tooltip"  data-placement="top" title="View" data-original-title="View">
                         <i class="fa-solid fa-magnifying-glass"></i>
                    </button></span>&nbsp;
                    <span class="border border-bottom" style="background: #f7f9fb;"><button type="button" class="btn-link btn-outline-success btn-md edit" data-id="<?php echo $row['id']; ?>" data-toggle="tooltip"  data-placement="top" title="Edit"  data-original-title="Edit">
                        <i class="fa fa-edit"></i> 
                    </button></span>&nbsp;
                    <span class="border border-bottom" style="background: #f7f9fb;"><button type="button" class="btn-link btn-danger btn-md delete" data-id="<?php echo $row['id']; ?>" data-toggle="tooltip"  data-placement="top" title="Delete"  data-original-title="Delete">
                        <i class="fa fa-trash"></i>
                    </button></span>
                </div>
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