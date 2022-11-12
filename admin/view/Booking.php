<?php
    $query = 'select * from booking order by booking_TimeDate desc';
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
?>
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
    <title>Booking</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th,
        td {
            text-align: left;
            padding: 8px;
        }
        
        tr:nth-child(even) {
            background-color: #E8F9FD      }
        
        th {
            background-color:#0AA1DD;
            color: white;
        }
    </style>
</head>

<body>
    <div>
        <div>
        <div class="sidebar">
                <a href="./index.php?action=adminDashboard"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                <a href="./index.php?action=addPackage"><i class="fa fa-fw fa-wrench"></i> Add Package</a>
                <a href="./index.php?action=booking" class="active"><i class="fa fa-book" aria-hidden="true"></i> Booking</a>
                <a href="./index.php?action=logout"><i class="fa fa-share-square-o"></i> Logout</a>
            </div>
        </div>
    </div>
    <div class="main">
        <div>
            <h1 class="h1-add">Package Booking</h1>
            <table border="1" style="border-style: inset;">
                <tr>
                    <th>Package Name</th>
                    <th>User name</th>
                    <th>Date</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>Booking Date &amp; Time</th>
                    <th>Comment</th>
                    <th>Booking State</th>

                </tr>
                <?php while($result != null):?>
                <tr>
                    <td><?php echo get_package_name_from_id($result['Package_Id'])?></td>
                    <td><?php echo get_user_name_from_id($result['user_Id'])?></td>
                    <td><?php echo $result['from_Date']?></td>
                    <td><?php echo get_user_contact_from_id($result['user_Id'])?></td>
                    <td><?php echo get_user_email_from_id($result['user_Id'])?></td>
                    <td><?php echo $result['booking_TimeDate']?></td>
                    <td><?php echo $result['comment']?></td>

                    <?php
                        $booking_state = $result['booking_state'];
                    ?>
                    <?php if($booking_state === 'PENDING'):?>
                        <td style="text-align:center;">
                            <form action="./index.php" method="POST" style="display:inline-block;">
                                <input type="hidden" name="action" value="updateState">
                                <input type="hidden" name="bookingId" value="<?php echo $result['booking_Id']?>">
                                <input type="hidden" name="bookingState" value="ACCEPTED">
                                <input type="submit" value="Accept">
                            </form>
                            <form action="./index.php" method="POST" style="display:inline-block;">
                                <input type="hidden" name="action" value="updateState">
                                <input type="hidden" name="bookingId" value="<?php echo $result['booking_Id']?>">
                                <input type="hidden" name="bookingState" value="DECLINED">
                                <input type="submit" value="Decline">
                            </form>
                        </td>
                    <?php else:?>
                        <td><?php echo $booking_state?></a></td>
                    <?php endif;?>
                    
                </tr>
                <?php $result = $statement->fetch();?>
                <?php endwhile?>
                <?php $statement->closeCursor();?>

            </table>
        </div>
        <div>


        </div>

    </div>
    </div>

</body>

</html>