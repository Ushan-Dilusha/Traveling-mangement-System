<?php
    function insert_Subscribe_record($subscribe_id, $email_address) {
        global $db;
        $insert_Subscribe_record_query = 'insert into Subscribe (subscribe_id, subscribe_email) values (:subscribe_id, :email_address);';
        try {
            $insert_Subscribe_record_statement = $db->prepare($insert_Subscribe_record_query);
            $insert_Subscribe_record_statement->bindValue(':subscribe_id', $subscribe_id);
            $insert_Subscribe_record_statement->bindValue(':subscribe_email', $email_address);
            $insert_Subscribe_record_statement->execute();
            $insert_Subscribe_record_statement->closeCursor();
        }
        catch(Exception $ex) {
            $error_code = 3;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }
?>