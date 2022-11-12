<?php
    function check_admin_uname($uname) {
        global $db;
        $check_admin_uname_query = 'select admin_Id from admin where admin_User_Name = :uname;';
        try {
            $check_admin_uname_statement = $db->prepare($check_admin_uname_query);
            $check_admin_uname_statement->bindValue(':uname', $uname);
            $check_admin_uname_statement->execute();
            $check_admin_uname_result = $check_admin_uname_statement->fetch();
            $check_admin_uname_statement->closeCursor();
            return ($check_admin_uname_result !== false);
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }

    function get_admin_password($uname) {
        global $db;
        $get_admin_password_query = 'select admin_Password from admin where admin_User_Name = :uname;';
        try {
            $get_admin_password_statement = $db->prepare($get_admin_password_query);
            $get_admin_password_statement->bindValue(':uname', $uname);
            $get_admin_password_statement->execute();
            $get_admin_password_result = $get_admin_password_statement->fetch();
            $get_admin_password_statement->closeCursor();
            if($get_admin_password_result === false) {
                $error_code = 6;
                header('location:./index.php?action=error&errorCode=' . $error_code);
            }
            else {
                return $get_admin_password_result['admin_Password'];
            }
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        }
    }

    function get_admin_id_from_uname($uname) {
        global $db;
        $get_admin_id_from_uname_query = 'select admin_Id from admin where admin_User_Name = :uname;';
        try {
            $get_admin_id_from_uname_statement = $db->prepare($get_admin_id_from_uname_query);
            $get_admin_id_from_uname_statement->bindValue(':uname', $uname);
            $get_admin_id_from_uname_statement->execute();
            $get_admin_id_from_uname_result = $get_admin_id_from_uname_statement->fetch();
            $get_admin_id_from_uname_statement->closeCursor();
            if($get_admin_id_from_uname_result === false) {
                $error_code = 6;
                header('location:./index.php?action=error&errorCode=' . $error_code);
            }
            else {
                return $get_admin_id_from_uname_result['admin_Id'];
            }
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);
        } 
    }

    function get_admin_name_from_id($admin_id) {
        global $db;
        $get_admin_name_from_id_query = 'select admin_Name from admin where admin_Id = :admin_id;';
        try {
            $get_admin_name_from_id_statement = $db->prepare($get_admin_name_from_id_query);
            $get_admin_name_from_id_statement->bindValue(':admin_id', $admin_id);
            $get_admin_name_from_id_statement->execute();
            $get_admin_name_from_id_result = $get_admin_name_from_id_statement->fetch();
            $get_admin_name_from_id_statement->closeCursor();
            if($get_admin_name_from_id_result === false) {
                $error_code = 2;
                header('location:./index.php?action=error&errorCode=' . $error_code);   
            }
            else {
                return $get_admin_name_from_id_result['admin_Name'];
            }
        }
        catch(Exception $ex) {
            $error_code = 2;
            header('location:./index.php?action=error&errorCode=' . $error_code);   
        }
    }
?>