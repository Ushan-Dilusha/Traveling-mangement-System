<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="./view/css/main_other.css">
    <!--icon use only-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Login</title>
</head>

<body style="overflow-x: hidden; background-color: black;">

    <div class="su-body">
        <div>
            <div>
            </div>
            <div class="login-ma" style="background-color: white;">
                <h1>Admin Login</h1>
                <?php if($errorCode !== 0):?>
                <div style="text-align: center; font-family: Arial, Helvetica, sans-serif; color: red;">
                    <p><?php echo get_error_message($errorCode)?></p>
                </div>
                <?php endif?>
                <form action="./index.php" method="post">
                    <input type="text" name="adminUserName" id="adminUserName" placeholder="Enter your Username" required class="ma-input"><br><br>
                    <input type="password" name="adminPassword" id="adminPassword" placeholder="Password" value="" required class="ma-input"><br><br>
                    <input type="hidden" name="action" value="adminLoginScript">
                    <input type="hidden" name="nextAction" value="<?php echo $nextAction?>">
                    <input type="submit" name="signin" value="SIGNIN" class="ma-button">
                </form>
            </div>
        </div>
    </div>
</body>

</html>