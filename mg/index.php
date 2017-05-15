<?php
session_start();
?>
<?php
  $card_m = array("002-264.jpg", "009-264.jpg", "056-264.jpg", "067-264.jpg", "073-264.jpg", "096-264.jpg", "110-264.jpg", "112-264.jpg");
  $card_m_name = array("発明の天使(Foil)",
                        "激変の機械巨人(Foil)",
                        "機械医学的召喚(Foil)",
                        "奔流の機械巨人(Foil)",
                        "陰謀の悪魔(Foil)",
                        "害悪の機械巨人(Foil)",
                        "反逆の先導者、チャンドラ(Foil)",
                        "焼却の機械巨人(Foil)");
  $card_m_price = array("400 Yen", "500 Yen", "500 Yen", "3480 Yen", "300 Yen", "680 Yen", "7980 Yen", "400 Yen");
  $card_m_stock = array(0, 4, 0, 0, 0, 0, 0, 1);


  $card_r = array("003-264.jpg", "005-264.jpg", "008-264.jpg", "015-264.jpg", "021-264.jpg", "032-264.jpg", "039-264.jpg", "041-264.jpg");
  $card_r_name = array("霊気嵐のロック(Foil)",
                        "領事の権限(Foil)",
                        "領事府による拘禁(Foil)",
                        "燻蒸(Foil)",
                        "小物作りの達人(Foil)",
                        "模範的な造り手(Foil)",
                        "霊気烈風の古きもの(Foil)",
                        "慮外な押収(Foil)");
  $card_r_price = array("100 Yen", "200 Yen", "100 Yen", "300 Yen", "100 Yen", "400 Yen", "100 Yen", "100 Yen");
  $card_r_stock = array(3, 0, 0, 1, 2, 0, 0, 0);


  $card_u = array("002-264.jpg", "010-264.jpg", "011-264.jpg", "013-264.jpg", "016-264.jpg", "025-264.jpg", "027-264.jpg", "029-264.jpg");
  $card_u_name = array("空中対応員(Foil)",
                        "領事府の看視(Foil)",
                        "領事の盾護員(Foil)",
                        "博覧会場の警備員(Foil)",
                        "変速の名手(Foil)",
                        "復元(Foil)",
                        "霊気装置の展示(Foil)",
                        "空鯨捕りの一撃(Foil)");
  $card_u_price = array("50 Yen", "50 Yen", "50 Yen", "50 Yen", "50 Yen", "50 Yen", "50 Yen", "50 Yen");
  $card_u_stock = array(2, 0, 0, 1, 0, 0, 2, 0);


  $card_c = array("001-264.jpg", "006-264.jpg", "007-264.jpg", "012-264.jpg", "014-264.jpg", "017-264.jpg", "018-264.jpg", "019-264.jpg");
  $card_c_name = array("軽業の妙技(Foil)",
                        "格納庫の整備士(Foil)",
                        "永存確約(Foil)",
                        "渦跡の鷹(Foil)",
                        "断片化(Foil)",
                        "光袖会の職工(Foil)",
                        "博覧会の歓迎者(Foil)",
                        "絶妙なタイミング(Foil)");
  $card_c_price = array("30 Yen", "30 Yen", "30 Yen", "30 Yen", "100 Yen", "30 Yen", "30 Yen", "30 Yen");
  $card_c_stock = array(3, 1, 1, 4, 0, 4, 5, 3);
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
  <body style="background-color: pink;">

    <div id="container">

    <div style="height:200px;">
      <div class="row">
        <div class="col-md-12">
        </div>
      </div>
      <div style="height:50px;background-color: white;margin-top:140px">
        <div class="col-md-2"></div>
        <div class="col-md-2" style="padding:14">Home</div>
        <div class="col-md-2" style="padding:14">Product</div>
        <div class="col-md-2" style="padding:14">About Us</div>
        <div class="col-md-2" style="padding:14">Contact</div>
        <a href="../cart.php" >
          <div class="col-md-2" style="padding:14;">Cart</div>
        </a>
      </div>
    </div>

    <div class="col-md-12" style="padding-top:20px">
      <div class="col-md-1"></div>
      <div class="col-md-11">
        <div id="main" class="main_singlecard main_sell_singlecard game_mtg">
          <div class="label_heading">
            <h2>カラデシュ</h2>
          </div>

          <div class="card_list_box">
            <div class="group_box rarity_M-foil">
              <h3>
                <em class="gr_color">M-foil</em>
                Card List
              </h3>


            <ul class="card_list">
              <?php
              for($i=0; $i<sizeof($card_m) ; $i++){
              ?>
              <li class="card_unit rarity_SP">

                <div class="headline gr_bg">
                  <form action="/api/favorite/add.php" method="post" data-api="favorite">
                    <p class="favorite">
                      <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                    </p>
                  </form>
                  <p class="id">
                      <?php echo substr($card_m[$i], 0,7); ?>
                  </p>
                </div>


                <div class="image_box">
                  <a href="/game_chaos/carddetail/cardpreview.php?VER=saekano1.0&amp;CID=10111&amp;MODE=sell">
                    <p class="image"><img src="pic/<?php echo $card_m[$i]; ?>" height="126" alt=""></p>
                  </a>
                  <p class="name"><?php echo $card_m_name[$i]; ?></p>
                </div>

                <div class="price_box">
                  <form action="" method="post" data-api="cart_add" data-api-ext="card_unit">
                    <p class="price">
                      <br><b><?php echo $card_m_price[$i]; ?></b>
                    </p>
                    <p class="stock">Quantity：<?php echo $card_m_stock[$i]; ?></p>
                    <p class="quantity">
                      <input type="number" max=<?php echo $card_m_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
                    </p>
                    <p class="cart"><span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_cart.png" alt="カートへ" data-prevent-submit=""></span></p>
                  </form>
                </div>


              </li>
              <?php
              }
              ?>
            </ul>

            </div>


            <div class="group_box rarity_R-foil">
              <h3><em class="gr_color">R-foil</em>
                Card List
              </h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_r) ; $i++){
                ?>
                <li class="card_unit rarity_R-foil">

                  <div class="headline gr_bg">
                    <form action="/api/favorite/add.php" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_r[$i], 0,7); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <a href="/game_chaos/carddetail/cardpreview.php?VER=saekano1.0&amp;CID=10111&amp;MODE=sell">
                      <p class="image"><img src="pic/<?php echo $card_r[$i]; ?>" height="126" alt=""></p>
                    </a>
                    <p class="name"><?php echo $card_r_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="" method="post" data-api="cart_add" data-api-ext="card_unit">
                      <p class="price">
                        <br><b><?php echo $card_r_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_r_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" max=<?php echo $card_r_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
                      </p>
                      <p class="cart"><span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_cart.png" alt="カートへ" data-prevent-submit=""></span></p>
                    </form>
                  </div>


                </li>
                <?php
                }
                ?>
              </ul>
            </div>




            <div class="group_box rarity_U-foil">
              <h3>
                <em class="gr_color">U-foil</em>
                Card List
              </h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_u) ; $i++){
                ?>
                <li class="card_unit rarity_U-foil">

                  <div class="headline gr_bg">
                    <form action="/api/favorite/add.php" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_u[$i], 0,7); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <a href="/game_chaos/carddetail/cardpreview.php?VER=saekano1.0&amp;CID=10111&amp;MODE=sell">
                      <p class="image"><img src="pic/<?php echo $card_u[$i]; ?>" height="126" alt=""></p>
                    </a>
                    <p class="name"><?php echo $card_u_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="" method="post" data-api="cart_add" data-api-ext="card_unit">
                      <p class="price">
                        <br><b><?php echo $card_u_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_u_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" max=<?php echo $card_u_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
                      </p>
                      <p class="cart"><span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_cart.png" alt="カートへ" data-prevent-submit=""></span></p>
                    </form>
                  </div>


                </li>
                <?php
                }
                ?>
              </ul>
            </div>




            <div class="group_box rarity_C-foil">
              <h3><em class="gr_color">C-foil</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_c) ; $i++){
                ?>
                <li class="card_unit rarity_C-foil">

                  <div class="headline gr_bg">
                    <form action="/api/favorite/add.php" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_c[$i], 0,7); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <a href="/game_chaos/carddetail/cardpreview.php?VER=saekano1.0&amp;CID=10111&amp;MODE=sell">
                      <p class="image"><img src="pic/<?php echo $card_c[$i]; ?>" height="126" alt=""></p>
                    </a>
                    <p class="name"><?php echo $card_c_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="" method="post" data-api="cart_add" data-api-ext="card_unit">
                      <p class="price">
                        <br><b><?php echo $card_c_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_c_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" max=<?php echo $card_c_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
                      </p>
                      <p class="cart"><span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_cart.png" alt="カートへ" data-prevent-submit=""></span></p>
                    </form>
                  </div>


                </li>
                <?php
                }
                ?>
              </ul>
            </div>
        </div>
      </div>
    </div>

  </div>

  </body>
</html>
