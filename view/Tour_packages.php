<?php
    $get_packages_query = 'select * from packages;';
    $get_packages_statement =$db->prepare($get_packages_query);
    $get_packages_statement->execute();
    $get_packages_result = $get_packages_statement->fetch();
?>

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
    <title>Tour Packages</title>
</head>

<body style="overflow-x: hidden;">
<div class="header">
        <div><span class="heading1">Keep Calm and Have a Safe Trip.</span>
        <span class="login">
                <?php if(isset($_SESSION['user_id'])):?>
                    <a href="./index.php?action=logout"class="all-link"><i class="fa fa-power-off"></i>&nbsp;</i>Logout</a>
                <?php else:?>
                    <a href="./index.php?action=myAccount&nextAction=home"class="all-link"><i class="fa fa-user"></i>&nbsp;</i>Login / Register</a>
                <?php endif;?>
        </span>
            <hr class="hr-style">
        </div>
        <div>
            <img src="./view/images/phone-icon.svg" class="phone-logo" alt="phone-logo">
            <p class="phone-number ">Call us:<br><a href="tel:+94110123456" class="all-link">+94 11 012 456</a> <br>
        </div>
        <div>
        <div >
        <div class="img-centers">
               <img src="./view/images/Hederbar.jpeg" width="550wv" height="130hv">
               </div>
           
            </div>
        <img src="./view/images/Logo.png" class="header-logo" alt="header-logo">
        
        </div>
        <div id="navbar">
        <a href="./index.php?action=home">Home</a>
            <a href="./index.php?action=tourPackages" class="active">Tour Packages</a>
            <a href="./index.php?action=reviews">Reviews</a>
            <a href="./index.php?action=about">About Us</a>
            <a href="./index.php?action=contact">Contact Us</a>
        </div>
    </div>
        <div>
            <!-- Package -->
            <?php while($get_packages_result != null):?>
            <a href="./index.php?action=packagedetalis&packageId=<?php echo $get_packages_result['package_id']?>" class="package-title">
                <div class="package-div">
                    <img src="<?php echo $get_packages_result['package_Image']?>" width="400" height="250" alt="<?php echo $get_packages_result['package_Name']?>" class="package-image">
                    <h2 class="package-title"><?php echo $get_packages_result['package_Name']?></h2>
                    <h3 class="package-title">USD : <?php echo $get_packages_result['package_Price']?></h3>
                </div>
            </a>
            <?php $get_packages_result = $get_packages_statement->fetch();?>
            <?php endwhile?>
            <?php $get_packages_statement->closeCursor()?>
            <!-- Package -->
        </div>
    </div>
    <div class="footer-1-0">
        <div class="head-footer">
            <div class="sub_text1">
                <div>
                    <a href="#" target="_blank"><img src="./view/images/facebook.png" height="40px" width="40px"></a>
                    <a href="#" target="_blank"><img src="./view/images/instagram.png" height="40px" width="40px"></a>
                    <a href="#" target="_blank"><img src="./view/images/twitter.png" height="40px" width="40px"></a>
                    <a href="#" target="_blank"><img src="./view/images/whatsapp.png" height="40px" width="40px"></a>
                    <a href="#" data-toggle="modal" data-target="#eme-share"><img src="./view/images/share.png" height="40px" width="40px"></a>
                </div>
	        </div>
    
            <div>
                <div class="sub_text">
                <div class="payment-methods">
                    <i><img src="./view/images/visa-card.png" alt="Visa Logo"></i>
                    <i><img src="./view/images/master-card.png" alt="Master Card Logo"></i>
                    <i><img src="./view/images/pay-pal.png" alt="Pay Pal Logo"></i>
                    <i><img src="./view/images/american-express.png" alt="American Express Logo"></i>
                    <i><img src="./view/images/ali-pay.png" alt="Ali Pay Logo"></i>
                    <i><img src="./view/images/WU.png" alt="Western Union Logo"></i>
                    </div>
                </div>
                
                <img src="./view/images/Logo.png" alt="footer-logo" class="footer-logo">
            </div>
            <div class="footer-ul1">
                <ul>
                    <li class="footer-ul-topic">Support</li>
                    <li><a href="./index.php?action=returnrefundpolicy" class="footer-ul-data">Return & Refund Policy</a></li>
                    <li><a href="./index.php?action=termsandconditions" class="footer-ul-data">Terms and Conditions</a></li>
                    <li><a href="./index.php?action=privacypolicy" class="footer-ul-data">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer-ul2">
                <ul>
                    <li class="footer-ul-topic">Tour & Agent</li>
                    <li><a href="https://www.srilanka.travel/travel-agents" target="_blank" class="footer-ul-data">Travel Agent</a></li>
                    <li><a href="./index.php?action=tourPackages" class="footer-ul-data">Tout Packages</a></li>
                    <li><a href="https://goo.gl/maps/3S4wCLBSmD39az9EA" traget="_blank"class="footer-ul-data">Map</a></li>
                </ul>
            </div>
            <div class="footer-ul3">
                <ul>
                    <li class="footer-ul-topic">About Us</li>
                    <li class="footer-ul-data">Phone : <a href="tel:+94110123456" class="footer-ul-data">+94 11 012 456</a></li>
                    <li class="footer-ul-data">Email :<a href="mailto:info@abc.com" class="footer-ul-data"> info@abc.com</a></li>
                    <li><a href="./index.php?action=contact" class="footer-ul-data">Contact Us</a></li>
                </ul>
            </div>
        </div>
        <div>
            <hr class="hr-style">
            <p class="footer-p-1"> ABC Travel &copy; 2022. All Rights Reserved</p>
        </div>
    </div>
    <button onclick="scrollToUp()" id="goToUp" title="Go to Up" class="upbutton"><i class="fa fa-arrow-up"></i></button>
</body>

</html>
<script>
    window.onscroll = function() {
        myFunction();
        seeButton();
    };

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    var upbutton = document.getElementById("goToUp");

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }

    function seeButton() {
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
            upbutton.style.display = "block";
        } else {
            upbutton.style.display = "none";
        }
    }

    function scrollToUp() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>