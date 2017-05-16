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
<?php

  $card_gr = array("G-FC04-001.jpg", "G-FC04-002.jpg", "G-FC04-003.jpg", "G-FC04-004.jpg", "G-FC04-005.jpg", "G-FC04-006.jpg", "G-FC04-007.jpg", "G-FC04-008.jpg");
  $card_gr_name = array("集光の聖騎士 オルビウス・アヴァロ",
                        "天上の主神 アマテラス",
                        "聖黒熾天使 ヴェラトール・ターミナ",
                        "暗黒騎士 イルガン・ヴェート",
                        "連環の黄金騎士 ケルティス・ウィナ",
                        "決着の女神 パラス・アテナ",
                        "覇天皇竜 ブレイジングバースト・ドラゴン",
                        "六道忍竜 ロクシキラカン");
  $card_gr_price = array("580 Yen", "780 Yen", "400 Yen", "780 Yen", "300 Yen", "780 Yen", "1280 Yen", "580 Yen");
  $card_gr_stock = array(5, 100, 100, 1, 100, 100, 100, 100);



  $card_rrr = array("G-FC04-025.jpg", "G-FC04-026.jpg", "G-FC04-027.jpg", "G-FC04-028.jpg", "G-FC04-029.jpg", "G-FC04-030.jpg", "G-FC04-031.jpg", "G-FC04-032.jpg");
  $card_rrr_name = array("神聖獣 ディバイン・ますくがる",
                        "護り抜く者 ロゼンジ・メイガス・エイペックス",
                        "聖黒熾天使 エレレート",
                        "罪業の魔女王 イエリッド",
                        "癒しの真・解放者 エルリーゼ",
                        "大成の魔女王 ローリエ",
                        "覇天皇竜 アドバンスガード・ドラゴン",
                        "呪経忍妖 ザシキヒメ");
  $card_rrr_price = array("200 Yen", "200 Yen", "200 Yen", "200 Yen", "200 Yen", "200 Yen", "150 Yen", "150 Yen");
  $card_rrr_stock = array(100, 100, 100, 1, 100, 0, 100, 100);



  $card_rr = array("G-FC04-049.jpg", "G-FC04-050.jpg", "G-FC04-051.jpg", "G-FC04-052.jpg", "G-FC04-053.jpg", "G-FC04-054.jpg", "G-FC04-055.jpg", "G-FC04-056.jpg");
  $card_rr_name = array("ますくがる",
                        "ロゼンジ・メイガス・ファイン",
                        "黒衣の新薬 エレレート",
                        "異端の魔女 イエリッド",
                        "天霊薬の解放者",
                        "大器の魔女 ローリエ",
                        "ポジティブ・ドラコキッド",
                        "微笑む幸運 ザシキヒメ");
  $card_rr_price = array("100 Yen", "100 Yen", "100 Yen", "100 Yen", "100 Yen", "100 Yen", "100 Yen", "100 Yen");
  $card_rr_stock = array(100, 100, 100, 100, 100, 100, 100, 100);


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

    <div class="col-md-12" style="padding-top:20px">
      <div class="col-md-1"></div>
      <div class="col-md-11">
        <div id="main" class="main_singlecard main_sell_singlecard game_vg">
          <div class="label_heading">
            <h2>ChaosTCG</h2>
          </div>

          <div class="card_list_box">
            <div class="group_box rarity_GR">
              <h3>
                <em class="gr_color">GR</em>
                Card List
              </h3>


            <ul class="card_list">
              <?php
              for($i=0; $i<sizeof($card_gr) ; $i++){
              ?>
              <li class="card_unit rarity_GR">

                <div class="headline gr_bg">
                  <form action="#" method="post" data-api="favorite">
                    <p class="favorite">
                      <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                    </p>
                  </form>
                  <p class="id">
                      <?php echo substr($card_gr[$i], 0,6); ?>
                  </p>
                </div>


                <div class="image_box">
                  <p class="image"><img src="pic/<?php echo $card_gr[$i]; ?>" height="126" alt=""></p>
                  <p class="name"><?php echo $card_gr_name[$i]; ?></p>
                </div>

                <div class="price_box">
                  <form action="../addCart.php" method="post">
                    <input type="hidden" name="type" value="vg" >
                    <input type="hidden" name="price" value="<?php echo $card_gr_price[$i]; ?>" >
                    <input type="hidden" name="name" value="<?php echo $card_gr_name[$i]; ?>" >
                    <input type="hidden" name="pic" value="<?php echo $card_gr[$i]; ?>" >

                    <p class="price">
                      <br><b><?php echo $card_gr_price[$i]; ?></b>
                    </p>
                    <p class="stock">Quantity：<?php echo $card_gr_stock[$i]; ?></p>
                    <p class="quantity">
                      <input type="number" name="quan" max=<?php echo $card_gr_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
                    </p>
                    <p class="cart">
                      <span class="submit_wrapper">
                        <input type="image" src="http://yuyu-tei.jp/img/common/card/btn_cart.png">
                      </span>
                    </p>
                  </form>
                </div>


              </li>
              <?php
              }
              ?>
            </ul>

            </div>


            <div class="group_box rarity_RRR">
              <h3><em class="gr_color">RRR</em>
                Card List
              </h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_rrr) ; $i++){
                ?>
                <li class="card_unit rarity_GR">

                  <div class="headline gr_bg">
                    <form action="#" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_rrr[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <p class="image"><img src="pic/<?php echo $card_rrr[$i]; ?>" height="126" alt=""></p>
                    <p class="name"><?php echo $card_rrr_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="../addCart.php" method="post">
                      <input type="hidden" name="type" value="vg" >
                      <input type="hidden" name="price" value="<?php echo $card_rrr_price[$i]; ?>" >
                      <input type="hidden" name="name" value="<?php echo $card_rrr_name[$i]; ?>" >
                      <input type="hidden" name="pic" value="<?php echo $card_rrr[$i]; ?>" >

                      <p class="price">
                        <br><b><?php echo $card_rrr_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_rrr_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" name="quan" max=<?php echo $card_rrr_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
                      </p>
                      <p class="cart">
                        <span class="submit_wrapper">
                          <input type="image" src="http://yuyu-tei.jp/img/common/card/btn_cart.png">
                        </span>
                      </p>
                    </form>
                  </div>


                </li>
                <?php
                }
                ?>
              </ul>
            </div>

            <div class="group_box rarity_RR">
              <h3><em class="gr_color">RR</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_rr) ; $i++){
                ?>
                <li class="card_unit rarity_GR">
  
                  <div class="headline gr_bg">
                    <form action="#" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_rr[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <p class="image"><img src="pic/<?php echo $card_rr[$i]; ?>" height="126" alt=""></p>
                    <p class="name"><?php echo $card_rr_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="../addCart.php" method="post">
                      <input type="hidden" name="type" value="vg" >
                      <input type="hidden" name="price" value="<?php echo $card_rr_price[$i]; ?>" >
                      <input type="hidden" name="name" value="<?php echo $card_rr_name[$i]; ?>" >
                      <input type="hidden" name="pic" value="<?php echo $card_rr[$i]; ?>" >

                      <p class="price">
                        <br><b><?php echo $card_rr_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_rr_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" name="quan" max=<?php echo $card_rr_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
                      </p>
                      <p class="cart">
                        <span class="submit_wrapper">
                          <input type="image" src="http://yuyu-tei.jp/img/common/card/btn_cart.png">
                        </span>
                      </p>
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
