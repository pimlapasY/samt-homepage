 <!-- info section -->
 <style>
.cookie-consent-bar {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    text-align: center;
    padding: 15px;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
}

.cookie-consent-bar button {
    margin-left: 15px;
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

.cookie-consent-bar button:hover {
    background-color: #45a049;
}
 </style>
 <section class="info_section ">
     <div class="info_container layout_padding2">
         <div class="container">
             <div class="info_logo mx-auto">
                 <a class="navbar-brand mx-auto" href="index.php"> <img src="images/logo.png">
                 </a>
             </div>
             <div class="info_main">
                 <div class="row">
                     <!-- <div class="col-md-3 col-lg-2">
                         <div class="info_link-box">
                             <h5>
                                 Useful Link
                             </h5>
                             <ul>
                                 <li class=" active">
                                     <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                                 </li>
                                 <li class="">
                                     <a class="" href="about.html">About </a>
                                 </li>
                                 <li class="">
                                     <a class="" href="service.html">Services </a>
                                 </li>
                                 <li class="">
                                     <a class="" href="portfolio.html"> Portfolio </a>
                                 </li>
                                 <li class="">
                                     <a class="" href="contact.html"> Contact </a>
                                 </li>
                             </ul>
                         </div>
                     </div> -->
                     <div class="col-md-3 mb-2">
                         <h5>
                             Email :
                         </h5>
                         <p>
                             sales@samt.co.th <br>
                             personnel@samt.co.th<br>
                             purchase1@samt.co.th
                         </p>
                     </div>
                     <div class="col-md-3 mx-auto">
                         <h5>
                             social media :
                         </h5>
                         <div class="social_box">
                             <a href="https://www.facebook.com/ShippoAsahiTH/" target="_blank">
                                 <i class="fa fa-facebook" aria-hidden="true"></i>
                             </a>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <h5>
                             Address :
                         </h5>
                         <p>
                             <a href="https://maps.app.goo.gl/JJbsAVG5MLVrfNSf6" target="_blank">
                                 438 Moo 17, Bangplee Industrial Estate Soi 7,
                                 Bang Sao Thong Subdistrict, Bang Sao Thong District, Samut Prakan 10570
                             </a>
                         </p>
                     </div>
                 </div>
             </div>
             <div class="info_bottom">
                 <div class="row">
                     <div class="col-lg-9">
                         <div class="info_contact ">
                             <div class="row">
                                 <div class="col-md-3">
                                     <a href="contact.php" class="link-box">
                                         <i class="fa fa-map-marker" aria-hidden="true"></i>
                                         <span>
                                             Location
                                         </span>
                                     </a>
                                 </div>
                                 <div class="col-md-5">
                                     <a href="#" class="link-box">
                                         <i class="fa fa-phone" aria-hidden="true"></i>
                                         <span>
                                             02-706-7800
                                         </span>
                                     </a>
                                 </div>
                                 <!-- <div class="col-md-4">
                                     <a href="#" class="link-box">
                                         <i class="fa fa-envelope" aria-hidden="true"></i>
                                         <span>
                                             demo@gmail.com
                                         </span>
                                     </a>
                                 </div> -->
                             </div>
                         </div>
                     </div>
                     <!-- <div class="col-md-3">
                         <div class="info_form ">
                             <form action="">
                                 <input type="email" placeholder="Enter Your Email" />
                                 <button>
                                     <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                 </button>
                             </form>
                         </div>
                     </div> -->
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- footer section -->
 <footer class="footer_section">
     <div class="container">
         <p class="text-black-50">
             &copy; 2024</span> Shippo Asahi Moulds (Thailand) Co., Ltd. All Rights Reserved.</a>
         </p>
     </div>
 </footer>
 <!-- footer section -->

 <!-- Your page content goes here -->

 <div class="cookie-consent-bar" id="cookieConsentBar">
     <?php echo $cookie;
     echo '<button id="acceptCookiesButton">'. $accept .'</button>'; ?>
 </div>

 <script>
document.addEventListener('DOMContentLoaded', function() {
    const cookieConsentBar = document.getElementById('cookieConsentBar');
    const acceptCookiesButton = document.getElementById('acceptCookiesButton');

    // Check if the cookie consent has already been accepted
    if (localStorage.getItem('cookiesAccepted') === 'true') {
        cookieConsentBar.style.display = 'none';
    }

    acceptCookiesButton.addEventListener('click', function() {
        // Set a flag in localStorage to indicate that cookies have been accepted
        localStorage.setItem('cookiesAccepted', 'true');
        // Hide the cookie consent bar
        cookieConsentBar.style.display = 'none';
    });
});
 </script>