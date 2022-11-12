<?php
    function insert_booking_record($user_id, $package_id, $from_date, $booking_timedate, $comment, $booking_state) {
        global $db;
        $insert_booking_record_query = 'insert into booking (user_Id, Package_Id, from_Date, booking_TimeDate, comment, booking_state) values (:user_id, :package_id, :from_date, :booking_timedate, :comment, :booking_state);';
        try {
            $insert_booking_record_statement = $db->prepare($insert_booking_record_query);
            $insert_booking_record_statement->bindValue(':user_id', $user_id);
            $insert_booking_record_statement->bindValue(':package_id', $package_id);
            $insert_booking_record_statement->bindValue(':from_date', $from_date);
            $insert_booking_record_statement->bindValue(':booking_timedate', $booking_timedate);
            $insert_booking_record_statement->bindValue(':comment', $comment);
            $insert_booking_record_statement->bindValue(':booking_state', $booking_state);
            $insert_booking_record_statement->execute();
            $insert_booking_record_statement->closeCursor();            
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }
?>