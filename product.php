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

    <title>Our Work</title>

    <!-- bootstrap core css -->
    <?php include 'header.php'; ?>
</head>
<style>
#owl-demo .item {
    margin: 3px;
}

#owl-demo .item img {
    display: block;
    width: 100%;
    height: auto;
}
</style>

<body class="sub_page">

    <?php include 'nav.php';?>

    <!-- portfolio section -->

    <section class="about_section">
        <div class="container" style="margin-top: 150px;">
            <div class="heading_container heading_center">
                <h2>
                    <?php echo $ourWork ?>
                </h2>
            </div>
            <div id="owl-demo" class="owl-carousel owl-theme">

                <div class="item"><img src="images/p1.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/p1.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/p1.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/p1.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/p1.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/p1.jpg" alt="Owl Image"></div>


            </div>
        </div>
    </section>

    <!-- end portfolio section -->

    <?php include 'footer.php'?>
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