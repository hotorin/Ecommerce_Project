<?php
session_start();
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

    <div class="col-md-12">
      <div class="col-md-1"></div>
      <div class="col-md-10" style="margin-top:20px;margin-bottom:20px;padding-bottom:30px;background-color:pink;border-radius: 5px;box-shadow: 2px 2px 2px #888888;">
        <div class="col-md-12" style="padding-top:20px">

          <a href="vg/">
            <div class="col-md-4">
              <div style="box-shadow: 2px 2px 2px #888888;text-align:center;">
                <img src="resource/vg.png" height="133" width="300">
                <div style="height:50px;background-color: white;">
                  <p style="padding-top:12px">Card Fight Vanguard</p>
                </div>
              </div>
            </div>
          </a>

          <a href="ws/">
            <div class="col-md-4">
              <div style="box-shadow: 2px 2px 2px #888888;text-align:center;">
                <img src="resource/ws.png" height="133" width="300">
                <div style="height:50px;background-color: white;">
                  <p style="padding-top:12px">Weiss Schwarz</p>
                </div>
              </div>
            </div>
          </a>

          <a href="ch/">
            <div class="col-md-4">
              <div style="box-shadow: 2px 2px 2px #888888;text-align:center;">
                <img src="resource/ch.png" height="133" width="300">
                <div style="height:50px;background-color: white;">
                  <p style="padding-top:12px">ChaosTCG</p>
                </div>
              </div>
            </div>
          </a>

          <a href="yg/">
            <div class="col-md-4" style="padding-top:20px">
              <div style="box-shadow: 2px 2px 2px #888888;text-align:center;">
                <img src="resource/yg.png" height="133" width="300">
                <div style="height:50px;background-color: white;">
                  <p style="padding-top:12px">Yu-gi-Oh</p>
                </div>
              </div>
            </div>
          </a>

          <a href="mg/">
            <div class="col-md-4" style="padding-top:20px">
              <div style="box-shadow: 2px 2px 2px #888888;text-align:center;">
                <img src="resource/mg.png" height="133" width="300">
                <div style="height:50px;background-color: white;">
                  <p style="padding-top:12px">Magic The Gathering</p>
                </div>
              </div>
            </div>
          </a>

          <a href="sp/">
            <div class="col-md-4" style="padding-top:20px">
              <div style="box-shadow: 2px 2px 2px #888888;text-align:center;">
                <img src="resource/sp.jpg" height="133" width="300">
                <div style="height:50px;background-color: white;">
                  <p style="padding-top:12px">Magic The Gathering</p>
                </div>
              </div>
            </div>
          </a>

        </div>
      </div>
      <div class="col-md-1"></div>
    </div>

  </body>
</html>
