<?php

/**
 * Title: Topics
 * 
 * Slug: themeslug/topics
 * Categories: featured
 *
 * @package Base Theme
 * @since 1.0.0
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <section id="topics">
    <div class="over_inner">
      <h2><span>TOPICS</span><br>トピックス</h2>
      <!--loopSliderを止めてフレックス表示-->
      <div class="loopSlider">
        <li class="topics__item"> <a href="https://seikosha-webshop.com/" target="_blank"> <img class="topics-list-image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/topic/bnr_03.jpg' ) ); ?>"/>
            <p class="topics__txt">プロ専用商材ショップ</p>
            <p class="topics__txt_sub">登録ユーザー向け</p>
          </a> </li>
        <li class="topics__item"> <a href="optimus/BodyContouring.html"> <img class="topics-list-image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/topic/bnr_04.jpg' ) ); ?>"/>
            <p class="topics__txt">癒されながら学ぶ</p>
            <p class="topics__txt_sub">施術する側される側</p>
          </a> </li>
        <li class="topics__item"> <a href="self_medication/"> <img class="topics-list-image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/topic/bnr_05.jpg' ) ); ?>"/>
            <p class="topics__txt">SELF MEDICATION</p>
            <p class="topics__txt_sub">健康習慣を身につけるお手伝い</p>
          </a> </li>
        <li class="topics__item"> <a href="company/evidence.html"> <img class="topics-list-image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/topic/bnr_01.jpg' ) ); ?>"/>
            <p class="topics__txt">EVIDENCE</p>
            <p class="topics__txt_sub">健康と美を追求する</p>
          </a> </li>
        <li class="topics__item"> <a href="https://www.rakuten.co.jp/seikosha/" target="_blank"> <img class="topics-list-image" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/topic/bnr_02.jpg' ) ); ?>"/>
            <p class="topics__txt">公式オンラインショップ</p>
            <p class="topics__txt_sub">個人のお客様向け</p>
          </a> </li>
      </div>
    </div>
    <!-- /wp:group -->