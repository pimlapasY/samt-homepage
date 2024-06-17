<?php
session_start(); 
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <?php include 'header.php'?>
    <title>หน้าหลัก | SHIPPO ASAHI MOULDS</title>
    <link rel="icon" href="images/samt_icon.png" type="image/png">

    <meta name="keywords"
        content="ชิปโป,ชิปโป อาซาฮี,ชิปโป อาซาฮี โมลด์ส,SAMT,Shippo Asahi Moulds,Shippo Asahi Moulds (Thailand),แม่พิมพ์,แม่พิมพ์อลูมีเนียม,molds,moulds,small hole,core Pin" />
    <meta name="description" content="ผลิตแม่พิมพ์ฉีดอลูมิเนียมและส่งมอบชิ้นส่วนแม่พิมพ์คุณภาพสูงไปทั่วโลก" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0MNYJHPVF7"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-0MNYJHPVF7");
    </script>

</head>
<style>
.transparent-background {
    background-color: rgba(0, 0, 0, 0.5);
    /* black with 50% opacity */
    color: white;
    padding: 20px;
}

.gradient-background {
    background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.1));
    color: white;
    padding: 20px;
    width: fit-content;

}

.gradient-background-shippo {
    background: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.4));
    /* color: #000000 !important; */
    width: fit-content;
    padding: 20px;
}

.color-shippo {
    color: #003471 !important;
}
</style>

<body>
    <?php include 'nav.php'?>
    <script>
    $(document).ready(function() {
        $('#customCarousel1').on('slide.bs.carousel', function(e) {
            var nextIndex = $(e.relatedTarget).index();
            if (nextIndex === 1) { // Check if sliding to the second slide (index 1)
                $('.hero_area').css('background',
                    'linear-gradient(to bottom, rgba(107, 154, 196, 0.5), rgba(107, 154, 196, 0.1)), url(images/hero-bg.jpg)'
                );
                $('.hero_area').css('background-size', 'cover');

            } else if (nextIndex === 2) { // Check if sliding to the second slide (index 1)
                $('.hero_area').css('background',
                    'linear-gradient(to bottom, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.1)), url(images/website-acana.png)'
                );

                $('.hero_area').css('background-size', 'cover');

            } else {
                // Reset background image to default or handle other slides as needed
                $('.hero_area').css('background-image', '');
            }
        });
    });
    </script>

    <div class="hero_area">
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section">
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="detail-box">
                                <h1 style="color: black;">
                                    <?php 
                                   echo $samt;
                                   ?>

                                </h1><br>
                                <h2 class="color-shippo"><b><?php echo $samt_des; ?></b>
                                </h2>
                                <div class="btn-box">
                                    <a href="about.php" class="btn1">
                                        Read More
                                    </a>
                                    <a href="#contactUs" class="btn2">
                                        Contact Us
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container ">
                            <div class="detail-box">
                                <h1 class="text-white">
                                    SHIPPO ASAHI MOULDS
                                </h1>
                                <h2 class="gradient-background-shippo color-shippo"><b>WE ARE THE TOP MANUFACTURING
                                        <br>
                                        OF DIE CASTING MOULDS</b>
                                </h2>
                                <div class="btn-box">
                                    <a href="portfolio.php" class="btn1">
                                        Read More
                                    </a>
                                    <a href="#contactUs" class="btn2">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="detail-box w-75 mx-auto" style=" width:fit-content; padding: 20px;">
                                <h2 class="text-dark"><b>
                                        What Is? <span class="color-shippo">Acana Stock</span></b>
                                </h2>
                                <p class="gradient-background-shippo color-shippo" style="font-size: 1.7vh;">
                                    <?php echo $acana_des; ?>
                                </p>
                                <h4><?php echo $can_contact; ?> <a href="https://arcana-onlineshop.com/"
                                        target="_blank">
                                        <?php echo $here; ?></a>
                                </h4>

                                <a href="acana_info.php" class="btn btn-info">
                                    <i class="fa-solid fa-arrow-right fa-beat"></i> Read More
                                </a>
                                <!--  <h2 class="color-shippo"><b>ACANA STOCK </b></h2> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn-box">
                    <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- end slider section -->
    </div>

    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container  ">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>Welcome to <span>SAMT</span></h2>
                        </div>
                        <p>
                            SAMT เป็นผู้ผลิตแม่พิมพ์ชั้นนำในอุตสาหกรรม
                        </p>
                        <p>
                            WE ARE THE TOP MANUFACTURING OF DIE CASTING MOULDS
                        </p>
                        <a href="about.php">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="images/m1.jpg" alt="" />
                    </div>
                    <div class="img-box">
                        <img src="images/m2.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- portfolio section -->

    <section class="portfolio_section">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our Work
                </h2>
                <h3>
                    SAMT ให้บริการแบบครบวงจร ตั้งแต่การออกแบบไปจนถึงการผลิต
                </h3>
            </div>
            <div class="carousel-wrap ">
                <div class="filter_box">
                    <nav class="owl-filter-bar">
                        <a href="#" class="item  active" data-target="#slideWork" data-slide-to="0">1</a>
                        <a href="#" class="item" data-target="#slideWork" data-slide-to="1">2</a>
                        <a href="#" class="item" data-target="#slideWork" data-slide-to="2">3</a>
                        <a href="#" class="item" data-target="#slideWork" data-slide-to="3">4</a>
                    </nav>
                </div>
            </div>
            <script>
            document.addEventListener('DOMContentLoaded', function() {
                const navItems = document.querySelectorAll('.owl-filter-bar .item');
                const carousel = document.getElementById('slideWork');

                // Function to update the active class
                function updateActiveNavItem(index) {
                    navItems.forEach(el => el.classList.remove('active'));
                    if (navItems[index]) {
                        navItems[index].classList.add('active');
                    }
                }

                // Add click event listener to nav items
                navItems.forEach((item, index) => {
                    item.addEventListener('click', function(event) {
                        event.preventDefault();
                        updateActiveNavItem(index);
                        // Change the slide in the carousel
                        $('#slideWork').carousel(index);
                    });
                });

                // Listen to slide change events in the carousel
                $('#slideWork').on('slide.bs.carousel', function(event) {
                    const index = $(event.relatedTarget).index();
                    updateActiveNavItem(index);
                });

                // Optional: Automatically change the active nav item every 2 seconds for testing
                let currentIndex = 0;
                setInterval(() => {
                    currentIndex = (currentIndex + 1) % navItems.length;
                    updateActiveNavItem(currentIndex);
                    $('#slideWork').carousel(currentIndex);
                }, 2000);
            });
            </script>
        </div>
        <div id="slideWork" class="carousel slide m-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#slideWork" data-slide-to="0" class="active"></li>
                <li data-target="#slideWork" data-slide-to="1"></li>
                <li data-target="#slideWork" data-slide-to="2"></li>
                <li data-target="#slideWork" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p1.jpg" alt="First slide">
                        </div>
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p2.jpg" alt="Second slide">
                        </div>
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p3.jpg" alt="Third slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p1.jpg" alt="First slide">
                        </div>
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p2.jpg" alt="Second slide">
                        </div>
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p3.jpg" alt="Third slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p1.jpg" alt="First slide">
                        </div>
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p2.jpg" alt="Second slide">
                        </div>
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p3.jpg" alt="Third slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p1.jpg" alt="First slide">
                        </div>
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p2.jpg" alt="Second slide">
                        </div>
                        <div class="col-md-4">
                            <img class="d-block w-100" src="images/p3.jpg" alt="Third slide">
                        </div>
                    </div>
                </div>
                <!-- Add more carousel items as needed -->
            </div>
            <a class="carousel-control-prev" href="#slideWork" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#slideWork" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container heading_container heading_start">
            <h5 class="mb-5">
                บริษัทของเราผลิตแม่พิมพ์หล่ออลูมิเนียมสำหรับชิ้นส่วนรถยนต์และรถจักรยานยนต์
                เป็นการผลิตแม่พิมพ์ฉีดอลูมิเนียมที่สามารถดำเนินการผลิตแบบครบวงจรตั้งแต่การออกแบบไปจนถึงการประกอบแม่พิมพ์
                และการทดสอบแม่พิมพ์ (QC) เรามีกำลังการผลิตที่หลากหลายตั้งแต่ระดับ 135 ตัน ถึง 2500 ตัน
                นอกจากนี้เรายังสามารถผลิตจุดที่ลึกพิเศษและช่องแคบพิเศษ ตามรูปแบบที่ต้องการ
                เพื่อหล่ออลูมิเนียมออกมาเป็นผลิตภัณฑ์ที่แตกต่าง
                โดยใช้เครื่องจักรพิเศษและขั้นตอนที่เราออกแบบอย่างละเอียด
                เพื่อตอบสนองต่อความต้องการที่หลากหลายของลูกค้า
                เราจึงเป็นที่ยอมรับในฐานะผู้ผลิตแม่พิมพ์ฉีดอลูมิเนียมชั้นนำ
            </h5>
        </div>
    </section>

    <!-- end portfolio section -->

    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Our <span>Strength</span></h2>
                <br>
                <img class="img-fluid" src="images/content3_1.jpg" alt="">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s4.png" alt="" />
                            </div>
                            <div class="detail-box">
                                <h5>
                                    กำลังการผลิตแม่พิมพ์ขนาดใหญ่
                                </h5>
                                <p>
                                    เรามีกำลังการผลิตที่หลากหลายตั้งแต่ระดับ 135 ตันถึง 2500 ตัน
                                    เรามีเครื่องจักรและอุปกรณ์ขนาดใหญ่ ที่สามารถประมวลผลแม่พิมพ์ขนาดใหญ่ได้ถึง 2500 ตัน
                                    ด้วยความเร็วสูงและความแม่นยำสูงและมีกระบวนการผลิตที่ดีที่สุด
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s2.png" alt="" />
                            </div>
                            <div class="detail-box">
                                <h5>
                                    เทคโนโลยีผลิตแม่พิมพ์ <br>ความแม่นยำสูง
                                </h5>
                                <p>
                                    ผู้ผลิตชิ้นส่วนรถยนต์รายใหญ่มีความต้องการคุณภาพการผลิตที่แม่นยำเป็นอย่างมาก
                                    และเพื่อให้เป็นไปตามข้อกำหนดด้านความแม่นยำ
                                    เราจึงผลิตด้วยทักษะและเทคโนโลยีการผลิตแม่พิมพ์ที่ดีที่สุด
                                    ที่ได้ทำมาอย่างต่อเนื่องและยาวนาน
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/s6.png" alt="" />
                            </div>
                            <div class="detail-box">
                                <h5>
                                    พัฒนาผลิตภัณฑ์ตามยุคตามสมัย
                                </h5>
                                <p>
                                    เรายินดีนำเสนอในส่วนของการผลิตแม่พิมพ์แบบใหม่ด้วยเทคโนโลยีการผลิตแม่พิมพ์ที่เชื่อถือได้
                                    ให้เป็นรูปทรงตามแบบที่ลูกค้าต้องการ เพื่อท้าทายความสามารถของเราต่อไป
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="btn-box">
                    <a href="">
                        Read More
                    </a>
                </div>
                <div class="container mt-5">
                    <div class="heading_container heading_center">
                        <h2>Our <span>Service</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="images/icon1.png" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        คุณภาพสูง
                                    </h5>
                                    <p>

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="images/icon2.png" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        ราคาประหยัด
                                    </h5>
                                    <p>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="box ">
                                <div class="img-box">
                                    <img src="images/icon3.png" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        ส่งมอบตรงเวลา
                                    </h5>
                                    <p>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="heading_container heading_center mt-4">
                        <h3>
                            สู่การเป็นผู้ผลิตแม่พิมพ์ฉีดอลูมิเนียม อันดับ 1 ในแถบเอเชียตะวันออกเฉียงใต้ <br> ด้วยคุณภาพ
                            ราคาประหยัด
                            และส่งมอบตรงเวลา
                        </h3>
                    </div>
                </div>

            </div>
    </section>

    <!-- end service section -->

    <!-- contact section -->
    <section class="contact_section" id="contactUs">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>Contact <span>Us</span></h2>
            </div>
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="form_container">
                        <form action="">
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" placeholder="Your Name" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-6">
                                    <input type="text" class="form-control" placeholder="Phone Number" />
                                </div>
                                <div class="form-group col-lg-6">
                                    <select name="" id="" class="form-control wide">
                                        <option value="">Select Service</option>
                                        <option value="">Service 1</option>
                                        <option value="">Service 2</option>
                                        <option value="">Service 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="email" class="form-control" placeholder="Email" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="message-box form-control" placeholder="Message" />
                                </div>
                            </div>
                            <div class="btn_box">
                                <button>
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 px-0">
                    <div class="map_container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3878.593487445366!2d100.7929681631413!3d13.560511013788284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d5b67d63b191d%3A0xff34231d8372979b!2sSHIPPO%20ASAHI%20MOULDS(THAILAND)!5e0!3m2!1sth!2sth!4v1604043443675!5m2!1sth!2sth"
                            width="100%" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end contact section -->




    <?php 
    include 'review.php';
    include 'footer.php'; ?>
    <!-- end info section -->



</body>

</html>