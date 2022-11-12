<?php
    function check_email_exist($email) {
        global $db;
        $check_email_exist_query = 'select user_Id from user where user_Email = :email;';
        try {
            $check_email_exist_statement = $db->prepare($check_email_exist_query);
            $check_email_exist_statement->bindValue(':email', $email);
            $check_email_exist_statement->execute();
            $check_email_exist_result = $check_email_exist_statement->fetch();
            $check_email_exist_statement->closeCursor();
            return ($check_email_exist_result !== false);
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }

    function insert_user_record($fname, $email, $mobilenumber, $password) {
        global $db;
        $insert_user_record_query = "insert into user (user_Full_Name, user_Mobile_Number, user_Email, user_Password) values (:fname, :mobilenumber, :email, :password);";
        try {
            $insert_user_record_statement = $db->prepare($insert_user_record_query);
            $insert_user_record_statement->bindValue(':fname', $fname);
            $insert_user_record_statement->bindValue(':email', $email);
            $insert_user_record_statement->bindValue(':mobilenumber', $mobilenumber);
            $insert_user_record_statement->bindValue(':password', $password);
            $insert_user_record_statement->execute();
            $insert_user_record_statement->closeCursor();
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }

    function get_user_id_from_email($email) {
        global $db;
        $get_user_id_from_email_query = 'select user_Id from user where user_Email = :email;';
        try {
            $get_user_id_from_email_statement = $db->prepare($get_user_id_from_email_query);
            $get_user_id_from_email_statement->bindValue(':email', $email);
            $get_user_id_from_email_statement->execute();
            $get_user_id_from_email_result = $get_user_id_from_email_statement->fetch();
            $get_user_id_from_email_statement->closeCursor();
            if($get_user_id_from_email_result !== false) {
                return $get_user_id_from_email_result['user_Id'];
            }
            else {
                $error_code = 4;
                header('location:./index.php?action=error&errorCode=' . $error_code);
            }
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }

    function get_password_from_email($email) {
        global $db;
        $get_password_from_email_query = 'select user_Password from user where user_Email = :email'; 
        try {
            $get_password_from_email_statement = $db->prepare($get_password_from_email_query);
            $get_password_from_email_statement->bindValue(':email', $email);
            $get_password_from_email_statement->execute();
            $get_password_from_email_result = $get_password_from_email_statement->fetch();
            $get_password_from_email_statement->closeCursor();
            if($get_password_from_email_result === false) {
                $error_code = 6;
                header('location:./index.php?action=error&errorCode=' . $error_code);
            }
            else {
                return $get_password_from_email_result['user_Password'];
            }
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }

    function get_user_name_from_id($user_id) {
        global $db;
        $get_user_name_from_id_query = "select user_Full_Name from user where user_id = :user_id;";
        try {
            $get_user_name_from_id_statement = $db->prepare($get_user_name_from_id_query);
            $get_user_name_from_id_statement->bindValue(':user_id', $user_id);
            $get_user_name_from_id_statement->execute();
            $get_user_name_from_id_result = $get_user_name_from_id_statement->fetch();
            $get_user_name_from_id_statement->closeCursor();
            if($get_user_name_from_id_result === false) {
                $error_code = 2;
                header('location:./index.php?action=error&errorCode=' . $error_code);
            }
            else {
                return $get_user_name_from_id_result['user_Full_Name'];
            }
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    
    }

    function get_user_email_from_id($user_id) {
        global $db;
        $get_user_email_from_id_query = "select user_Email from user where user_id = :user_id;";
        try {
            $get_user_email_from_id_statement = $db->prepare($get_user_email_from_id_query);
            $get_user_email_from_id_statement->bindValue(':user_id', $user_id);
            $get_user_email_from_id_statement->execute();
            $get_user_email_from_id_result = $get_user_email_from_id_statement->fetch();
            $get_user_email_from_id_statement->closeCursor();
            if($get_user_email_from_id_result === false) {
                $error_code = 2;
                header('location:./index.php?action=error&errorCode=' . $error_code);
            }
            else {
                return $get_user_email_from_id_result['user_Email'];
            }
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }    
    }

    function get_user_contact_from_id($user_id) {
        global $db;
        $get_user_contact_from_id_query = "select user_Mobile_Number from user where user_id = :user_id;";
        try {
            $get_user_contact_from_id_statement = $db->prepare($get_user_contact_from_id_query);
            $get_user_contact_from_id_statement->bindValue(':user_id', $user_id);
            $get_user_contact_from_id_statement->execute();
            $get_user_contact_from_id_result = $get_user_contact_from_id_statement->fetch();
            $get_user_contact_from_id_statement->closeCursor();
            if($get_user_contact_from_id_result === false) {
                $error_code = 2;
                header('location:./index.php?action=error&errorCode=' . $error_code);
            }
            else {
                return $get_user_contact_from_id_result['user_Mobile_Number'];
            }
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }    
    }
?>