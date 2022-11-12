<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/css/main.css">
    <!--icon use only-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Home</title>
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
        <a href="./index.php?action=home" class="active">Home</a>
            <a href="./index.php?action=tourPackages">Tour Packages</a>
            <a href="./index.php?action=reviews">Reviews</a>
            <a href="./index.php?action=about">About Us</a>
            <a href="./index.php?action=contact">Contact Us</a>
        </div>
    </div>
    <div>
        <br>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <img src="./view/images/slide1.jpeg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./view/images/slide2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <img src="./view/images/slide3.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="./view/images/slide4.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="./view/images/silde5.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="./view/images/slide6.jpg" style="width:100%">
            </div>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        <div class="card">
        <fieldset>
            <legend align="center"><h2>Why ABC Travels</h2></legend>
            <div class="align1">
                <p>Welcome to ABC Travels! We are a dedicated travel destination management company in Sri Lanka. 
                    As one of the leading travel agents in Sri Lanka, we not only provide a wide range of holiday packages to Local destinations but help you plan your trip, organising itineraries to suit your excursion interests, arranging accommodation or transport requirements. 
                    Come, and discover a world beyond your own with ABC Travels your trusted travel partner.</p>
                <a href="./index.php?action=about">READ MORE</a>
            </div>
        </fieldset>
    </div>
    <div class="card">
        <fieldset>   
                <legend align="center"><h2>Why Choose Us</h2></legend>
                <p><strong> A number of people have chosen us as their number one travel destination management company and you will also choose us for the following reasons.</strong></p>
                <table width="100%">
                    <ul class="img-label"></ul>
                    <tr>
                        <td>
                            <div class="mr-3">
                                <li>
                                    <img src="./view/images/a.png" alt="Reason Icon">
                                    <p>We are one of the top destination management companies in Sri Lanka.</p>
                                </li>
                            </div>
                        </td>
                        <td>
                            <div class="mr-3">
                                <li>
                                    <img src="./view/images/b.png" alt="Reason Icon">
                                    <p>We are one of the leading travel agents in Sri Lanka.</p>
                                </li>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mr-3">
                                <li>
                                    <img src="./view/images/c.png" alt="Reason Icon">
                                    <p>We are one of the leading tour operators in Sri Lanka.</p>
                                </li>
                            </div>
                        </td>
                        <td>
                            <div class="mr-3">
                                <li>
                                    <img src="./view/images/d.png" alt="Reason Icon">
                                    <p>We provide custom-made &amp; specialized tours to our clients.</p>
                                </li>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mr-3">
                                <li>
                                    <img src="./view/images/e.png" alt="Reason Icon">
                                    <p>We offer a complete travel package to travelers and travel agents.</p>
                                </li>
                            </div>
                        </td>
                        <td>
                            <div class="mr-3">
                                <li>
                                    <img src="./view/images/f.png" alt="Reason Icon">
                                    <p>We are a leading travel agent in Sri Lanka who provides tours and<br> holiday packages to exotic destinations.</p>
                                </li>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="mr-3">
                                <li>
                                    <img src="./view/images/g.png" alt="Reason Icon">
                                    <p>We have a passionate and professional team consisting of 40 <br> who possess extensive knowledge on the Sri Lanka tourism industry.</p>
                                </li>
                            </div>
                        </td>
                        <td>
                            <div class="mr-3">
                                <li>
                                    <img src="./view/images/h.png" alt="Reason Icon">
                                    <p>We offer 24/7 customer support to our clients.</p>
                                </li>
                            </div>
                        </td>
                    </tr>
                    
                </table>
        </fieldset>
    </div>

    <div class="card">
        <fieldset>   
            <legend><h1 class="field-title">Did you <br> know?</h1></legend>
                        <div class="bulb">
                            <img src="./view/images/bulb.png" alt="Bulb">
                        </div>
                    <div class="dyk-body">
                        <div class="dyk1">Interesting Fact </div>
                        <div align="right">
                                Did you know that Sri Lanka &amp; Maldives are two countries that you can travel to without being<br> quarantined? 
                                    These two countries DO NOT have any quarantine requirement and they are open for Covid<br> 19 vaccinated and non-vaccinated travellers.
                                
                        </div>
                    </div>
        </fieldset> 
    </div>
    <br>
    <br>

    </div>
    <div class="footer-1-0">
        <div class="head-footer">
            <div class="sub_text1">
                <div>
                    <a href="?#" target="_blank"><img src="./view/images/facebook.png" height="40px" width="40px"></a>
                    <a href="?#" target="_blank"><img src="./view/images/instagram.png" height="40px" width="40px"></a>
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
        myFunction(); //nav bar block
        seeButton(); // nav button
    };
    /* var define*/
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    var upbutton = document.getElementById("goToUp");
    /*Nav bar block funtcion*/
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
    /* nav button see funtcion*/
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
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let j;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (j = 0; j < slides.length; j++) {
            slides[j].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (j = 0; j < dots.length; j++) {
            dots[j].className = dots[j].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
</script>