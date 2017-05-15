<?php
session_start();
?>
<?php

  $card_sup = array("SP-001.jpg", "SP-002.jpg", "SP-003.jpg", "SP-004.jpg", "SP-005.jpg",
                  "SP-006.jpg", "SP-007.jpg", "SP-008.jpg", "SP-009.jpg", "SP-010.jpg");
  $card_sup_name = array("キャラクターデッキケースコレクションMAX 千の刃濤、桃花染の皇姫 「稲生 滸」（6月30日 発売）",
                        "ブシロードスリーブコレクションHG Vol.1266 劇場版 ソードアート・オンライン -オーディナル・スケール- 『アスナ』Part.2（6月2日 発売）",
                        "ブシロード スリーブコレクションエクストラ Vol.206 劇場版 ソードアート・オンライン-オーディナル・スケール-『アスナ&直葉』",
                        "ブシロード スリーブコレクションエクストラ Vol.212 『ペルソナ５』",
                        "ChaosTCG アップデートスリーブコレクション Vol.11 『乙女理論とその後の周辺』（スリーブのみ）",
                        "きゃらスリーブコレクション No.72 劇場版魔法先生ネギま！ ANIME FINAL 神楽坂明日菜",
                        "ねくねっとガールズラバーマット Vol.025 「新妻LOVELY×CATION」",
                        "TCG万能プレイマット Rewrite 「千里 朱音」",
                        "ねくねっとガールズラバーマット Vol.020 「銃騎士 Cutie☆Bullet」",
                        "ねくねっとガールズラバーマット Vol.018 G線上の魔王");
  $card_sup_price = array("720 Yen", "760 Yen", "1480 Yen", "1980 Yen", "300 Yen", "390 Yen", "2900 Yen", "1780 Yen", "2900 Yen", "2900 Yen");
  $card_sup_stock = array(2, 2, 3, 2, 100, 100, 1, 2, 2, 1);
  $card_sup_date = array( "2017年6月30日",
                          "2017年6月2日",
                          "17年5月08日（当店販売開始）",
                          "17年5月08日（当店販売開始）",
                          "17年3月24日（当店販売開始）",
                          "12年4月下旬",
                          "2017年6月30日",
                          "2017年6月30日",
                          "2017年4月28日",
                          "2017年3月31日");


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
        <div class="col-md-2" style="padding:14">Cart</div>
      </div>
    </div>


    <div class="col-md-12" style="padding-top:20px">
      <div class="col-md-1"></div>
      <div class="col-md-11">
        <div id="main" class="main_supply_unit main_singlecard main_sell_singlecard game_chaos">
          <div class="label_heading">
            <h2>Supply</h2>
          </div>
          <ul class="item_list">

            <?php
            for($i=0; $i<sizeof($card_sup) ; $i++){
            ?>

            <li class="item_unit">
              <table class="item_box">
                <tbody>
                  <tr>
                    <td rowspan="2" class="image">
                      <a href="">
                        <img src=<?php echo 'pic/'.$card_sup[$i]; ?> alt="">
                      </a>
                    </td>
                    <td colspan="2" class="item_cell">
                      <p class="item_name">
                        <a href="">
                          <?php echo $card_sup_name[$i]; ?>
                        </a>
                      </p>
                    </td>

                    <td rowspan="2" class="price_cell">
                      <div class="price_box">
                        <form action="" method="post" data-api="cart_add">
                          <p class="price">
                            <br><b><?php echo $card_sup_price[$i]; ?></b>
                          </p>
                          <p class="stock">Quantity：<?php echo $card_sup_stock[$i]; ?></p>
                          <p class="quantity">
                            <input type="text" maxlength="2" size="2" style="width:60%!important;text-align: center; "/>
                          </p>
                          <p class="cart">
                            <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_cart.png" alt="カートへ" data-prevent-submit=""></span>
                          </p>
                        </form>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>発売日</th>
                    <td><?php echo $card_sup_date[$i]; ?></td>
                  </tr>
                </tbody>
              </table>
            </li>

          <?php
          }
          ?>


          </ul>
        </div>
      </div>
    </div>

  </div>

  </body>
</html>
