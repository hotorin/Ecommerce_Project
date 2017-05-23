<html>
  <header>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/shop.css">
    <link rel="stylesheet" href="./css/colors.css">
    <link rel="stylesheet" href="./css/information.css">
    <link rel="stylesheet" href="./css/event.css">
    <link rel="stylesheet" href="./css/modalwindow.css">
    <link rel="stylesheet" href="css/bootstrap.css">
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
        <a href="about_us.php" >
          <div class="col-md-2" style="padding:14">About Us</div>
        </a>
        <div class="col-md-2" style="padding:14">Contact</div>
        <a href="./cart.php" >
          <div class="col-md-2" style="padding:14;">Cart
            <?php if(isset($_SESSION['card'])){echo '('.$total_cart.")";} ?>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-12">
      <div class="col-md-4">
        <img src="./resource/logo.png" style="height:55%;margin-top:20;margin-left:10%">
      </div>

      <div class="col-md-8" style="margin-top:20px;margin-bottom:20px;padding-bottom:30px;background-color:pink;border-radius: 5px;box-shadow: 2px 2px 2px #888888;color: #6a7db7;text-align:center;">
        <h1 style="margin-top:50px">Our Mission</h1>
        <p>Spreading the <b>Fun</b> of <b>Trading Card Games</b></p>
        <hr style="margin-top:40px">
        <h2 style="margin-top:40px">About</h2>
        <div style="max-width: 100%; position: relative"><p class="m-b-xs">HORI aims to become Thailand largest online retail for trading card games from every franchise. We believe that everyone, from young to old, should be able to enjoy the fun that is card duels.</p>
          <p>At HORI, we want to assist our clients on find their destined card, teaching them the basics, and guide them to have <b>fun</b> at playing trading card games. We want people from all around Thailand to enjoy this niche yet large hobby. </p>
        </div>
      </div>
    </div>


  </body>
</html>
