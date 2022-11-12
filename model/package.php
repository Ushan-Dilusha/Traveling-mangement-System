<?php
    function get_package_record($package_id) {
        global $db;
        $get_package_record_query = 'select * from packages where package_id = :package_id';
        try {
            $get_package_record_statement = $db->prepare($get_package_record_query);
            $get_package_record_statement->bindValue(':package_id', $package_id);
            $get_package_record_statement->execute();
            $get_package_record_result = $get_package_record_statement->fetch();
            $get_package_record_statement->closeCursor();
            return $get_package_record_result;
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }
?>