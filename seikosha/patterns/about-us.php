<?php

/**
 * Title: About Us
 * 
 * Slug: themeslug/about-us
 * Categories: home-page
 *
 * @package Base Theme
 * @since 1.0.0
 */
?>

<!-- wp:group -->
<div class="wp-block-group block-about-us">
    <!-- wp:group -->
    <div class="wp-block-group block-about-us-over-inner">
        <!-- wp:image -->
        <figure class="wp-block-image">
            <a href="https://seikosha-webshop.com/" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/about_us/bg_company.png')); ?>" /></a>
        </figure>
        <!-- /wp:image -->
        <!-- wp:group -->
        <div class="wp-block-group project">
            <!-- wp:paragraph {"align":"center"} -->
            <h2><span>About us</span><br>誠鋼社について
            </h2><!-- /wp:paragraph -->
            <!-- wp:button -->
            <div class="wp-block-button">
                <a class="wp-block-button__link" href="company/enthusiasm.html" target="_blank">製品開発への思い</a>
            </div>
            <!-- /wp:button -->
            <!-- wp:button -->
            <div class="wp-block-button">
                <a class="wp-block-button__link" href="company/product_history.html" target="_blank">製品開発の歴史</a>
            </div>
            <!-- /wp:button -->
            <!-- wp:button -->
            <div class="wp-block-button">
                <a class="wp-block-button__link" href="company/evidence.html" target="_blank">学会発表・エビデンス</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group -->
    <div class="wp-block-group block-about-us-inner">
        <!-- wp:group -->
        <div class="wp-block-group block-about-us-company">
            <!-- wp:group -->
            <div class="wp-block-group company-item">
                <!-- wp:image -->
                <figure class="wp-block-image">
                    <a href="company/index.html" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/about_us/icon_01.png')); ?>" /></a>
                </figure>
                <!-- /wp:image -->
                <!-- wp:paragraph {"align":"center"} -->
                <p class="item-txt">Company</p><!-- /wp:paragraph -->
                <!-- wp:paragraph {"align":"center"} -->
                <span class="item-txt-sub">会社概要</span><!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            <!-- wp:group -->
            <div class="wp-block-group company-item">
                <!-- wp:image -->
                <figure class="wp-block-image">
                    <a href="company/concept.html" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/about_us/icon_02.png')); ?>" /></a>
                </figure>
                <!-- /wp:image -->
                <!-- wp:paragraph {"align":"center"} -->
                <p class="item-txt">Concept</p><!-- /wp:paragraph -->
                <!-- wp:paragraph {"align":"center"} -->
                <span class="item-txt-sub">誠鋼社の概念</span><!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            <!-- wp:group -->
            <div class="wp-block-group company-item">
                <!-- wp:image -->
                <figure class="wp-block-image">
                    <a href="company/history.html" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/about_us/icon_03.png')); ?>" /></a>
                </figure>
                <!-- /wp:image -->
                <!-- wp:paragraph {"align":"center"} -->
                <p class="item-txt">History</p><!-- /wp:paragraph -->
                <!-- wp:paragraph {"align":"center"} -->
                <span class="item-txt-sub">誠鋼社の沿革</span><!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
            <!-- wp:group -->
            <div class="wp-block-group company-item">
                <!-- wp:image -->
                <figure class="wp-block-image">
                    <a href="company/records.html" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/about_us/icon_04.png')); ?>" /></a>
                </figure>
                <!-- /wp:image -->
                <!-- wp:paragraph {"align":"center"} -->
                <p class="item-txt">Records</p><!-- /wp:paragraph -->
                <!-- wp:paragraph {"align":"center"} -->
                <span class="item-txt-sub">実績・授賞式</span><!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group -->
        <div class="wp-block-group block-about-us-company2">
            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column {"width":"45%"} -->
                <div class="wp-block-column" style="flex-basis:45%">
                    <!-- wp:image -->
                    <figure class="wp-block-image">
                        <a href="/" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/about_us/logo_head.png')); ?>" /></a>
                    </figure>
                    <!-- /wp:image -->
                    <!-- wp:paragraph -->
                    <p class="company-info-txt">
                        <strong>株式会社 誠鋼社</strong><br>
                        <span class="s_dt">ADD</span>〒101-0061　<br class="sp">
                        東京都千代田区神田三崎町2-7-6 浅見ビル3F<br>
                        2F : OPTIMUS STUDIO<span class="reg">&reg;</span><span style="color: #AB0002"> <strong>※お客様は2階へお越しください。</strong></span><br>
                        <span class="s_dt">TEL</span><a href="tel:0332341039">03-3234-1039</a><br>
                        <span class="s_dt">ACCESS</span><br>
                        <span class="cl_soubu">●</span> 総武線／水道橋駅　東口より徒歩5分<br>
                        <span class="cl_mita">●</span> 都営三田線／水道橋駅　A2番出口より徒歩7分
                    </p>
                    <!-- /wp:paragraph -->
                    <!-- wp:html -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3239.612300071097!2d139.777132374573!3d35.71115712833149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188e98edaa35f9%3A0xcfe45b2a7f0ce9a4!2sMita%20Building%2C%203-ch%C5%8Dme-24-9%20Higashiueno%2C%20Taito%20City%2C%20Tokyo%20110-0015%2C%20Nh%E1%BA%ADt%20B%E1%BA%A3n!5e0!3m2!1svi!2s!4v1724819938321!5m2!1svi!2s"
                        style="border: solid #CBCBCB 1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- /wp:html -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"45%"} -->
                <div class="wp-block-column" style="flex-basis:45%">
                    <!-- wp:image -->
                    <figure class="wp-block-image">
                        <a href="/" target="_blank"><img src="<?php echo esc_url(get_theme_file_uri('assets/images/about_us/logo_head.png')); ?>" /></a>
                    </figure>
                    <!-- /wp:image -->
                    <!-- wp:paragraph -->
                    <p class="company-info-txt">
                        <strong>株式会社 誠鋼社 (OSAKAセミナールーム）</strong><br>
                        <span class="s_dt">ADD</span>〒542-0086　<br class="sp">
                        大阪府大阪市中央区西心斎橋1-12-11<br>
                        アーバンスタイル心斎橋406<br>
                        <span class="s_dt">ACCESS</span><br>
                        <span class="cl_beauty">●</span> 御堂筋線／心斎橋　徒歩３分<br>
                        <span class="cl_yotsu">●</span> 四つ橋線「四ツ橋」3番出口 徒歩1分
                    </p>
                    <!-- /wp:paragraph -->
                    <!-- wp:html -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.245368720664!2d135.49759771959975!3d34.67375624832102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e71a97b5dfc1%3A0xd09ab437f4f4fe20!2z44CSNTQyLTAwODYg5aSn6Ziq5bqc5aSn6Ziq5biC5Lit5aSu5Yy66KW_5b-D5paO5qmL77yR5LiB55uu77yR77yS4oiS77yR77yR!5e0!3m2!1sja!2sjp!4v1720747328916!5m2!1sja!2sjp"
                        style="border: solid #CBCBCB 1px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- /wp:html -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
        <!-- wp:group -->
        <div class="wp-block-group block-about-us-toi">
            <!-- wp:button -->
            <div class="wp-block-button">
                <a class="wp-block-button__link" href="form/contact/mailform/" target="_blank">お問い合わせ</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->