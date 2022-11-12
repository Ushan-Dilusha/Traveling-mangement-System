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
    <title>Add New Package</title>
</head>

<body>
    <div>
        <div>
        <div class="sidebar">
                <a href="./index.php?action=adminDashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                <a href="./index.php?action=addPackage"class="active"><i class="fa fa-fw fa-wrench"></i> Add Package</a>
                <a href="./index.php?action=booking"><i class="fa fa-book" aria-hidden="true"></i> Booking</a>
                <a href="./index.php?action=logout"><i class="fa fa-share-square-o"></i> Logout</a>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="main-body">
            <div>
                <h1 class="h1-add">Add New Package</h1>
                <?php if($errorCode !== 0):?>
                <div style="text-align: center; font-family: Arial, Helvetica, sans-serif; color: red;">
                    <p><?php echo get_error_message($errorCode)?></p>
                </div>
                <?php endif?>
                <form action="./index.php" method="POST" enctype="multipart/form-data">
                    <label for="packageImage" class="labels">Package Image :</label>
                    <input type="file" name="myfile" accept=".jpg,.jpeg,.png" class="input"> <br><br>

                    <label for="packageName" class="labels">Package Name :</label>
                    <input type="text" placeholder="Package Name" name="packageName" class="input-1"><br><br>

                    <label for="packageType" class="labels">Package Type :</label>
                    <input type="text" placeholder="Package Type" name="packagetype" class="input"><br><br>

                    <label for="packagePrice" class="labels">Package Price :</label>
                    <input type="number" min="0.00" max="99999.99" step="0.01" placeholder="$-Package Price" name="packageprice" class="input"><br><br>

                    <label for="packageDetails" class="labels">Package Details :</label>
                    <textarea name="packageDetails" rows="10" cols="100" class="text-area" placeholder="Type your package Details..."></textarea><br><br>
                    <input type="hidden" name="action" value="addPackageScript">
                    <input type="submit" value="Submit" class="send-button">
                </form>
            </div>
            <div>


            </div>

        </div>
    </div>

</body>

</html>