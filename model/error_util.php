<?php
    function get_error_message($error_code) {
        $error_msg = null;
        switch($error_code) {
            case 1:
                $error_msg = 'The data entered is invalid. Please try again.';
                break;
            case 2:
                $error_msg = 'A problem occured while connecting to the database. Pease try again later.';
                break;
            case 3:
                $error_msg = 'Sorry the e-mail you entered is already in use. Try a different one.';
                break;
            case 4:
                $error_msg = 'An error occured while creating your account. Please try again later.';
                break;
            case 5:
                $error_msg = 'E-mail not found. Try a different e-mail, or create a new account.';
                break;
            case 6:
                $error_msg = 'An error occured while logging you in. Please try again later.';
                break;
            case 7:
                $error_msg = 'Password is incorrect. Please try again.';
                break;  
            case 8:
                $error_msg = 'Booking date must be a later date from today.';
                break;
            default:
                $error_msg = "No errors to report.";
        }
        return $error_msg;
    }
?>