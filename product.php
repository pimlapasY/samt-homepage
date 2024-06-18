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

    <title>Product | SHIPPO ASAHI MOULDS</title>

    <!-- bootstrap core css -->
    <?php include 'header.php'; ?>
</head>
<style>
#owl-demo .item {
    position: relative;
    max-width: 100%;
    max-height: 300px;
    /* Adjust as needed */
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

#owl-demo .item img {
    width: 100%;
    height: auto;
    /* Maintain aspect ratio */
    object-fit: cover;
}
</style>

<body class="sub_page">

    <?php include 'nav.php';?>

    <!-- portfolio section -->

    <section class="about_section" id="product">
        <div class="container" style="margin-top: 150px;">
            <h1 class="text-center"> <?php echo $p_h1 ?></h1>
            <p class="text-center"> <?php echo $p_s1 ?></p>
            <div class="row">
                <div class="col-md-6"><img src="images/content_2.png" class="img-fluid" alt=""></div>
                <div class="col-md-6">
                    <h2 class="text-start color-shippo"> <?php echo $p_h2 ?></h2>
                    <h3 class="text-start"> <?php echo $p_s2 ?></h3>
                    <p class="text-start"> <?php echo $p_des2 ?></p>
                </div>
            </div>
            <br>
            <h1 class="text-center"> <?php echo $p_h3 ?></h1>
            <p class="text-center"> <?php echo $p_s3 ?></p>
            <div class="d-flex justify-content-center">
                <img src="images/model_list13.jpg" class="img-fluid" alt="">
            </div>
            <div>
                <h2 class="text-start color-shippo"> <?php echo $p_h4 ?></h2>
                <p class="text-start"> <?php echo $p_des4 ?></p><br>
                <h2 class="text-start color-shippo"> <?php echo $p_h5 ?></h2>
                <p class="text-start"> <?php echo $p_des5 ?></p>
            </div>
        </div>
        <div class="container-fluid">
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="images/model_list1.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/model_list12.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/model_list3_knc07.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/model_list14.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/model_list15.jpg" alt="Owl Image"></div>
            </div>
        </div>
    </section>

    <!-- end portfolio section -->

    <?php include 'acana_info.php'; include 'footer.php';?>
</body>

</html>
<script>
$(document).ready(function() {

    $("#owl-demo").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds

        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3]

    });

});
</script>