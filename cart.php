<?php
session_start();
?>

<?php
$total_price = 0;
for($i=0; $i<sizeof($_SESSION['card']) ; $i++){

  $total_price = $total_price + (int)$_SESSION['card'][$i]['price'];

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
  <body>

    <div style="height:200px;background-color: pink;">
      <div class="row">
        <div class="col-md-12">
        </div>
      </div>

      <div align="center" style="height:50px;background-color: white;margin-top:140px">
        <div class="col-md-2"></div>
        <div class="col-md-2" style="padding:14">Home</div>
        <div class="col-md-2" style="padding:14">Product</div>
        <div class="col-md-2" style="padding:14">About Us</div>
        <div class="col-md-2" style="padding:14">Contact</div>
        <a href="./cart.php" >
          <div class="col-md-2" style="padding:14;">Cart</div>
        </a>
      </div>
    </div>
    <img src="resource/header.png" style="width:100%;">
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
          <form class="order_submit" action="/sell_cart/order.php" method="get">
            <p><input type="image" src="http://yuyu-tei.jp/img/shop/cart/sell/btn_submit_cart.png" alt="商品を確定し注文画面に進む"></p>
          </form>
        </div>



        <div class="cart_detail_box section_block">
          <div class="section_heading">
            <h2>Item in the cart</h2>
          </div>
          <div class="section_body">
            <div class="group_box">
              <h3>ChaosTCG｜カオス</h3>
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
                      <form action="/sell_cart/delete.php" method="post">
                        <input type="image" src="http://yuyu-tei.jp/img/shop/cart/btn_item_delete.png" alt="削除">
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
