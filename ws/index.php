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

  $card_sp = array("SS-WE15-08.jpg", "SS-WE15-12.jpg", "SS-WE15-26.jpg");
  $card_sp_name = array("この刃に懸けて シャナ(サイン入り)",
                        "悠二と歩む道 シャナ(サイン入り)",
                        "『巫女』ヘカテー (サイン入り)");
  $card_sp_price = array("5980 Yen", "4980 Yen", "3980 Yen");
  $card_sp_stock = array(4, 4, 2);



  $card_cc = array("SS-WE15-24.jpg", "SS-WE15-25.jpg", "SS-WE15-36.jpg");
  $card_cc_name = array("新世界へ",
                        "ぶつかる想い",
                        "次の願いの結実まで");
  $card_cc_price = array("300 Yen", "150 Yen", "50 Yen");
  $card_cc_stock = array(100, 3, 100);




  $card_r = array("SS-WE15-01.jpg", "SS-WE15-06.jpg", "SS-WE15-07.jpg", "SS-WE15-08R.jpg", "SS-WE15-09.jpg", "SS-WE15-10.jpg", "SS-WE15-11.jpg", "SS-WE15-12R.jpg");
  $card_r_name = array("悠二の消えた日 シャナ",
                        "成長の鍵 シャナ",
                        "一流の自在師 マージョリー",
                        "この刃に懸けて シャナ",
                        "最終決戦 マージョリー",
                        "“ペルソナ”装着 ヴィルヘルミナ",
                        "愛がすべて シャナ",
                        "悠二と歩む道 シャナ");
  $card_r_price = array("50 Yen", "50 Yen", "100 Yen", "200 Yen", "50 Yen", "50 Yen", "500 Yen", "300 Yen");
  $card_r_stock = array(100, 100, 100, 100, 100, 100, 2, 100);



  $card_c = array("SS-WE15-02.jpg", "SS-WE15-03.jpg", "SS-WE15-04.jpg", "SS-WE15-05.jpg", "SS-WE15-13.jpg", "SS-WE15-14.jpg", "SS-WE15-15.jpg", "SS-WE15-16.jpg");
  $card_c_name = array("囚われのシャナ",
                        "ネコミミ 一美",
                        "揺れる想い 一美",
                        "逃げない勇気 一美",
                        "最強の自在法 シャナ",
                        "使命の為に ヴィルヘルミナ",
                        "『鬼功の繰り手』サーレ・ハビヒツブルグ",
                        "揺るがぬ心 シャナ");
  $card_c_price = array("50 Yen", "30 Yen", "30 Yen", "50 Yen", "30 Yen", "30 Yen", "30 Yen", "30 Yen");
  $card_c_stock = array(100, 100, 100, 6, 100, 100, 100, 100);



  $card_sr = array("SS-WE15-01S.jpg", "SS-WE15-06S.jpg", "SS-WE15-07S.jpg", "SS-WE15-08S.jpg", "SS-WE15-09S.jpg", "SS-WE15-10S.jpg", "SS-WE15-11S.jpg", "SS-WE15-12S.jpg");
  $card_sr_name = array("悠二の消えた日 シャナ(ホロ)",
                        "成長の鍵 シャナ(ホロ)",
                        "一流の自在師 マージョリー(ホロ)",
                        "この刃に懸けて シャナ(ホロ)",
                        "最終決戦 マージョリー(ホロ)",
                        "“ペルソナ”装着 ヴィルヘルミナ(ホロ)",
                        "愛がすべて シャナ(ホロ)",
                        "悠二と歩む道 シャナ(ホロ)");
  $card_sr_price = array("100 Yen", "100 Yen", "150 Yen", "300 Yen", "50 Yen", "150 Yen", "680 Yen", "400 Yen");
  $card_sr_stock = array(100, 100, 100, 100, 100, 100, 100, 100);



  $card_sc = array("SS-WE15-02S.jpg", "SS-WE15-03S.jpg", "SS-WE15-04S.jpg", "SS-WE15-05S.jpg", "SS-WE15-13S.jpg", "SS-WE15-14S.jpg", "SS-WE15-15S.jpg", "SS-WE15-16S.jpg");
  $card_sc_name = array("囚われのシャナ (ホロ)",
                        "ネコミミ 一美(ホロ)",
                        "揺れる想い 一美(ホロ)",
                        "逃げない勇気 一美(ホロ)",
                        "最強の自在法 シャナ(ホロ)",
                        "使命の為に ヴィルヘルミナ(ホロ)",
                        "『鬼功の繰り手』サーレ・ハビヒツブルグ (ホロ)",
                        "揺るがぬ心 シャナ(ホロ)");
  $card_sc_price = array("150 Yen", "50 Yen", "50 Yen", "100 Yen", "50 Yen", "50 Yen", "50 Yen", "50 Yen");
  $card_sc_stock = array(6, 100, 100, 100, 100, 100, 100, 10);




  $card_scc = array("SS-WE15-24S.jpg", "SS-WE15-25S.jpg", "SS-WE15-36S.jpg");
  $card_scc_name = array("新世界へ(ホロ)",
                        "ぶつかる想い(ホロ)",
                        "次の願いの結実まで(ホロ)");
  $card_scc_price = array("780 Yen", "400 Yen", "100 Yen");
  $card_scc_stock = array(100, 8, 3);



  $card_pr = array("SS-WE15-P01.jpg", "SS-WE15-P02.jpg", "SS-WE15-P03.jpg");
  $card_pr_name = array("屈せぬ心 シャナ",
                        "水着のシャナ",
                        "チャイナドレスのシャナ");
  $card_pr_price = array("100 Yen", "50 Yen", "100 Yen");
  $card_pr_stock = array(100, 100, 100);

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
        <div id="main" class="main_singlecard main_sell_singlecard game_ws">
          <div class="label_heading">
            <h2>灼眼のシャナ Extra</h2>
          </div>

          <div class="card_list_box">
            <div class="group_box rarity_SP">
              <h3>
                <em class="gr_color">SP</em>
                Card List
              </h3>


            <ul class="card_list">
              <?php
              for($i=0; $i<sizeof($card_sp) ; $i++){
              ?>
              <li class="card_unit rarity_SP">

                <div class="headline gr_bg">
                  <form action="#" method="post" data-api="favorite">
                    <p class="favorite">
                      <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                    </p>
                  </form>
                  <p class="id">
                      <?php echo substr($card_sp[$i], 0,6); ?>
                  </p>
                </div>


                <div class="image_box">
                  <p class="image"><img src="pic/<?php echo $card_sp[$i]; ?>" height="126" alt=""></p>
                  <p class="name"><?php echo $card_sp_name[$i]; ?></p>
                </div>

                <div class="price_box">
                  <form action="../addCart.php" method="post">
                    <input type="hidden" name="type" value="ws" >
                    <input type="hidden" name="price" value="<?php echo $card_sp_price[$i]; ?>" >
                    <input type="hidden" name="name" value="<?php echo $card_sp_name[$i]; ?>" >
                    <input type="hidden" name="pic" value="<?php echo $card_sp[$i]; ?>" >

                    <p class="price">
                      <br><b><?php echo $card_sp_price[$i]; ?></b>
                    </p>
                    <p class="stock">Quantity：<?php echo $card_sp_stock[$i]; ?></p>
                    <p class="quantity">
                      <input type="number" name="quan" max=<?php echo $card_sp_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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
              <h3><em class="gr_color">R</em>
                Card List
              </h3>
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
                      <input type="hidden" name="type" value="ws" >
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





            <div class="group_box rarity_C">
              <h3><em class="gr_color">C</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_c) ; $i++){
                ?>
                <li class="card_unit rarity_C">

                  <div class="headline gr_bg">
                    <form action="#" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_c[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <p class="image"><img src="pic/<?php echo $card_c[$i]; ?>" height="126" alt=""></p>
                    <p class="name"><?php echo $card_c_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="../addCart.php" method="post">
                      <input type="hidden" name="type" value="ws" >
                      <input type="hidden" name="price" value="<?php echo $card_c_price[$i]; ?>" >
                      <input type="hidden" name="name" value="<?php echo $card_c_name[$i]; ?>" >
                      <input type="hidden" name="pic" value="<?php echo $card_c[$i]; ?>" >

                      <p class="price">
                        <br><b><?php echo $card_c_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_c_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" name="quan" max=<?php echo $card_c_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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

            <div class="group_box rarity_CC">
              <h3><em class="gr_color">CC</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_cc) ; $i++){
                ?>
                <li class="card_unit rarity_CC">

                  <div class="headline gr_bg">
                    <form action="#" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_cc[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <p class="image"><img src="pic/<?php echo $card_cc[$i]; ?>" height="126" alt=""></p>
                    <p class="name"><?php echo $card_cc_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="../addCart.php" method="post">
                      <input type="hidden" name="type" value="ws" >
                      <input type="hidden" name="price" value="<?php echo $card_cc_price[$i]; ?>" >
                      <input type="hidden" name="name" value="<?php echo $card_cc_name[$i]; ?>" >
                      <input type="hidden" name="pic" value="<?php echo $card_cc[$i]; ?>" >

                      <p class="price">
                        <br><b><?php echo $card_cc_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_cc_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" name="quan" max=<?php echo $card_cc_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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

            <div class="group_box rarity_S-R">
              <h3><em class="gr_color">S-R</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_sr) ; $i++){
                ?>
                <li class="card_unit rarity_S-R">

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
                      <input type="hidden" name="type" value="ws" >
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



            <div class="group_box rarity_S-C">
              <h3><em class="gr_color">S-C</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_sc) ; $i++){
                ?>
                <li class="card_unit rarity_S-C">

                  <div class="headline gr_bg">
                    <form action="#" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_sc[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <p class="image"><img src="pic/<?php echo $card_sc[$i]; ?>" height="126" alt=""></p>
                    <p class="name"><?php echo $card_sc_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="../addCart.php" method="post">
                      <input type="hidden" name="type" value="ws" >
                      <input type="hidden" name="price" value="<?php echo $card_sc_price[$i]; ?>" >
                      <input type="hidden" name="name" value="<?php echo $card_sc_name[$i]; ?>" >
                      <input type="hidden" name="pic" value="<?php echo $card_sc[$i]; ?>" >

                      <p class="price">
                        <br><b><?php echo $card_sc_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_sc_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" name="quan" max=<?php echo $card_sc_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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

            <div class="group_box rarity_S-CC">
              <h3><em class="gr_color">S-CC</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_scc) ; $i++){
                ?>
                <li class="card_unit rarity_S-CC">

                  <div class="headline gr_bg">
                    <form action="#" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                        <?php echo substr($card_scc[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <p class="image"><img src="pic/<?php echo $card_scc[$i]; ?>" height="126" alt=""></p>
                    <p class="name"><?php echo $card_scc_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="../addCart.php" method="post">
                      <input type="hidden" name="type" value="ws" >
                      <input type="hidden" name="price" value="<?php echo $card_scc_price[$i]; ?>" >
                      <input type="hidden" name="name" value="<?php echo $card_scc_name[$i]; ?>" >
                      <input type="hidden" name="pic" value="<?php echo $card_scc[$i]; ?>" >

                      <p class="price">
                        <br><b><?php echo $card_scc_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_scc_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" name="quan" max=<?php echo $card_scc_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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




          <div class="group_box rarity_PR">
            <h3><em class="gr_color">PR</em> Card List</h3>
            <ul class="card_list">
              <?php
              for($i=0; $i<sizeof($card_pr) ; $i++){
              ?>
              <li class="card_unit rarity_PR">

                <div class="headline gr_bg">
                  <form action="#" method="post" data-api="favorite">
                    <p class="favorite">
                      <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                    </p>
                  </form>
                  <p class="id">
                      <?php echo substr($card_pr[$i], 0,6); ?>
                  </p>
                </div>


                <div class="image_box">
                  <p class="image"><img src="pic/<?php echo $card_pr[$i]; ?>" height="126" alt=""></p>
                  <p class="name"><?php echo $card_pr_name[$i]; ?></p>
                </div>

                <div class="price_box">
                  <form action="../addCart.php" method="post">
                    <input type="hidden" name="type" value="ws" >
                    <input type="hidden" name="price" value="<?php echo $card_pr_price[$i]; ?>" >
                    <input type="hidden" name="name" value="<?php echo $card_pr_name[$i]; ?>" >
                    <input type="hidden" name="pic" value="<?php echo $card_pr[$i]; ?>" >

                    <p class="price">
                      <br><b><?php echo $card_pr_price[$i]; ?></b>
                    </p>
                    <p class="stock">Quantity：<?php echo $card_pr_stock[$i]; ?></p>
                    <p class="quantity">
                      <input type="number" name="quan" max=<?php echo $card_pr_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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
