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

  $card_cr = array("CP17-JP005.jpg", "CP17-JP006.jpg", "CP17-JP011.jpg", "CP17-JP015.jpg", "CP17-JP019.jpg", "CP17-JP020.jpg", "CP17-JP023.jpg", "CP17-JP040.jpg");
  $card_cr_name = array("EM五虹の魔術師",
                        "覇王紫竜オッドアイズ・ヴェノム・ドラゴン",
                        "超重蒸鬼テツドウ-O",
                        "RR-ファイナル・フォートレス・ファルコン",
                        "白闘気海豚",
                        "白闘気白鯨",
                        "アマゾネス女帝",
                        "時械巫女");
  $card_cr_price = array("300 Yen", "780 Yen", "150 Yen", "500 Yen", "300 Yen", "400 Yen", "200 Yen", "1280 Yen");
  $card_cr_stock = array(8, 8, 5, 3, 4, 7, 8, 6);


  $card_ur = array("CP17-JP005U.jpg", "CP17-JP006U.jpg", "CP17-JP020U.jpg", "CP17-JP045U.jpg");
  $card_ur_name = array("EM五虹の魔術師",
                        "覇王紫竜オッドアイズ・ヴェノム・ドラゴン",
                        "白闘気白鯨",
                        "No.89 電脳獣ディアブロシス");
  $card_ur_price = array("150 Yen", "500 Yen", "200 Yen", "300 Yen");
  $card_ur_stock = array(100, 100, 100, 100);



  $card_sr = array("CP17-JP011S.jpg", "CP17-JP015S.jpg", "CP17-JP019S.jpg", "CP17-JP023S.jpg", "CP17-JP040S.jpg");
  $card_sr_name = array("超重蒸鬼テツドウ-O",
                        "RR-ファイナル・フォートレス・ファルコン",
                        "白闘気海豚",
                        "アマゾネス女帝",
                        "時械巫女");
  $card_sr_price = array("50 Yen", "150 Yen", "150 Yen", "50 Yen", "780 Yen");
  $card_sr_stock = array(100, 100, 100, 100, 100);



  $card_r = array("CP17-JP001.jpg", "CP17-JP004.jpg", "CP17-JP007.jpg", "CP17-JP008.jpg", "CP17-JP012.jpg", "CP17-JP029.jpg", "CP17-JP030.jpg", "CP17-JP032.jpg");
  $card_r_name = array("オッドアイズ・ランサー・ドラゴン",
                        "EMオッドアイズ・シンクロン",
                        "DDD超死偉王ホワイテスト・ヘル・アーマゲドン",
                        "DDD超死偉王ダークネス・ヘル・アーマゲドン",
                        "魔界劇団カーテン・ライザー",
                        "D-HERO ダスクユートピアガイ",
                        "V・HERO ウィッチ・レイド",
                        "究極進化薬");
  $card_r_price = array("50 Yen", "100 Yen", "50 Yen", "50 Yen", "50 Yen", "50 Yen", "30 Yen", "50 Yen");
  $card_r_stock = array(100, 100, 100, 100, 100, 100, 100, 100);



  $card_nr = array("CP17-JP035.jpg", "CP17-JP041.jpg");
  $card_nr_name = array("混沌幻魔アーミタイル",
                        "No.29 マネキンキャット");
  $card_nr_price = array("200 Yen", "980 Yen");
  $card_nr_stock = array(100, 9);


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
        <div id="main" class="main_singlecard main_sell_singlecard game_yg">
          <div class="label_heading">
            <h2>[CP17] COLLECTORS PACK 2017</h2>
          </div>

          <div class="card_list_box">
            <div class="group_box rarity_CR">
              <h3>
                <em class="gr_color">CR</em>
                Card List
              </h3>


            <ul class="card_list">
              <?php
              for($i=0; $i<sizeof($card_cr) ; $i++){
              ?>
              <li class="card_unit rarity_CR">

                <div class="headline gr_bg">
                  <form action="#" method="post" data-api="favorite">
                    <p class="favorite">
                      <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                    </p>
                  </form>
                  <p class="id">
                      <?php echo substr($card_cr[$i], 0,6); ?>
                  </p>
                </div>


                <div class="image_box">
                  <p class="image"><img src="pic/<?php echo $card_cr[$i]; ?>" height="126" alt=""></p>
                  <p class="name"><?php echo $card_cr_name[$i]; ?></p>
                </div>

                <div class="price_box">
                  <form action="../addCart.php" method="post">
                    <input type="hidden" name="type" value="yg" >
                    <input type="hidden" name="price" value="<?php echo $card_cr_price[$i]; ?>" >
                    <input type="hidden" name="name" value="<?php echo $card_cr_name[$i]; ?>" >
                    <input type="hidden" name="pic" value="<?php echo $card_cr[$i]; ?>" >

                    <p class="price">
                      <br><b><?php echo $card_cr_price[$i]; ?></b>
                    </p>
                    <p class="stock">Quantity：<?php echo $card_cr_stock[$i]; ?></p>
                    <p class="quantity">
                      <input type="number" name="quan" max=<?php echo $card_cr_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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





            <div class="group_box rarity_UR">
              <h3><em class="gr_color">UR</em>
                Card List
              </h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_ur) ; $i++){
                ?>
                <li class="card_unit rarity_UR">

                  <div class="headline gr_bg">
                    <form action="#" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_ur[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <p class="image"><img src="pic/<?php echo $card_ur[$i]; ?>" height="126" alt=""></p>
                    <p class="name"><?php echo $card_ur_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="../addCart.php" method="post">
                      <input type="hidden" name="type" value="yg" >
                      <input type="hidden" name="price" value="<?php echo $card_ur_price[$i]; ?>" >
                      <input type="hidden" name="name" value="<?php echo $card_ur_name[$i]; ?>" >
                      <input type="hidden" name="pic" value="<?php echo $card_ur[$i]; ?>" >

                      <p class="price">
                        <br><b><?php echo $card_ur_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_ur_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" name="quan" max=<?php echo $card_ur_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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






            <div class="group_box rarity_SR">
              <h3><em class="gr_color">SR</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_sr) ; $i++){
                ?>
                <li class="card_unit rarity_SR">

                  <div class="headline gr_bg">
                    <form action="#" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_sr[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <p class="image"><img src="pic/<?php echo $card_sr[$i]; ?>" height="126" alt=""></p>
                    <p class="name"><?php echo $card_sr_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="../addCart.php" method="post">
                      <input type="hidden" name="type" value="yg" >
                      <input type="hidden" name="price" value="<?php echo $card_sr_price[$i]; ?>" >
                      <input type="hidden" name="name" value="<?php echo $card_sr_name[$i]; ?>" >
                      <input type="hidden" name="pic" value="<?php echo $card_sr[$i]; ?>" >

                      <p class="price">
                        <br><b><?php echo $card_sr_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_sr_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" name="quan" max=<?php echo $card_sr_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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

            <div class="group_box rarity_R">
              <h3><em class="gr_color">R</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_r) ; $i++){
                ?>
                <li class="card_unit rarity_R">

                  <div class="headline gr_bg">
                    <form action="#" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_r[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <p class="image"><img src="pic/<?php echo $card_r[$i]; ?>" height="126" alt=""></p>
                    <p class="name"><?php echo $card_r_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="../addCart.php" method="post">
                      <input type="hidden" name="type" value="yg" >
                      <input type="hidden" name="price" value="<?php echo $card_r_price[$i]; ?>" >
                      <input type="hidden" name="name" value="<?php echo $card_r_name[$i]; ?>" >
                      <input type="hidden" name="pic" value="<?php echo $card_r[$i]; ?>" >

                      <p class="price">
                        <br><b><?php echo $card_r_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_r_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" name="quan" max=<?php echo $card_r_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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




            <div class="group_box rarity_NR">
              <h3><em class="gr_color">NR</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_nr) ; $i++){
                ?>
                <li class="card_unit rarity_NR">

                  <div class="headline gr_bg">
                    <form action="#" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_nr[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <p class="image"><img src="pic/<?php echo $card_nr[$i]; ?>" height="126" alt=""></p>
                    <p class="name"><?php echo $card_nr_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="../addCart.php" method="post">
                      <input type="hidden" name="type" value="yg" >
                      <input type="hidden" name="price" value="<?php echo $card_nr_price[$i]; ?>" >
                      <input type="hidden" name="name" value="<?php echo $card_nr_name[$i]; ?>" >
                      <input type="hidden" name="pic" value="<?php echo $card_nr[$i]; ?>" >

                      <p class="price">
                        <br><b><?php echo $card_nr_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_nr_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" name="quan" max=<?php echo $card_nr_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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
