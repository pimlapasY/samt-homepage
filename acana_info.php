<?php session_start() ?>
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
    <title>Acana | SHIPPO ASAHI MOULDS</title>
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
#owl-demo2 .item {
    position: relative;
    max-width: 100%;
    max-height: 300px;
    /* Adjust as needed */
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

#owl-demo2 .item img {
    width: 100%;
    height: auto;
    /* Maintain aspect ratio */
    object-fit: cover;
}
</style>
<script>
$(document).ready(function() {

    $("#owl-demo2").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 1,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

});
</script>

<body>
    <?php include 'nav.php'?>
    <section class="about_section layout_padding" id="acana_info">
        <div class="container">
            <div class="d-flex justify-content-center">
                <a href='https://arcana-onlineshop.com/' target="_blank">
                    <h1 style="text-align: start;"><i class="fa-solid fa-cart-shopping"></i> ACANA SHOP</h1>
                </a>
            </div>
            <div class="d-flex justify-content-end mx-auto mb-3">
                <a href="https://www.facebook.com/ArcanaOnlineShop.TH" target="_blank">
                    <img src="images/facebook.png" alt="" style="width: 5vh;">
                    <!--  <h1><i class="fab fa-facebook-square" style="color: #1d2f4e;"></i></h1> -->
                </a>&nbsp;
                <a href="https://www.instagram.com/arcana_onlineshop/" target="_blank">
                    <img src="images/instagram.png" alt="" style="width:  5vh;">
                    <!-- <h1><i class="fab fa-instagram-square" style="color: #ff5286;"></i></h1> -->
                </a>&nbsp;
                <a href="https://line.me/R/ti/p/@507oiceg?oat_content=url" target="_blank">
                    <img src="images/line.png" alt="" style="width:  5vh;">
                    <!--  <h1><i class="fab fa-line" style="color: #4c7b50;"></i></h1> -->
                </a>
            </div>

            <div id="owl-demo2" class="owl-carousel owl-theme">
                <a href="https://arcana-onlineshop.com/th/collections/industry-tools" target="_blank">
                    <div class="item"><img class="img-fluid" src="images/acana_cover.png" alt="Owl Image"></div>
                </a>
                <a href="https://arcana-onlineshop.com/th/collections/golf-grove" target="_blank">
                    <div class="item"><img class="img-fluid" src="images/cover charactor.png" alt="Owl Image"></div>
                </a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="images/acanais.png" alt="">
                </div>
                <div class="col-md-6">
                    <h2 class="color-shippo"><?php echo $acana_h1 ?></h2>
                    <p><?php echo $acana_des1 ?></p>
                    <h2 class="color-shippo"><?php echo $acana_h2 ?></h2>
                    <p><?php echo $acana_des2 ?></p>
                    <h2 class="color-shippo"><?php echo $acana_h3?></h2>
                    <p><?php echo $acana_des3 ?></p>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <h2 class="color-shippo"><?php echo $acana_h4 ?></h2>
                    <p><?php echo $acana_des4 ?></p>
                    <h2 class="color-shippo"><?php echo $acana_h6?></h2>
                    <p><?php echo $acana_des6 ?></p>
                </div>
                <div class="col-md-6">
                    <h2 class="color-shippo"><?php echo $acana_h5 ?></h2>
                    <p><?php echo $acana_des5 ?></p>
                </div>
            </div><br>
            <!-- <div class="row">
                <div class="col-md-6">
                    <h1 class="d-flex justify-content-lg-center"> <i
                            class="fa-solid fa-angles-right fa-beat-fade fa-2xl"></i></h1>
                </div>
                <div class="col-md-6">
                    <iframe src="flies/acana.pdf" width="100%" height="600px" loading="lazy" title="PDF-file"></iframe>
                </div>
            </div> -->
        </div>
    </section>
</body>

</html>