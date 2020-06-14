<?php
    session_start();
    error_reporting(0);
    include_once 'header.php';
?>
<link href="http://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet" type="text/css">

<style>
    h3 {
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
    }
    p.light {
        font-family: 'Roboto', sans-serif;
        font-weight: 300;
    }
    </style>

<!-- Page Content -->
<div class="container" style="margin-bottom: 40px;">

    <!-- Introduction Row -->
    <div class="col-md-12">
        <h2 class="page-header">About Us</h2>
        <p>Our mission is to make phone trading at fingertips, easily accessible and informative for both buyers and sellers by implementing the latest technology.</p> </p>Contact us at <a href="mailto: support@it9.com">support@it9.com</a> for support. Stay tuned by following us on <a href="https://facebook.com/it9">Facebook</a> or <a href="https://twitter.com/it9">Twitter</a>.</p>
    </div>

    <!-- Team Members Row -->
    <div class="col-md-12">
        <h2 class="page-header">Our Team
            <small>Meet people behind IT9</small>
        </h2>
    </div>
    <div class="col-md-4 col-sm-6 text-center">
        <img class="img-circle img-center" src="./img/about/Big_Kenny.jpg" alt="" style="width: 180px; margin: 20px 0px;">
        <h3>Kenny, Lie Tze Wah<br>
            <small>Project Manager</small>
        </h3>
        <p class="light"></p>
    </div>
    <div class="col-md-4 col-sm-6 text-center">
        <img class="img-circle img-center" src="./img/about/Small_Kenny.jpg" alt="" style="width: 180px; margin: 20px 0px;">
        <h3>Kenny, Leung Kwan Ho<br>
            <small>PHP Developer</small>
        </h3>
        <p class="light">Writing PHP and manage the database</p>
    </div>
    <div class="col-md-4 col-sm-6 text-center">
        <img class="img-circle img-center" src="./img/about/Max.jpg" alt="" style="width: 180px; margin: 20px 0px;">
        <h3>Max, Loh Ka Hong<br>
            <small>UX Researcher, Frontend Developer</small>
        </h3>
        <p class="light">Finding and implementing templete,<br>editing CSS & HTML</p>
    </div>
    <div class="col-md-4 col-sm-6 text-center">
        <img class="img-circle img-center" src="./img/about/Anson.jpg" alt="" style="width: 180px; margin: 20px 0px;">
        <h3>Anson, Li Kwok Ho<br>
            <small>Product Tester</small>
        </h3>
        <p class="light">Testing product, preparing demo video</p>
    </div>
    <div class="col-md-4 col-sm-6 text-center">
        <img class="img-circle img-center" src="./img/about/Miwa.jpg" alt="" style="width: 180px; margin: 20px 0px;">
        <h3>Miwa, Lai Ming Wai<br>
            <small>Office Manager</small>
        </h3>
        <p class="light">Preparing user guide, documentation.</p>
    </div>

</div>

<?php
    include_once 'footer.php';
?>