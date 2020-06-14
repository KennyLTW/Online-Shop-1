<?php
session_start();
error_reporting(0);
include_once 'header.php';

$id = $_GET['item_id'];
//$qqq = $_SESSION['item_id'];
//echo $id;

    $query_item = "SELECT * FROM product_info WHERE Item_ID = '$id'";

//echo $query_item;

    function Searching_item($query_item) {
        include_once 'db_conn.php';

        $result = mysqli_query($conn, $query_item);
        return $result;
    }
    ?>

<?php
$result_item = Searching_item($query_item);
$row_item = mysqli_fetch_array($result_item);
$selleremail = $row_item[8];
?>
    
<div class="single-product-area">
    <div class="container">
        <div class="col-md-12">
            <div class="product-content-right">                  
                <div class="row" style="display: flex; align-items: center;">
                    <div class="col-sm-5" style="text-align:center;">
                        <?php echo '<img src="'.$row_item[12].'" class="img-responsive" style="height: 50vh; width: 80%; display:inline-flex; object-fit: contain;">';?>
                    </div>
                    
                    <div class="col-sm-7" style="Display: flex; justify-content: center;">
                        <div style="width: 80%;">
                            <h2 class="product-name" style="margin-bottom: 10px"><?php echo $row_item[3]; ?></h2>
                            <h2 class="product-name"><?php echo $row_item[1]; ?></h2>
                            <div class="product-inner-price" style="display: flex; align-items: center;">
                                <ins style="font-size: 20px; margin-right: 20px">$<?php echo $row_item[2]; ?></ins>
                                <?php
                                    if($_SESSION['username'] == $selleremail){
                                        echo '<button type="submit" class="btn btn-default" onclick="location.href=\'edit_item_info.php\\?item_id='.$id.'\';return false;">Edit Item</button>';
                                    }
                                    elseif($_SESSION['username'] == ""){
                                        echo '<button type="submit" class="btn btn-default" onclick="location.href=\'login_page.php\';return false;">Login To Buy</button>';
                                    }
                                    else{
                                        echo '<button type="submit" class="btn btn-default" onclick="location.href=\'transaction.php?item_id='.$id.'\';return false;">Buy</button>';
                                }
                                ?>
                            </div>    
                                                                                    
                            <table style="width:100%">
                                <tr>
                                    <th style="padding: 10px 0px; width: 30%;">Seller</th>
                                    <td style="padding: 10px 0px; width: 70%;"><?php echo '<a href=\'others_info.php?email='.$row_item[8].'\';return false;>'.$row_item[8].'</a>';?></td>
                                </tr>
                                <tr>
                                    <th style="padding: 10px 0px;">Upload date</th>
                                    <td style="padding: 10px 0px;"><?php echo $row_item[10];?></td>
                                </tr>
                                <tr>
                                    <th style="padding: 10px 0px;">New or old</th>
                                    <td style="padding: 10px 0px;">
                                    <?php 
                                    if($row_item[5] == 'T') echo 'Brand New</td>';
                                    else {
                                        echo'Old</td></tr><tr><th style="padding: 10px 0px;">Depreciation Rate</th><td style="padding: 10px 0px;">' . $row_item[6] . '%</td>';
                                    }
                                    ?>
                                </tr>
                                <tr>
                                    <th style="padding: 10px 0px;">Description</th>
                                    <td style="padding: 10px 0px;"><?php echo $row_item[7];?></td>
                                </tr>
                            </table>                            
                        </div>
                    </div>
                </div>
        </div>                    
    </div>
</div>

<?php
    include_once 'footer.php';
?>
