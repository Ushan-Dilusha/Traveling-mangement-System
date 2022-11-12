<?php
    require('./model/database.php');
    require('./model/user_db.php');
    require('./model/review_db.php');
    require('./model/error_util.php');
    require('./model/subscribe_db.php');
    require('./model/admin_db.php');
    require('./model/package.php');
    require('./model/booking_db.php');

    $action = filter_input(INPUT_POST, 'action');
    if($action === null) {
        $action = filter_input(INPUT_GET, 'action');
        if($action === null) {
            $action = 'adminLogin';
        }
    }

    switch($action) {
        case 'adminLogin':
            $nextAction = filter_input(INPUT_GET, 'nextAction');
            $errorCode = filter_input(INPUT_GET, 'errorCode', FILTER_VALIDATE_INT);

            if(empty($nextAction)) {
                $nextAction = 'adminDashboard';
            }

            session_start();
            if(isset($_SESSION['admin_id'])) {
                session_write_close();
                header('location:./index.php?action=' . $nextAction);
            }
            
            if(empty($errorCode) || $errorCode===false) {
                $errorCode = 0;
            }
            include('./view/Adminlogin.php');
            break;
        
        case 'adminLoginScript':
            $adminUserName = filter_input(INPUT_POST, 'adminUserName');
            $adminPassword = filter_input(INPUT_POST, 'adminPassword');
            $nextAction = filter_input(INPUT_POST, 'nextAction');
            $isValid = true;
            $errorCode = 0;

            $adminUserName = trim($adminUserName);
            if(empty($adminUserName)) {
                $isValid = false;
                $errorCode = 1;
            }

            if(empty($adminPassword)) {
                $isValid = false;
                $errorCode = 1;
            }

            if($isValid) {
                if(check_admin_uname($adminUserName)) {
                    $hash = get_admin_password($adminUserName);
                    if(password_verify($adminPassword, $hash)) {
                        session_start();
                        $admin_id = get_admin_id_from_uname($adminUserName);
                        $_SESSION['admin_id'] = $admin_id;
                        session_write_close();
                        header('location:./index.php?action=adminLogin&nextAction=' . $nextAction);
                    }
                    else {
                        $error_code = 7;
                        header('location:./index.php?action=adminLogin&nextAction=' . $nextAction . '&errorCode=' . $error_code); 
                    }
                }
                else {
                    $error_code = 8;
                    header('location:./index.php?action=adminLogin&nextAction=' . $nextAction . '&errorCode=' . $error_code); 
                }
            }
            else {
                header('location:./index.php?action=adminLogin&nextAction=' . $nextAction);
            }
            break;

        case 'adminDashboard':
            session_start();
            if(isset($_SESSION['admin_id'])) {
                include('./view/home.php');
            }
            else {
                header('location:./index.php?action=adminLogin&nextAdmin=' . $action);
            }
            break;
        case 'booking':
            session_start();
            if(isset($_SESSION['admin_id'])) {
                include('./view/Booking.php');
            }
            else {
                header('location:./index.php?action=adminLogin&nextAdmin=' . $action);
            }
            break;
        case 'addPackage':
            session_start();
            if(isset($_SESSION['admin_id'])) {
                $errorCode = filter_input(INPUT_GET, 'errorCode');
                if(empty($errorCode) || $errorCode===false) {
                    $errorCode = 0;
                }
                include('./view/packageAdd.php');
            }
            else {
                header('location:./index.php?action=adminLogin&nextAdmin=' . $action);
            }
            break;
        case 'logout':
            session_start();
            if(isset($_SESSION['admin_id'])) {
                $_SESSION = array();
                $name = session_name();
                $expire = strtotime('-1 year');
                $params = session_get_cookie_params();
                $path = $params['path'];
                $domain = $params['secure'];
                $httponly = $params['httponly'];
                setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
                header('location:./index.php?action=adminLogin&nextAdmin=adminDashboard');
            }
            else {
                header('location:./index.php?action=adminLogin&nextAdmin=adminDashboard');
            }
            break;
        case 'addPackageScript':
            session_start();
            if(isset($_SESSION['admin_id'])) {
                $package_name = filter_input(INPUT_POST, 'packageName');
                $package_type = filter_input(INPUT_POST, 'packagetype');
                $package_price = filter_input(INPUT_POST, 'packageprice', FILTER_VALIDATE_FLOAT);
                $package_details = filter_input(INPUT_POST, 'packageDetails');

                $isValid = true;
                $errorCode = 0;

                $package_name = trim($package_name);
                if(empty($package_name)) {
                    $isValid = false;
                    $errorCode = 1;
                }
                else {
                    $package_name = htmlspecialchars($package_name);
                }

                $package_type = trim($package_type);
                if(empty($package_type)) {
                    $isValid = false;
                    $errorCode = 1;
                }
                else {
                    $package_type = htmlspecialchars($package_type);
                }

                $package_details = trim($package_details);
                if(empty($package_details)) {
                    $isValid = false;
                    $errorCode = 1;
                }
                else {
                    $package_details = htmlspecialchars($package_details);
                }

                if(empty($package_price)) {
                    $isValid = false;
                    $errorCode = 1;
                }

                //Image
                $package_image_temp_name = $_FILES['myfile']['tmp_name'] ?? null;
                $image_type = $_FILES['myfile']['type'] ?? null;

                if(empty($package_image_temp_name)) {
                    $isValid = false;
                    $errorCode = 1;
                }
                else if($image_type!=='image/jpeg' && $image_type!=='image/png') {
                    $isValid = false;
                    if($errorCode === 0) {
                        $errorCode = 9;
                    }
                }
                
                if($isValid) {
                    $next_package_id = get_next_pack_id();
                    $current_wd = getcwd();
                    $current_wd = substr($current_wd, 0, -5);
                    //admin
                    $package_image_path_relative = '.' . DIRECTORY_SEPARATOR . 'package_images' . DIRECTORY_SEPARATOR;
                    $package_image_path_absolute = $current_wd . 'package_images' . DIRECTORY_SEPARATOR;
                    if(!is_dir($package_image_path_absolute)) {
                        mkdir($package_image_path_absolute);
                    }
                    $package_image_path_relative .= $next_package_id;
                    $package_image_path_absolute .= $next_package_id;
                    mkdir($package_image_path_absolute);
                    $package_image_path_absolute .= DIRECTORY_SEPARATOR . $_FILES['myfile']['name'];
                    $package_image_path_relative .= DIRECTORY_SEPARATOR . $_FILES['myfile']['name'];
                    move_uploaded_file($package_image_temp_name, $package_image_path_absolute);
                    insert_package($package_image_path_relative, $package_name, $package_type, $package_price, $package_details);
                    //$package_image, $package_name, $package_type, $package_price, $package_details
                    header('location:./index.php?action=adminDashboard');
                }
                else {
                    header('location:./index.php?action=addPackage&errorCode=' . $errorCode);
                }
            }
            else {
                header('location:./index.php?action=adminLogin&nextAdmin=adminDashboard');
            }
            break;
        case 'updateState':
            $booking_state = filter_input(INPUT_POST, 'bookingState');
            $booking_id = filter_input(INPUT_POST, 'bookingId', FILTER_VALIDATE_INT);
            $isValid = true;

            if($booking_state !== 'ACCEPTED' && $booking_state !== 'DECLINED') {
                $isValid = false;
            }
            if(empty($booking_id) || $booking_id===false) {
                $isValid = false;
            }

            if($isValid) {
                update_booking_state($booking_state, $booking_id);
            }
            header('location:./index.php?action=booking');

            break;
        default:
            header('location:./index.php?action=adminDashboard');
    }
?>