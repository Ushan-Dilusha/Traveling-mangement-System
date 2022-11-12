<?php
    function update_booking_state($booking_state, $booking_id) {
        global $db;
        $query = 'update booking set booking_state=:booking_state where booking_Id=:booking_id;';
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':booking_state', $booking_state);
            $statement->bindValue(':booking_id', $booking_id);
            $statement->execute();
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }
?>