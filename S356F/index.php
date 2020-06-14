<!DOCTYPE html>
<!--
        ustora by freshdesignweb.com
        Twitter: https://twitter.com/freshdesignweb
        URL: https://www.freshdesignweb.com/ustora/
-->
<?php
session_start();

error_reporting(0);

include_once 'header.php';

$_SESSION['username'];

$_SESSION['NickName'];

$_SESSION['search_condition'];
?>

<?php
/*
  <!--- start mainmenu-area --->
  <div class="mainmenu-area">
  <div class="container">
  <div class="row">
  <div class="navbar-header">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  <span class="sr-only">Toggle navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  </button>
  </div>
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
  <li class="active"><a href="./">Home</a></li>
  <li><a href="#">Shop</a></li>
  <li><a href="#">About Us</a></li>
  </ul>

  <div class="search-container">
  <form class="navbar-form navbar-left" action="?" method="POST">

  <input id="search" name="item" type="text" class="form-control" placeholder="Search" size="50">

  <button type="submit" name="search_it" class="btn btn-default">Submit</button>

  </form>
  <?php
  if (isset($_POST['search_it'])) {

  $_SESSION['search_condition'] = $_POST['item'];

  if ($_SESSION['search_condition'] != NULL) {
  echo "<script>window.location = 'search_result.php'</script>";
  //header("Location: search_result.html");
  }
  }
  ?>
  </div>

  <ul class="nav navbar-nav navbar-right">
  <?php
  if ($_SESSION['username'] == NULL) {
  echo "<li><a href='login_page.php'>Login</a></li>";
  } else {
  echo "<li class='dropdown'>
  <a href='personal_info.php' class='dropdown-toggle' data-toggle='dropdown'>" .'Hi, '. $_SESSION['NickName'] . "<span class='caret'></span></a>
  <ul class='dropdown-menu' role='menu'>
  <li><a href='personal_info.php'>Info</a></li>
  <li><a href='#'>My Shop</a></li>
  <li class='divider'></li>
  <li><a href='#'>Buy Record</a></li>
  <li><a href='#'>Sell Record</a></li>
  <li class='divider'></li>
  <li><a href='logout.php'>Logout</a></li>
  </ul>
  </li>";
  }
  ?>
  </ul>

  </div>
  </div>
  </div>
  </div> <!-- End mainmenu area -->
 */
?>

<div class="slider-area">
    <!-- Slider -->
    <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
            <li><img src="img/slide1.png" alt="Slide"></li>
            <li><img src="img/slide2.png" alt="Slide"></li>
            <li><img src="img/slide3.png" alt="Slide"></li>
            <li><img src="img/slide4.png" alt="Slide"></li>
        </ul>
    </div>
    <!-- ./Slider -->
</div> <!-- End slider area -->

<div class="brands-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand-wrapper">
                    <div class="brand-list">
                        <img src="img/brand1.png" alt="">
                        <img src="img/brand3.png" alt="">
                        <img src="img/brand4.png" alt="">
                        <img src="img/brand5.png" alt="">
                        <img src="img/brand6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End brands area -->

<?php

$index_sql1 = 'SELECT * FROM product_info order by Upload_Date DESC';

//echo $_SESSION['search_condition'] . '<br>';
//echo $search_sql;
//include_once 'db_conn.php';

function Searching_item($index_sql) {
    include 'db_conn.php';

    $result = mysqli_query($conn, $index_sql);
    
    return $result;
    
}
?>

<?php
$index_result1 = Searching_item($index_sql1);
?>

<?php
$index_sql2 = 'SELECT * FROM product_info order by Price';

$index_result2 = Searching_item($index_sql2);

?>


<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">
                        <?php
                        $counting = 0;
                        while ($row = mysqli_fetch_array($index_result1)) {
                            if ($row[11] == '0000-00-00') {
                                if ($counting <= 9) {
                                    echo '
                                   <div class="single-product">
                                        <div class="product-f-image">
                                            <a href="buy_item.php?item_id=' . $row[0] . '"><img src="' . $row[12] . '" style="height:200px; object-fit: contain;" alt=""></a>
                                        </div>

                                        <h2><a href="buy_item.php?item_id=' . $row[0] . '">' . $row[1] . '</a></h2>   
                                        ' . $row[3] . '

                                        <div class="product-carousel-price">
                                            <ins>$' . $row[2] . '</ins>
                                        </div>
                                        <div class="depreciation-rate">
                                            Depreciation: ' . $row[6] . '%
                                        </div>
                                        <div class="upload-date">
                                            ' . $row[10] . '
                                        </div>
                                    </div>';
                                    $counting++;
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Cheapest Products</h2>
                    <div class="product-carousel">
                        <?php
                        $counting = 0;
                        while ($row = mysqli_fetch_array($index_result2)) {
                            if ($row[11] == '0000-00-00') {
                                if ($counting <= 9) {
                                    echo '
                                   <div class="single-product">
                                        <div class="product-f-image">
                                            <a href="buy_item.php?item_id=' . $row[0] . '"><img src="' . $row[12] . '" style="height:200px; object-fit: contain;" alt=""></a>
                                        </div>
                                        
                                        <h2><a href="buy_item.php?item_id=' . $row[0] . '">' . $row[1] . '</a></h2>
                                        ' . $row[3] . '

                                        <div class="product-carousel-price">
                                            <ins>$' . $row[2] . '</ins>
                                        </div>
                                        <div class="depreciation-rate">
                                            Depreciation: ' . $row[6] . '%
                                        </div>
                                        <div class="upload-date">
                                            ' . $row[10] . '
                                        </div>
                                    </div>';
                                    $counting++;
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->

<?php
include_once 'footer.php';
/*
  <div class="footer-bottom-area">
  <div class="container">
  <div class="row">
  <div class="col-md-8">
  <div class="copyright">
  <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
  </div>
  </div>

  <div class="col-md-4">
  <div class="footer-card-icon">
  <i class="fa fa-cc-discover"></i>
  <i class="fa fa-cc-mastercard"></i>
  <i class="fa fa-cc-paypal"></i>
  <i class="fa fa-cc-visa"></i>
  </div>
  </div>
  </div>
  </div>
  </div> <!-- End footer bottom area -->

  <!-- Latest jQuery form server -->
  <script src="https://code.jquery.com/jquery.min.js"></script>

  <!-- Bootstrap JS form CDN -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  <!-- jQuery sticky menu -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  <!-- jQuery easing -->
  <script src="js/jquery.easing.1.3.min.js"></script>

  <!-- Main Script -->
  <script src="js/main.js"></script>

  <!-- Slider -->
  <script type="text/javascript" src="js/bxslider.min.js"></script>
  <script type="text/javascript" src="js/script.slider.js"></script>
  </body>
  </html>
 */
?>
