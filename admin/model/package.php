<?php
function get_next_pack_id() {
        global $db;
        $get_next_pack_id_query = 'select AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = \'abctrveldb\' AND TABLE_NAME = \'packages\';';
        try {
            $get_next_pack_id_statement = $db->prepare($get_next_pack_id_query);
            $get_next_pack_id_statement->execute();
            $get_next_pack_id_result = $get_next_pack_id_statement->fetch();
            $get_next_pack_id_statement->closeCursor();
            return $get_next_pack_id_result['AUTO_INCREMENT'];
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);   
        }
    }

function insert_package($package_image, $package_name, $package_type, $package_price, $package_details) {
    global $db;
    $insert_package_query = "insert into packages (package_Image, package_Name, package_Type, package_Price, package_Details) values (:package_image, :package_name, :package_type, :package_price, :package_details);";
    try {
        $insert_package_statement = $db->prepare($insert_package_query);
        $insert_package_statement->bindValue(':package_image', $package_image);
        $insert_package_statement->bindValue(':package_name', $package_name);
        $insert_package_statement->bindValue(':package_type', $package_type);
        $insert_package_statement->bindValue(':package_price', $package_price);
        $insert_package_statement->bindValue(':package_details', $package_details);
        $insert_package_statement->execute();
        $insert_package_statement->closeCursor();
    }
    catch(Exception $ex) {
        $error_code = 2;
        header('location:./index.php?action=error&errorCode=' . $error_code);  
    }
}

function get_package_name_from_id($package_id) {
    global $db;
    $get_package_name_from_id_query = "select package_Name from packages where package_id = :package_id;";
    try {
        $get_package_name_from_id_statement = $db->prepare($get_package_name_from_id_query);
        $get_package_name_from_id_statement->bindValue(':package_id', $package_id);
        $get_package_name_from_id_statement->execute();
        $get_package_name_from_id_result = $get_package_name_from_id_statement->fetch();
        $get_package_name_from_id_statement->closeCursor();
        if($get_package_name_from_id_result === false) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
        else {
            return $get_package_name_from_id_result['package_Name'];
        }
    }
    catch(Exception $ex) {
        $error_code = 2;
        header('location:./index.php?action=error&errorCode=' . $error_code);
    }
}

?>