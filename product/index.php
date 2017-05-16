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
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/shop.css">
    <link rel="stylesheet" href="../css/colors.css">
    <link rel="stylesheet" href="../css/information.css">
    <link rel="stylesheet" href="../css/event.css">
    <link rel="stylesheet" href="../css/modalwindow.css">
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
    <div id="container">
      <div style="height:200px;">
        <div class="row">
          <a href=".." >
            <div class="col-md-12">
              <div class="col-md-1"></div>
              <div class="col-md-1">
                <img src="../resource/logo.png" style="height:100;margin-top:20;margin-left:10%">
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
          <a href=".." >
            <div class="col-md-2" style="padding:14;">Home</div>
          </a>
          <a href="../product/" >
            <div class="col-md-2" style="padding:14;">Product</div>
          </a>
          <div class="col-md-2" style="padding:14">About Us</div>
          <div class="col-md-2" style="padding:14">Contact</div>
          <a href="../cart.php" >
            <div class="col-md-2" style="padding:14;">Cart
              <?php if(isset($_SESSION['card'])){echo '('.$total_cart.")";} ?>
            </div>
          </a>
        </div>
      </div>

      <a href="../yg/">
        <div class="col-md-12" style="padding-top:20px;padding-bottom:20">
          <div class="col-md-0"></div>
          <div class="col-md-2">
            <div class="col-md-12" style="background-color: pink;height:510;width:265">
              <div align="right" style="background-color: orange" >
                <p style="font-size: 20px;margin-top:10px;color: white">Yu-Gi-Oh</p>
              </div>
              <img src="https://static.wixstatic.com/media/f4b706_69c88921405e41fbb3ec129679671f75~mv2.jpg/v1/fill/w_235,h_435,al_c,q_80,usm_0.66_1.00_0.01/f4b706_69c88921405e41fbb3ec129679671f75~mv2.webp" style="padding-top:10">
            </div>
          </div>
        </a>

        <a href="../vg/">
          <div class="col-md-2 col-md-offset-1">
            <div class="col-md-12" style="background-color: pink;height:510;width:265">
              <img src="https://static.wixstatic.com/media/f4b706_1efa8fadb03c43858bf2a564fb13b09b~mv2.jpg/v1/crop/x_3,y_6,w_217,h_402/fill/w_235,h_435,al_c,lg_1,q_80/f4b706_1efa8fadb03c43858bf2a564fb13b09b~mv2.webp" style="padding-top:10">
              <div align="right" style="background-color: orange" >
                <p style="font-size: 20px;margin-top:10px;color: white">Card Fight Vanguard</p>
              </div>
            </div>
          </div>
        </a>

        <a href="../ws/">
          <div class="col-md-2 col-md-offset-1">
            <div class="col-md-12" style="background-color: pink;height:510;width:265">
              <div align="right" style="background-color: orange" >
                <p style="font-size: 20px;margin-top:10px;color: white">Weib Schwarz</p>
              </div>
              <img src="https://static.wixstatic.com/media/f4b706_5f34346252954902bb9ad316727b7a4f~mv2.jpg/v1/fill/w_235,h_435,al_c,q_80,usm_0.66_1.00_0.01/f4b706_5f34346252954902bb9ad316727b7a4f~mv2.webp" style="padding-top:10">
            </div>
          </div>
        </a>

        <a href="../sp/">
          <div class="col-md-2 col-md-offset-1">
            <div class="col-md-12" style="background-color: pink;height:510;width:265">
              <img src="https://static.wixstatic.com/media/f4b706_17218cdf531342f6bada76e587e4af9b~mv2.jpg/v1/fill/w_235,h_435,al_c,q_80,usm_0.66_1.00_0.01/f4b706_17218cdf531342f6bada76e587e4af9b~mv2.webp" style="padding-top:10">
              <div align="right" style="background-color: orange" >
                <p style="font-size: 20px;margin-top:10px;color: white">Accessories</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </body>
</html>
