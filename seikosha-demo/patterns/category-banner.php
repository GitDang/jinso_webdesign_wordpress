
<?php
/**
 * Title: Category Banner
 * 
 * Slug: themeslug/category-banner
 * Categories: featured
 *
 * @package Base Theme
 * @since 1.0.0
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
  <div class="flexbox">
      <div class="img_link">
          <a href="https://spojoba.com/articles/pr/1260" target="_blank">
              <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/spj_pc_03.jpg' ) ); ?>" width="" class="pc mb20" alt="スポジョバ">
          </a>
      </div> 
      <div class="ml20 img_link">
          <a href="/business_support/">
              <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/business_pc_03.jpg' ) ); ?>" width="" class="pc  border mb20" alt="ビジネスサポート 開業支援システム松村塾">
          </a>
      </div>
      <div class="ml20 img_link">
          <a href="/recruit.html">
              <img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/recruit_pc_03.jpg' ) ); ?>" width="" class="pc border mb20" alt="誠鋼社 求人バナー">
          </a>
      </div>
  </div>

  <div class="flexbox pc" style="margin: 0 auto;">
      <div style="background-color: #A7A7A7;" class="mr20">
      <h3 style="background-color: #000000;" class="pc img_link">
          <p style="text-align: center; color: #FFFFFF; padding: 10px; font-weight: bold;">プロ専用商材ネット</p>
      </h3>
      <div class="img_link"><a href="https://seikosha-webshop.com/" target="_blank"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/3_column_webshop.jpg' ) ); ?>" width="" class="pc " alt="Bカートバナー"></a></div>
      </div>
      <div style="background-color: #A7A7A7;" class="mr20">
      <h3 style="background-color: #000000;" class="pc">
          <p style="text-align: center; color: #FFFFFF; padding: 10px; font-weight: bold;">OEM開発依頼</p>
      </h3>
      <div class="img_link"><a href="/products/oem/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/3_column_oem.jpg' ) ); ?>" width="" class="pc" alt="Bカートバナー"></a></div>
      </div>
      <div style="background-color: #A7A7A7;">
      <h3 style="background-color: #000000;" class="pc">
          <p style="text-align: center; color: #FFFFFF; padding: 10px; font-weight: bold;">セミナー 一覧</p>
      </h3>
      <div class="img_link"><a href="/seminar/"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/3_column_seminar.jpg' ) ); ?>" width="" class="pc" alt="セミナーバナー"></a></div>
      </div>
  </div>
</div>
<!-- /wp:group -->