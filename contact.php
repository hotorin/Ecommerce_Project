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
    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
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
      <div id="map" style="width:400px;height:400px;background:yellow"></div>
    </div>


<script>
function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(51.5, -0.12),
        zoom: 10,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}
</script>


  </body>
</html>
