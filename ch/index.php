<?php
session_start();
?>
<?php

  $card_pr = array("SH-BPR001.jpg", "SH-BPR002.jpg", "SH-BPR003.jpg", "SH-BPR004.jpg");
  $card_pr_name = array("目が離せない「澤村・スペンサー・英梨々」",
                        "挑発するしぐさ「霞ヶ丘 詩羽」",
                        "秋の天の川の下で「加藤 恵」",
                        "はだけた浴衣「氷堂 美智留」");
  $card_pr_price = array("100 Yen", "100 Yen", "100 Yen", "100 Yen");
  $card_pr_stock = array(100, 100, 100, 100);

  $card_sp = array("SH-001.jpg", "SH-005.jpg", "SH-009.jpg", "SH-013.jpg", "SH-017.jpg");
  $card_sp_name = array("直になれない彼女「澤村・スペンサー・英梨々」(サイン入り)",
                        "想いを胸に抱く彼女「霞ヶ丘 詩羽」(サイン入り)",
                        "フラグの立たない彼女「加藤 恵」(サイン入り)",
                        "妹系の後輩「波島 出海」(サイン入り)",
                        "生まれたときからの幼馴染み「氷堂 美智留」(サイン入り)");
  $card_sp_price = array("17800 Yen", "14800 Yen", "19800 Yen", "4980 Yen", "5980 Yen");
  $card_sp_stock = array(1, 2, 0, 1, 0);

  $card_rrr = array("SH-002.jpg", "SH-006.jpg", "SH-021.jpg", "SH-025.jpg", "SH-028.jpg", "SH-057.jpg", "SH-058.jpg", "SH-059.jpg");
  $card_rrr_name = array("blessing software原画担当",
                        "blessing softwareシナリオ",
                        "サークル活動開始!「安芸 倫也」",
                        "顔の広さは抜群「波島 伊織」",
                        "意地悪なお膳立て「町田 苑子」",
                        "リトルラブ・ラプソディ",
                        "icy tail",
                        "恋するメトロノーム");
  $card_rrr_price = array("500 Yen", "980 Yen", "1980 Yen", "500 Yen", "680 Yen", "780 Yen", "780 Yen", "780 Yen");
  $card_rrr_stock = array(0, 1, 5, 9, 0, 0, 3, 0);

  $card_rr = array("SH-001N.jpg", "SH-005N.jpg", "SH-009N.jpg", "SH-013N.jpg", "SH-017N.jpg", "SH-021N.jpg", "SH-025N.jpg", "SH-028N.jpg");
  $card_rr_name = array("直になれない彼女「澤村・スペンサー・英梨々」",
                        "想いを胸に抱く彼女「霞ヶ丘 詩羽」",
                        "フラグの立たない彼女「加藤 恵」",
                        "妹系の後輩「波島 出海」",
                        "生まれたときからの幼馴染み「氷堂 美智留」",
                        "サークル活動開始!「安芸 倫也」",
                        "顔の広さは抜群「波島 伊織」",
                        "意地悪なお膳立て「町田 苑子」");
  $card_rr_price = array("200 Yen", "200 Yen", "680 Yen", "100 Yen", "200 Yen", "1480 Yen", "100 Yen", "300 Yen");
  $card_rr_stock = array(3, 100, 0, 100, 100, 100, 100, 100);

  $card_r = array("SH-002N.jpg", "SH-006N.jpg", "SH-010.jpg", "SH-014.jpg", "SH-018.jpg", "SH-022.jpg", "SH-026.jpg", "SH-029.jpg");
  $card_r_name = array("blessing software原画担当",
                        "blessing softwareシナリオ",
                        "blessing softwareメインヒ",
                        "見違えるほどの成長「波島 出海」",
                        "icy tail ギター&ボーカル担当「氷堂 美智留」",
                        "blessing software代表「安芸 倫也」",
                        "嬉しくない再会「波島 伊織」",
                        "不死川ファンタスティック文庫編集部副編集長「町田 苑子」");
  $card_r_price = array("100 Yen", "500 Yen", "50 Yen", "200 Yen", "150 Yen", "300 Yen", "400 Yen", "50 Yen");
  $card_r_stock = array(100, 100, 100, 100, 100, 100, 100, 100);

  $card_u = array("SH-003.jpg", "SH-007.jpg", "SH-011.jpg", "SH-015.jpg", "SH-019.jpg", "SH-023.jpg", "SH-027.jpg", "SH-035.jpg");
  $card_u_name = array("ちょっぴり期待した「澤村・スペンサー・英梨々」",
                        "倫也を迎え入れた「霞ヶ丘 詩羽」",
                        "表情パターンの練習「加藤 恵」",
                        "思いもよらない贈り物「波島 出海」",
                        "無防備すぎる格好「氷堂 美智留」",
                        "冷たい視線「安芸 倫也」",
                        "道を違えた親友「波島 伊織」",
                        "黙っていた「森丘 藍子」");
  $card_u_price = array("30 Yen", "30 Yen", "30 Yen", "30 Yen", "30 Yen", "30 Yen", "30 Yen", "30 Yen");
  $card_u_stock = array(100, 100, 100, 100, 100, 100, 100, 100);

  $card_c = array("SH-004.jpg", "SH-008.jpg", "SH-012.jpg", "SH-016.jpg", "SH-020.jpg", "SH-024.jpg", "SH-031.jpg", "SH-033.jpg");
  $card_c_name = array("目が離せない「澤村・スペンサー・英梨々」",
                        "挑発するしぐさ「霞ヶ丘 詩羽」",
                        "秋の天の川の下で「加藤 恵」",
                        "一番弟子からの招待「波島 出海」",
                        "はだけた浴衣「氷堂 美智留」",
                        "叶えたい目標「安芸 倫也」",
                        "衝撃の事実「姫川 時乃」",
                        "言い出せなかった「水原 叡智佳」");
  $card_c_price = array("20 Yen", "20 Yen", "20 Yen", "20 Yen", "20 Yen", "20 Yen", "20 Yen", "20 Yen");
  $card_c_stock = array(100, 100, 100, 100, 100, 100, 100, 100);

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
        <div id="main" class="main_singlecard main_sell_singlecard game_chaos">
          <div class="label_heading">
            <h2>ChaosTCG</h2>
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
                      <input type="hidden" name="type" value="ch" >
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


            <div class="group_box rarity_RRR">
              <h3><em class="gr_color">RRR</em>
                Card List
              </h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_rrr) ; $i++){
                ?>
                <li class="card_unit rarity_RRR">

                  <div class="headline gr_bg">
                    <form action="/api/favorite/add.php" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                		    <?php echo substr($card_rrr[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <a href="/game_chaos/carddetail/cardpreview.php?VER=saekano1.0&amp;CID=10111&amp;MODE=sell">
                      <p class="image"><img src="pic/<?php echo $card_rrr[$i]; ?>" height="126" alt=""></p>
                    </a>
                    <p class="name"><?php echo $card_rrr_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="" method="post" data-api="cart_add" data-api-ext="card_unit">
                      <p class="price">
                        <br><b><?php echo $card_rrr_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_rrr_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" max=<?php echo $card_rrr_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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

            <div class="group_box rarity_RR">
              <h3><em class="gr_color">RR</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_rr) ; $i++){
                ?>
                <li class="card_unit rarity_RR">

                  <div class="headline gr_bg">
                    <form action="/api/favorite/add.php" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                		    <?php echo substr($card_rr[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <a href="/game_chaos/carddetail/cardpreview.php?VER=saekano1.0&amp;CID=10111&amp;MODE=sell">
                      <p class="image"><img src="pic/<?php echo $card_rr[$i]; ?>" height="126" alt=""></p>
                    </a>
                    <p class="name"><?php echo $card_rr_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="" method="post" data-api="cart_add" data-api-ext="card_unit">
                      <p class="price">
                        <br><b><?php echo $card_rr_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_rr_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" max=<?php echo $card_rr_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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

            <div class="group_box rarity_R">
              <h3><em class="gr_color">R</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_r) ; $i++){
                ?>
                <li class="card_unit rarity_R">

                  <div class="headline gr_bg">
                    <form action="/api/favorite/add.php" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                		    <?php echo substr($card_r[$i], 0,6); ?>
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

            <div class="group_box rarity_U">
              <h3><em class="gr_color">U</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_c) ; $i++){
                ?>
                <li class="card_unit rarity_C">

                  <div class="headline gr_bg">
                    <form action="/api/favorite/add.php" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                		    <?php echo substr($card_c[$i], 0,6); ?>
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

            <div class="group_box rarity_C">
              <h3><em class="gr_color">C</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_r) ; $i++){
                ?>
                <li class="card_unit rarity_R">

                  <div class="headline gr_bg">
                    <form action="/api/favorite/add.php" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                		    <?php echo substr($card_r[$i], 0,6); ?>
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

            <div class="group_box rarity_PR">
              <h3><em class="gr_color">PR</em> Card List</h3>
              <ul class="card_list">
                <?php
                for($i=0; $i<sizeof($card_pr) ; $i++){
                ?>
                <li class="card_unit rarity_PR">

                  <div class="headline gr_bg">
                    <form action="/api/favorite/add.php" method="post" data-api="favorite">
                      <p class="favorite">
                        <span class="submit_wrapper"><input type="image" src="http://yuyu-tei.jp/img/common/card/btn_favorite_off.png" alt="☆" data-prevent-submit=""></span>
                      </p>
                    </form>
                    <p class="id">
                		    <?php echo substr($card_pr[$i], 0,6); ?>
                    </p>
                  </div>


                  <div class="image_box">
                    <a href="/game_chaos/carddetail/cardpreview.php?VER=saekano1.0&amp;CID=10111&amp;MODE=sell">
                      <p class="image"><img src="pic/<?php echo $card_pr[$i]; ?>" height="126" alt=""></p>
                    </a>
                    <p class="name"><?php echo $card_pr_name[$i]; ?></p>
                  </div>

                  <div class="price_box">
                    <form action="" method="post" data-api="cart_add" data-api-ext="card_unit">
                      <p class="price">
                        <br><b><?php echo $card_r_price[$i]; ?></b>
                      </p>
                      <p class="stock">Quantity：<?php echo $card_pr_stock[$i]; ?></p>
                      <p class="quantity">
                        <input type="number" max=<?php echo $card_pr_stock[$i]; ?> min=0 maxlength="2" size="2" style="width:98%!important;text-align: center; "/>
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
