<?php
    function insert_review_record($user_id, $fname, $comment) {
        global $db;
        $insert_review_record_query = 'insert into review (user_Id, user_Name, review_Comment) values (:user_id, :fname, :comment);';
        try {
            $insert_review_record_statement = $db->prepare($insert_review_record_query);
            $insert_review_record_statement->bindValue(':user_id', $user_id);
            $insert_review_record_statement->bindValue(':fname', $fname);
            $insert_review_record_statement->bindValue(':comment', $comment);
            $insert_review_record_statement->execute();
            $insert_review_record_statement->closeCursor();
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }
?>