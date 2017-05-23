<?php
session_start();
?>
<?php

$array_use = array();
if(!isset($_SESSION['card'])){
  $_SESSION['card'] = array();
}

$total_price = 0;
for($i=0; $i<sizeof($_SESSION['card']) ; $i++){

  $total_price = $total_price + (int)$_SESSION['card'][$i]['price']*(int)$_SESSION['card'][$i]['quan'];

}
?>
<?php
$total_cart = 0;
if(isset($_SESSION['card'])){
  for($i=0; $i<sizeof($_SESSION['card']) ; $i++){

    $total_cart++;

  }
}
?>

<html>
  <header>


    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/shop.css">
    <link rel="stylesheet" href="./css/colors.css">
    <link rel="stylesheet" href="./css/information.css">
    <link rel="stylesheet" href="./css/event.css">
    <link rel="stylesheet" href="./css/modalwindow.css">
    <script src="http://yuyu-tei.jp/js/jquery.min.js"></script>
    <script src="http://yuyu-tei.jp/js/jquery.easing.js"></script>
    <script src="http://yuyu-tei.jp/js/ajaxzip3.js"></script>
    <script src="http://yuyu-tei.jp/js/util.js"></script>
    <script src="http://yuyu-tei.jp/js/common.js"></script>
    <script type="text/javascript" charset="utf-8" async="" src="https://platform.twitter.com/js/timeline.f5dd213113d43f976c8a616c7319825a.js"></script>
    <title>
      HORI - TCG Card Game Shop
    </title>
  </header>
  <body style="background-color: #f5f5f5;">

    <div style="height:200px;">
      <div class="row">
        <a href="." >
          <div class="col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-1">
              <img src="./resource/logo.png" style="height:100;margin-top:20;margin-left:10%">
            </div>
            <div class="col-md-2" style="padding-top:30px;">
              <div style="height:25">
                <p style="padding-top:10px;font-size: 20px;color:black" align="center">HORI</p>
              </div>
              <div>
                <hr style="border-color: white">
              </div>
              <div>
                <p align="center" style="font-size: 15px;color:black">Trading Card Game Shop</p>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div style="height:50px;background-color: white;margin-top:40px">
        <div class="col-md-2"></div>
        <a href="." >
          <div class="col-md-2" style="padding:14;">Home</div>
        </a>
        <a href="./product/" >
          <div class="col-md-2" style="padding:14;">Product</div>
        </a>
        <div class="col-md-2" style="padding:14">About Us</div>
        <div class="col-md-2" style="padding:14">Contact</div>
        <a href="./cart.php" >
          <div class="col-md-2" style="padding:14;">Cart
            <?php if(isset($_SESSION['card'])){echo '('.$total_cart.")";} ?>
          </div>
        </a>
      </div>
    </div>
    <img src="resource/header.png" style="width:100%;margin-top:20">
    <div id="content">
      <div id="main" class="no_side main_cart main_sell_cart">

        <div class="cart_info_box">
          <div class="subtotal_box">
            <ul>
              <li>Number Of Item <b> <?php echo sizeof($_SESSION['card']); ?></b></li>
              <li>Total Price <b><?php echo $total_price; ?> Yen</b></li>
            </ul>
            <ul>
              <li>Booked Item <b>0 Point</b></li>
              <li>Total Price Booked Item <b>0 Yen</b></li>
            </ul>
          </div>
          <div class="total_box">
            <ul>
              <li>Total Item <b><?php echo sizeof($_SESSION['card']); ?></b></li>
              <li>Total Price <b><?php echo $total_price; ?> Yen</b></li>
            </ul>
          </div>
          <form class="order_submit" action="submit.php" method="post">
            <p><input type="image" src="http://yuyu-tei.jp/img/shop/cart/sell/btn_submit_cart.png"></p>
          </form>
        </div>



        <div class="cart_detail_box section_block">
          <div class="section_heading">
            <h2>Item in the cart</h2>
          </div>
          <div class="section_body">
            <div class="group_box">
              <h3>Card List</h3>
              <table>
                <thead>
                  <tr>
                    <th class="image">Image</th>
                    <th class="name">Name</th>
                    <th class="price">Price</th>
                    <th class="quantity">Quantity</th>
                    <th class="subtotal">Total Price</th>
                    <th class="submit">Cancel</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  for($i=0; $i<sizeof($_SESSION['card']) ; $i++){
                  ?>
                  <tr class="item_record">
                    <td class="image">
                		    <img src="<?php echo "./".$_SESSION['card'][$i]['type']."/pic/".$_SESSION['card'][$i]['pic']; ?>" alt="">
			              </td>
                    <td class="name">
					              <b><?php echo $_SESSION['card'][$i]['name']; ?></b>
                    </td>
                    <td class="price">
	            	         <?php echo $_SESSION['card'][$i]['price']; ?>
                    </td>
                    <td class="quantity">
                        <?php echo $_SESSION['card'][$i]['quan']; ?>
                    </td>
                    <td class="subtotal"><?php echo (int)$_SESSION['card'][$i]['quan']*(int)$_SESSION['card'][$i]['price']; ?></td>
                    <td class="submit">
                      <form action="outCard.php" method="post">
                        <input type="hidden" name="key" value=<?php echo $i; ?>>
                        <input type="image" src="http://yuyu-tei.jp/img/shop/cart/btn_item_delete.png">
                      </form>
                    </td>
                  </tr><!-- /.item_record -->
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div><!-- /.group_box -->
          </div>
        </div>

      </div>
    </div>

  </body>
</html>
