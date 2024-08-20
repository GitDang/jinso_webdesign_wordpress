
<?php
/**
 * Title: Category
 * 
 * Slug: themeslug/categories
 * Categories: featured
 *
 * @package Base Theme
 * @since 1.0.0
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<section id="category" class="">
    <div class="inner">
    <p class="category_text">あなたはどのカテゴリー商品をお探しですか？</p>
    <div class="box3">
        <ul class="gothic fw700">
        <li><a href="category/medical.html"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/section_01.jpg' ) ); ?>" alt="Medical Beauty">
            <p style="background-color: #37A09C;">MEDICAL</p>
            </a></li>
        <li><a href="category/beauty.html"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/section_03.jpg' ) ); ?>" alt="Esthetic Beauty">
            <p style="background-color: #E66D6E;">AESTHETIC</p>
            </a></li>
        <li><a href="category/physio.html"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/section_02.jpg' ) ); ?>" alt="Physio Sports">
            <p style="background-color: #012569;">PHYSIO Sports</p>
            </a></li>
        </ul>
    </div>
    </div>
</section>
</div>
<!-- /wp:group -->
