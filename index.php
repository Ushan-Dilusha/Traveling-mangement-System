<?php
    require('./model/database.php');
    require('./model/user_db.php');
    require('./model/review_db.php');
    require('./model/error_util.php');
    require('./model/subscribe_db.php');
    require('./model/package.php');
    require('./model/booking_db.php');
    $action = filter_input(INPUT_POST, 'action');
    if($action === null) {
        $action = filter_input(INPUT_GET, 'action');
        if($action === null) {
            $action = 'home';
        }
    }
    switch($action) {
        case 'home':
            session_start();
            include('./view/home.php');
            break;

        case 'myAccount':
            $nextAction = filter_input(INPUT_GET, 'nextAction');
            $errorCode = filter_input(INPUT_GET, 'errorCode', FILTER_VALIDATE_INT);
            $isReg = filter_input(INPUT_GET, 'isReg');

            session_start();
            if(isset($_SESSION['user_id'])) {
                session_write_close();
                header('location:./index.php?action=' . $nextAction);
            }
            
            if(empty($errorCode) || $errorCode===false) {
                $errorCode = 0;
            }
            include('./view/pages/myaccount.php');
            break;

        case 'register':
            $fname = filter_input(INPUT_POST, 'fname');
            $mobilenumber = filter_input(INPUT_POST, 'mobilenumber');
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $nextAction = filter_input(INPUT_POST, 'nextAction');
            $isValid = true;
            $error_code = 0;

            $fname = trim($fname);
            if(empty($fname)) {
                $isValid = false;
                $error_code = 1;
            }

            $mobilenumber = trim($mobilenumber);
            if(empty($mobilenumber)) {
                $isValid = false;
                $error_code = 1;
            }

            $email = trim($email);
            if(empty($email)) {
                $isValid = false;
                $error_code = 1;
            }

            if(empty($password)) {
                $isValid = false;
                $error_code = 1;
            }
            if($isValid) {
                if(check_email_exist($email)) {
                    $error_code = 3;
                    header('location:./index.php?action=myAccount&nextAction=' . $nextAction . '&errorCode=' . $error_code . '&isReg=true');
                }
                else {
                    $fname = htmlspecialchars($fname);
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                    insert_user_record($fname, $email, $mobilenumber, $hash);
                    session_start();
                    $user_id = get_user_id_from_email($email);
                    $_SESSION['user_id'] = $user_id;
                    session_write_close();
                    header('location:./index.php?action=myAccount&nextAction=' . $nextAction);
                }
            }
            else {
                header('location:./index.php?action=myAccount&nextAction=' . $nextAction . '&errorCode=' . $error_code . '&isReg=true');
            }
            break;

        case 'error':
            session_start();
            $error_code = filter_input(INPUT_GET, 'errorCode');
            $error_message = 'No errors to report.';
            if($error_code !==null && is_numeric($error_code) && $error_code !== 0) {
                $error_message = get_error_message($error_code);
            }
            include('./view/error.php');
            break;

        case 'logout':
            $_SESSION = array();
            $name = session_name();
            $expire = strtotime('-1 year');
            $params = session_get_cookie_params();
            $path = $params['path'];
            $domain = $params['secure'];
            $httponly = $params['httponly'];
            setcookie($name, '', $expire, $path, $domain, $secure, $httponly);
            header('location:./index.php?action=myAccount&nextAction=home');
            break;
        
        case 'login':
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
            $nextAction = filter_input(INPUT_POST, 'nextAction');
            $isValid = true;
            $error_code = 0;

            $email = trim($email);
            if(empty($email)) {
                $isValid = false;
                $error_code = 1;
            }
            
            if(empty($password)) {
                $isValid = false;
                $error_code = 1;
            }

            if($isValid) {
                if(check_email_exist($email)) {
                    $hash = get_password_from_email($email);
                    if(password_verify($password, $hash)) {
                        session_start();
                        $user_id = get_user_id_from_email($email);
                        $_SESSION['user_id'] = $user_id;
                        session_write_close();
                        header('location:./index.php?action=myAccount&nextAction=' . $nextAction);
                    }
                    else {
                        $error_code = 7;
                        header('location:./index.php?action=myAccount&nextAction=' . $nextAction . '&errorCode=' . $error_code); 
                    }
                }
                else {
                    $error_code = 5;
                    header('location:./index.php?action=myAccount&nextAction=' . $nextAction . '&errorCode=' . $error_code); 
                }
            }
            else {
                header('location:./index.php?action=myAccount&nextAction=' . $nextAction . '&errorCode=' . $error_code);    
            }
            break;

        case 'about':
            session_start();
            include('./view/about_us.php');
            break;

        case 'contact':
            session_start();
            include('./view/contact.php');
            break;
        
        case 'tourPackages':
            session_start();
            include('./view/Tour_packages.php');
            break;
        
        case 'reviews':
            $error_code = filter_input(INPUT_POST, 'errorCode');
            if(empty($error_code) || $error_code===false) {
                $error_code = 0;
            }
            session_start();
            include('./view/reviews.php');
            break;

        case 'insertReview':
            session_start();
            if(isset($_SESSION['user_id'])) {
                $fname = filter_input(INPUT_POST, 'fname');
                $comment = filter_input(INPUT_POST, 'comment');
                $isValid = true;
                $error_code = 0;

                $fname = trim($fname);
                if(empty($fname)) {
                    $isValid = false;
                    $error_code = 1;
                }

                $comment = trim($comment);
                if(empty($comment)) {
                    $isValid = false;
                    $error_code = 1;
                }

                if($isValid) {
                    $user_id = $_SESSION['user_id'];
                    $fname = htmlspecialchars($fname);
                    $comment = htmlspecialchars($comment);
                    //Insert
                    insert_review_record($user_id, $fname, $comment);
                    header('location:./index.php?action=reviews');
                }
                else {
                    header('location:./index.php?action=reviews&errorCode=' . $error_code);
                }
            }
            else {
                header('location:./index.php?action=myAccount&nextAction=reviews');
            }
            break;

        case 'returnrefundpolicy':
            session_start();
            include('./view/pages/returnrefundpolicy.php');
            break;

        case 'termsandconditions':
            session_start();
            include('./view/pages/termsandconditions.php');
            break;
               
        case 'privacypolicy':
            session_start();
            include('./view/pages/privacypolicy.php');
            break;

        case 'packagedetalis':
            session_start();
            $package_id = filter_input(INPUT_GET, 'packageId', FILTER_VALIDATE_INT);
            $isValid=true;

            if($package_id===null || $package_id===false) {
                $isValid=false;
            }

            if($isValid) {
                $package_record = get_package_record($package_id);
                if($package_record !== false) {
                    include('./view/pages/packagedetalis.php');
                }
                else {
                    header('location:./index.php?action=tourPackages');
                }
            }
            else {
                header('location:./index.php?action=tourPackages');
            }
            break;
        
            case 'insertBooking':
                session_start();
                if(isset($_SESSION['user_id'])) {
                    $package_id = filter_input(INPUT_POST, 'packageId');
                    $date = filter_input(INPUT_POST, 'date');
                    $comment = filter_input(INPUT_POST, 'comment');
                    $isValid = true;
                    $error_code = 0;
    
                    $comment = trim($comment);
                    if(empty($comment)) {
                        $isValid = false;
                        $error_code = 1;
                    }
                    if(empty($date)) {
                        $isValid = false;
                        $error_code = 1;
                    }

                    $current_date_obj = new DateTime();
                    $date_obj = new DateTime($date);
                    $difference = date_diff($current_date_obj, $date_obj);
                    if($difference->format('%R') !== '+') {
                        $isValid = false;
                        if($error_code === 0) {
                            $error_code = 8;
                        }
                    }
    
                    if($isValid) {
                        $user_id = $_SESSION['user_id'];
                        $comment = htmlspecialchars($comment);
                        $current_date_str = $current_date_obj->format('Y-m-d H:i:s');
                        $booking_state = 'PENDING';
                        //Insert statement
                        insert_booking_record($user_id, $package_id, $date, $current_date_str, $comment, $booking_state);
                        header('location:./index.php?action=tourPackages');

                        

                    }
                    else {
                        header('location:./index.php?action=packagedetalis&packageId=' . $package_id . '&errorCode=' . $error_code);
                    }
                }
                else {
                    header('location:./index.php?action=myAccount&nextAction=tourPackages');
                }
                break;
        default:
            header('location:./index.php?action=home');
    }
?>