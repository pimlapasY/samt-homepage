<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruitment | SAMT</title>
    <?php
        include 'header.php';
?>
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
    <?php
        include 'nav.php';
        include 'header.php';
?>

    <section class="contact_section" id="jobs">
        <div class="container" style="margin-top: 150px; margin-bottom: 50px;">
            <h2>
                <a href="#jobs">
                    SAMT ตำแหน่งงาน
                </a>
            </h2>
            <div class="card text-start">
                <div class="card-header">
                    Jobs Vacancies
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <td>
                            Job not found
                        </td>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    Last update on 11 June 2023
                </div>
            </div>
        </div>
    </section>
    <?php if($_SESSION['lang']  !== 'JP'){ ?>
    <section class="contact_section" id="intern">

        <div class="container">
            <h2>
                <a href="#intern">
                    Interns, Co-operative Education
                </a>
            </h2>
            <div class="card text-start">
                <div class="card-header text-dark">
                    <?php echo $intern ?>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <td>
                            Job not found
                        </td>
                    </table>
                </div>
                <div class="card-footer text-muted">
                    Last update on 11 June 2023
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
    <br>
    <section class="contact_section" id="benefit">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    <?php echo $samt_benefit ?>
                </h2>
                <h4>
                    <?php echo $samt_benefit_des ?>
                </h4>
            </div>
            <div id="owl-demo" class="owl-carousel owl-theme">
                <div class="item"><img src="images/Allowance1.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/Allowance2.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/Allowance3.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/Allowance4.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/Allowance5.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/Allowance6.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/Allowance7.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/Allowance8.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/Allowance9.jpg" alt="Owl Image"></div>
                <div class="item"><img src="images/Allowance10.jpg" alt="Owl Image"></div>
            </div>

            <?php if($_SESSION['lang'] == 'TH'){ ?>
            <!-- ---------------------------------------- -->
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group list-group-item-primary">
                        <li class="list-group-item"><i class="fa-solid fa-sack-dollar"></i> โบนัส</li>
                        <li class="list-group-item"><i class="fa-solid fa-money-bill-1-wave"></i> ค่าครองชีพ</li>
                        <li class="list-group-item"><i class="fa-solid fa-van-shuttle"></i> รถตู้โดยสาร </li>
                        <li class="list-group-item"><i class="fa-solid fa-stethoscope"></i> ตรวจสุขภาพประจำปี</li>
                        <li class="list-group-item"><i class="fa-solid fa-cake-candles"></i> เค้กวันเกิด</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group list-group-item-primary">
                        <li class="list-group-item"><i class="fa-solid fa-money-bills"></i> เบี้ยขยัน</li>
                        <li class="list-group-item"><i class="fa-solid fa-money-bill-trend-up"></i> ค่าตำแหน่ง</li>
                        <li class="list-group-item"><i class="fa-solid fa-hand-holding-medical"></i> ประกันชีวิตกลุ่ม
                        </li>
                        <li class="list-group-item"><i class="fa-solid fa-piggy-bank"></i> กองทุนสำรองเลี้ยงชีพ</li>
                        <li class="list-group-item"><i class="fa-solid fa-umbrella-beach"></i> วันลาพักร้อนประจำปี</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group list-group-item-primary">
                        <li class="list-group-item"><i class="fa-solid fa-utensils"></i> ค่าอาหาร</li>
                        <li class="list-group-item"><i class="fa-solid fa-shirt"></i> เครื่องแบบ</li>
                        <li class="list-group-item"><i class="fa-solid fa-hand-holding-dollar"></i> ประกันสังคม</li>
                        <li class="list-group-item"><i class="fa-solid fa-plane"></i> ท่องเที่ยวประจำปี</li>
                        <li class="list-group-item"><i class="fa-solid fa-person-breastfeeding"></i> วันลาคลอดบุตร</li>
                    </ul>
                </div>
            </div>
            <?php }elseif($_SESSION['lang'] == 'JP'){ ?>
            <!-- ------------------------------------------ -->
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group list-group-item-primary">
                        <li class="list-group-item"><i class="fa-solid fa-sack-dollar"></i> Bonus</li>
                        <li class="list-group-item"><i class="fa-solid fa-money-bill-1-wave"></i> Living Allowance</li>
                        <li class="list-group-item"><i class="fa-solid fa-van-shuttle"></i> Passenger Van</li>
                        <li class="list-group-item"><i class="fa-solid fa-stethoscope"></i> Annual Health Check</li>
                        <li class="list-group-item"><i class="fa-solid fa-cake-candles"></i> Birthday Cake</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group list-group-item-primary">
                        <li class="list-group-item"><i class="fa-solid fa-money-bills"></i> Diligent Allowance</li>
                        <li class="list-group-item"><i class="fa-solid fa-money-bill-trend-up"></i> Position Allowance
                        </li>
                        <li class="list-group-item"><i class="fa-solid fa-hand-holding-medical"></i> Life Insurance
                        </li>
                        <li class="list-group-item"><i class="fa-solid fa-piggy-bank"></i> Provident Fund</li>
                        <li class="list-group-item"><i class="fa-solid fa-umbrella-beach"></i> Annual Leave</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group list-group-item-primary">
                        <li class="list-group-item"><i class="fa-solid fa-utensils"></i> Food Allowance</li>
                        <li class="list-group-item"><i class="fa-solid fa-shirt"></i> Uniform</li>
                        <li class="list-group-item"><i class="fa-solid fa-hand-holding-dollar"></i> Social Security
                        </li>
                        <li class="list-group-item"><i class="fa-solid fa-plane"></i> Annual Travel </li>
                        <li class="list-group-item"><i class="fa-solid fa-person-breastfeeding"></i> Maternity Leave
                        </li>
                    </ul>
                </div>
            </div>
            <!-- --------------------------------------- -->
            <?php }else{ ?>
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-group list-group-item-primary">
                        <li class="list-group-item"><i class="fa-solid fa-sack-dollar"></i> Bonus</li>
                        <li class="list-group-item"><i class="fa-solid fa-money-bill-1-wave"></i> Living Allowance</li>
                        <li class="list-group-item"><i class="fa-solid fa-van-shuttle"></i> Passenger Van</li>
                        <li class="list-group-item"><i class="fa-solid fa-stethoscope"></i> Annual Health Check</li>
                        <li class="list-group-item"><i class="fa-solid fa-cake-candles"></i> Birthday Cake</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group list-group-item-primary">
                        <li class="list-group-item"><i class="fa-solid fa-money-bills"></i> Diligent Allowance</li>
                        <li class="list-group-item"><i class="fa-solid fa-money-bill-trend-up"></i> Position Allowance
                        </li>
                        <li class="list-group-item"><i class="fa-solid fa-hand-holding-medical"></i> Life Insurance
                        </li>
                        <li class="list-group-item"><i class="fa-solid fa-piggy-bank"></i> Provident Fund</li>
                        <li class="list-group-item"><i class="fa-solid fa-umbrella-beach"></i> Annual Leave</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-group list-group-item-primary">
                        <li class="list-group-item"><i class="fa-solid fa-utensils"></i> Food Allowance</li>
                        <li class="list-group-item"><i class="fa-solid fa-shirt"></i> Uniform</li>
                        <li class="list-group-item"><i class="fa-solid fa-hand-holding-dollar"></i> Social Security
                        </li>
                        <li class="list-group-item"><i class="fa-solid fa-plane"></i> Annual Travel </li>
                        <li class="list-group-item"><i class="fa-solid fa-person-breastfeeding"></i> Maternity Leave
                        </li>
                    </ul>
                </div>
            </div>
            <?php } ?>

        </div>
        <br>
        <br>


    </section>
    <?php include 'footer.php'; ?>
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