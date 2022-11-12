<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/main.css">
    <link rel="stylesheet" href="../css/main_other.css">
    <!--icon use only-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Return & Refund Policy</title>
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
            <a href="./index.php?action=tourPackages">Tour Packages</a>
            <a href="./index.php?action=reviews">Reviews</a>
            <a href="./index.php?action=about">About Us</a>
            <a href="./index.php?action=contact">Contact Us</a>
        </div>
    </div>
    <div class="su-body">
        <div>
            <h2>Mode of Refund</h2>
            You acknowledge and understand that refund may be made in the form of a credit note/ voucher such that it may be used for future travel subject to terms applicable thereon or may be done in cash. In all cases, mode of refund (credit note or cash) is dependent
            upon the Travel Agent and/ or Service Provider as the case may be.

            <h2>Covid-19_Bookings, Refund And Cancellations :</h2>
            <p>The Customer agrees that due to recent outbreak of COVID-19 which has been declared as pandemic, there may be instances, where the end service provider (including Travel Agent) either cancels the booking or refuses to provide the services,
                as agreed with the Customer, by assigning or not assigning any specific reason for such refusal. Refusal of service may be due to the reasons including but not limited to the Customer:</p>
            <ul style="list-style-type:circle">
                <li>Exhibiting any symptoms associated with COVID 19.</li>
                <li>Refusing to comply with safety advisories, like wearing protective gear, complying with social distancing norms etc.</li>
                <li>Suffering of any ailment making the Customer vulnerable to the virus</li>
                <li>Posing a threat to the health and safety of others or</li>
                <li>Any other condition put forward by the Central Government, State Governments and statutory bodies etc.</li>
            </ul>
            <p>In such cases TRAVEL TRIANGLE will assume no liability for the refusal of service by the end service provider. The Customer also agrees that refund, if any, for such bookings will be processed by TRAVEL TRIANGLE to the Customer subject to
                receipt of the same from the end service provider. The Customer further understands that due to the outbreak of COVID-19, there may be frequent changes in guidelines and/ or SOPs issued by the Central Government, State Governments and
                statutory bodies etc. that a traveler will have to follow in order to undertake the travel. The Customer agrees to abide with all such guidelines/SOP while undertaking any travel. In case Customer fails to adhere to the same which results
                in the refusal to travel, TRAVEL TRIANGLE will not be held liable for such refusal and refund, if any, shall be strictly as per the terms of the service provider.</p>

            <h2>Indemnification & Restrictions On Refund :</h2>
            <p>The Customer agrees to indemnify, defend and hold harmless Travel Triangle, its affiliates and their respective officers, directors, lawful successors and assigns from and against any and all losses, liabilities, claims, damages, costs and
                expenses (including legal fees and disbursements in connection therewith and interest chargeable thereon) asserted against or incurred by such indemnified persons, that arise out of, result from, or may be payable by virtue of, any breach
                of any representation or warranty provided by the User, or non-adherence of any covenant by the Customer. Travel Triangle reserves its right to hold or forfeit the refund if it found the Customer violating any of the T&Cs.</p>
            <br><br><br><br>
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

    function myFunc() {
        var div1 = document.getElementById("div1");
        var div2 = document.getElementById("div2");
        if (div1.style.display === 'none') {
            div2.style.display = 'none';
            div1.style.display = 'block';
        } else {
            div1.style.display = 'none';
            div2.style.display = 'block';
        }
    }

    function func1() {
        var div1 = document.getElementById("div1");
        var div2 = document.getElementById("div2");
        div1.style.display = "block";
        div2.style.display = "none";
    }

    function func2() {
        var div1 = document.getElementById("div1");
        var div2 = document.getElementById("div2");
        div1.style.display = "none";
        div2.style.display = "block";
    }
</script>