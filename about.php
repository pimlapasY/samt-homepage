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
    <title>About | SHIPPO ASAHI MOULDS</title>
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

<body>
    <?php include 'nav.php'?>

    <?php
    if($_SESSION['lang'] == 'TH'){
        include 'factory-info-th.php';
    }elseif($_SESSION['lang'] == 'JP'){
        include 'factory-info-jp.php';
    }else{
        include 'factory-info-en.php';
    }
    ?>
    <!-- end client section -->


    <?php include 'footer.php' ?>
    <!-- end info section -->


</body>

</html>