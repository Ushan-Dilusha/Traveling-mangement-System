<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/admin_panel.css">
    <!--icon use only-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--icon use only-->
    <title>Admin</title>
</head>

<body style="overflow-x: hidden;">
    <div>
        <div>
            <div class="sidebar">
                <a href="./index.php?action=adminDashboard" class="active"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                <a href="./index.php?action=addPackage"><i class="fa fa-fw fa-wrench"></i> Add Package</a>
                <a href="./index.php?action=booking"><i class="fa fa-book" aria-hidden="true"></i> Booking</a>
                <a href="./index.php?action=logout"><i class="fa fa-share-square-o"></i> Logout</a>
            </div>
        </div>
    </div>
    <div class="main">
        <span class="activeadmin"><i class="fa fa-user"></i>&nbsp;</i><?php echo get_admin_name_from_id($_SESSION['admin_id'])?></span>
    </div>
    <div style="margin:0px 0px 0px 120px;">
        <div>
            <h1 style="text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            margin: 200px 100px 20px 400px;
            width: 400px;
            }">Welcome on Board!!&nbsp;<br><?php echo get_admin_name_from_id($_SESSION['admin_id'])?></h1>
        </div>
        <div class="image-setting">
            <i class="fa fa-cog fa-spin fa-5x fa-fw"></i>
            <span class="sr-only">Loading...</span>
        </div>
        <div>
            <h1 class="dashbord-hedaer">Now You Can Manage</h1>
        </div>
    </div>
    
</body>

</html>