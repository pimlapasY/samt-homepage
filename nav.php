<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', '0');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['lang'])) {
        $_SESSION['lang'] = $_POST['lang'];
    }
}

if (isset($_SESSION['lang'])) {
    if ($_SESSION['lang'] === 'TH') {
        include 'lang_th.php';
    } elseif ($_SESSION['lang'] === 'JP') {
        include 'lang_jp.php';
    } else {
        include 'lang_en.php';
    }
} else {
    // หากไม่มีการตั้งค่าภาษาใน session ให้ใช้ค่าเริ่มต้นเป็นภาษาอังกฤษ
    include 'lang_en.php';
}
?>



<style>
/* Hide the header_bottom by default */
.header_bottom {
    display: none;
}

/* Show the header_bottom on screens smaller than 990px */
@media (max-width: 990px) {
    .header_bottom {
        display: block;
    }
}

body {
    /* padding-top: 70px; */
    /* Adjust based on the height of your navbar */
}

/* Style the button */
#toTopBtn {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Fixed/sticky position */
    bottom: 20px;
    /* Place the button at the bottom of the page */
    right: 30px;
    /* Place the button 30px from the right */
    z-index: 99;
    /* Make sure it does not overlap */
    border: none;
    /* Remove borders */
    outline: none;
    /* Remove outline */
    background-color: #6b9ac4;
    /* Set a background color */
    color: white;
    /* Text color */
    cursor: pointer;
    /* Add a mouse pointer on hover */
    padding: 10px;
    /* Some padding */
    border-radius: 20px;
    /* Rounded corners */
    font-size: 20px;
    /* Increase font size */
}

#toTopBtn:hover {
    background-color: #000000;
    color: white;
    /* Add a dark-grey background on hover */
}

html {
    scroll-behavior: smooth;
    /* Smooth scrolling */
}

/* Dropdown menu */
.nav-item.dropdown {
    position: relative;
}

.dropdown-menu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: white;
    min-width: 200px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    z-index: 1000;
}

.dropdown-menu .dropdown-item {
    color: #003471 !important;
    padding: 10px 20px;
    text-decoration: none;
    display: block;
}

.dropdown-menu .dropdown-item:hover {
    background-color: #003471;
    color: white !important;
}

.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}


/* Dropdown arrow icon */
.nav-link.dropdown-toggle .fa {
    margin-left: 5px;
    /* Adjust spacing between text and arrow */
    transition: transform 0.3s ease;
    /* Smooth transition for arrow rotation */
}

/* Rotate arrow icon on dropdown toggle */
.nav-link.dropdown-toggle[aria-expanded="true"] .fa {
    transform: rotate(180deg);
    /* Rotate arrow when dropdown is open */
}
</style>
<!-- header section strats -->
<div class="header_section mb-5">
    <div class="header_top fixed-top">
        <div class="container-fluid header_top_container">
            <a class="navbar-brand " href="index.php"><img class="w-75" src="images/logo.png"></a>
            <a href="index.php" class="text-white">
                SHIPPO ASAHI MOULDS (THAILAND)
            </a>
            <div class="contact_nav justify-content-end align-items-center">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php"><?php echo $home ?> <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"><?php echo $aboutComp ?></a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><?php echo $service ?></a>
                                <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                                    <a class="dropdown-item" href="product.php"><?php echo $ourWork ?></a>
                                    <a class="dropdown-item" href="acana_info.php"><?php echo $acana_head ?></a>
                                </div>
                            </li>
                            <?php if($_SESSION['lang'] == 'JP'){ ?>
                            <li class="nav-item">
                                <a class="nav-link" href="recruitment.php"><?php echo $recruitment; ?></a>
                            </li>
                            <?php } else { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="recruitmentDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><?php echo $recruitment; ?></a>
                                <div class="dropdown-menu" aria-labelledby="recruitmentDropdown">
                                    <a class="dropdown-item" href="recruitment.php#intern"><?php echo $intern; ?></a>
                                    <a class="dropdown-item" href="recruitment.php#jobs">JOBS VACANCIES</a>
                                </div>
                            </li>
                            <?php } ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?php echo $contact; ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="contactDropdown">
                                    <a class="dropdown-item" href="contact.php"><?php echo $contact; ?></a>
                                    <a class="dropdown-item" href="contact.php#qa"><?php echo $QA; ?></a>
                                </div>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>
                                        Login
                                    </span>
                                </a>
                            </li>

                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/ShippoAsahiTH/" target="_blank">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    FACEBOOK
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <!-- Language selection links -->
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($_SESSION['lang'] === 'TH') ? 'd-none' : ''; ?>" id="th"
                                    style="cursor:pointer;" onclick="changeLanguage('TH');">
                                    <img src="images/thailand.png" alt="" style="width: 25px;">&nbsp; ไทย
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link <?php echo ($_SESSION['lang'] === 'JP') ? 'd-none' : ''; ?>" id="jp"
                                    style="cursor:pointer;" onclick="changeLanguage('JP');">
                                    <img src="images/japan.png" alt="" style="width: 25px;">&nbsp; 日本語
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo ($_SESSION['lang'] === 'EN' || !isset($_SESSION['lang'])) ? 'd-none' : ''; ?>"
                                    id="en" style="cursor:pointer;" onclick="changeLanguage('EN');">
                                    <img src="images/uk.png" alt="" style="width: 25px;">&nbsp; EN
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

        </div>
    </div>
    <div class="header_bottom fixed-top">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand navbar_brand_mobile" href="index.php"> <img class="w-75" src="images/logo.png">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php"><?php echo $home ?><span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php"><?php echo $aboutComp ?></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><?php echo $service ?></a>
                            <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                                <a class="dropdown-item" href="product.php"><?php echo $ourWork ?></a>
                                <a class="dropdown-item" href="acana_info.php">Acana Stock</a>
                            </div>
                        </li>
                        <?php if($_SESSION['lang'] == 'JP'){ ?>
                        <li class="nav-item">
                            <a class="nav-link" href="recruitment.php"><?php echo $recruitment; ?></a>
                        </li>
                        <?php } else { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="recruitmentDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><?php echo $recruitment; ?></a>
                            <div class="dropdown-menu" aria-labelledby="recruitmentDropdown">
                                <a class="dropdown-item" href="recruitment.php#intern"><?php echo $intern; ?></a>
                                <a class="dropdown-item" href="recruitment.php#jobs">JOBS VACANCIES</a>
                            </div>
                        </li>
                        <?php } ?>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $contact; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="contactDropdown">
                                <a class="dropdown-item" href="contact.php"><?php echo $contact; ?></a>
                                <a class="dropdown-item" href="contact.php#qa"><?php echo $QA; ?></a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span>
                                    Login
                                </span>
                            </a>
                        </li>
                        <form class="form-inline">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="https://www.facebook.com/ShippoAsahiTH/" target="_blank">
                                        <i class="fa-brands fa-facebook" style="color: #74C0FC;"></i>
                                        FACEBOOK
                                    </a>
                                </li>
                                <p class="text-white">Language: </p>
                                <!-- Language selection links -->
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($_SESSION['lang'] === 'TH') ? 'd-none' : ''; ?>"
                                        id="th" style="cursor:pointer;" onclick="changeLanguage('TH');">
                                        <img src="images/thailand.png" alt="" style="width: 25px;">&nbsp; ไทย
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($_SESSION['lang'] === 'JP') ? 'd-none' : ''; ?>"
                                        id="jp" style="cursor:pointer;" onclick="changeLanguage('JP');">
                                        <img src="images/japan.png" alt="" style="width: 25px;">&nbsp; 日本語
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo ($_SESSION['lang'] === 'EN' || !isset($_SESSION['lang'])) ? 'd-none' : ''; ?>"
                                        id="en" style="cursor:pointer;" onclick="changeLanguage('EN');">
                                        <img src="images/uk.png" alt="" style="width: 25px;">&nbsp; EN
                                    </a>
                                </li>
                            </ul>
                        </form>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Back to Top Button -->
<button id="toTopBtn" title="Go to top"><i class="fa-solid fa-circle-chevron-up"></i></button>
<script>
// Function to change language via AJAX
function changeLanguage(lang) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'nav.php'); // Assuming nav.php handles language setting
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        if (xhr.status === 200) {
            console.log('Language set successfully');
            window.location.reload(); // Refresh page to apply language changes
        } else {
            console.log('Failed to set language');
        }
    };
    xhr.send('lang=' + lang); // Send POST data with selected language
}

// Your existing code for scrolling to top button
let mybutton = document.getElementById("toTopBtn");

window.onscroll = function() {
    scrollFunction();
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

mybutton.addEventListener("click", topFunction);
</script>