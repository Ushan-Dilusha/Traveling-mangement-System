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
    <title>About Us</title>
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
            <a href="./index.php?action=about" class="active">About Us</a>
            <a href="./index.php?action=contact">Contact Us</a>
        </div>
    </div>
                </div>
                <div>
    <div class="about-body">
        <div class="about-1">
            <h1>About Us</h1>
            <p>
                The SriLanka ABC is managed by ABCVision (Amar Base Company Vision).<br><br> The Website is designed in such a way that it is user friendly and is updated with all the latest statistics regarding the country. SriLanka ABC brings Sri Lanka
                and its famous places for sightseeing right to the tip of your fingers not only you will be very familiar with the country even before you visit it but you will be able to plan your itinerary in advance using the resources provided by
                the website itself. The website gives all the latest pictures and data about places and in the meantime provides helpful hints as to how to spend quality time in Sri Lanka.<br><br> ABCVision is a multimedia company at first dedicated to
                web developing. But now it is also dedicated in bringing Sri Lanka forward to the world and to encourage people from different walks of life to visit the beautiful country.
            </p>
        </div>
        <div class="about-vision">
            <h1>Vision</h1>
            <p>
                To be the best website that provides factual and reliable data about Travel in Sri Lanka.
            </p>
        </div>
        <div class="about-mission">
            <h1>Mission</h1>
            <p>
                To bring the best and reliable facts about Sri Lanka and Travel right to your finger tips.
            </p>
        </div>
        <div class="about-good-reason">
            <h1>Good Reason to Visit Sri Lanka</h1>
            <p>
                If golden beaches, rising waves, misty mountains, mighty elephants, stealthy leopards, giant whales, a majestic past, lovely tea and warm smiles could sum up a country, that would be Sri Lanka.
            </p>
        </div>
    </div>
    <div class="about-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d987022.671687926!2d79.83207826226946!3d6.5269291889795085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae115099fc9cfd9%3A0x4e352fb3d21514b3!2sABC%20tours!5e0!3m2!1sen!2slk!4v1650966599178!5m2!1sen!2slk"
            width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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