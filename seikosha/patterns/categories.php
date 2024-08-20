
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

<!-- wp:group -->
<div class="wp-block-group list-categories">
<!-- wp:paragraph {"align":"center"} --><span class="category_text">あなたはどのカテゴリー商品をお探しですか？</span><!-- /wp:paragraph -->
<!-- wp:group -->
<div class="wp-block-group flexbox list-category-images fw700">
<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:image {"id":66,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large">
<a href="category/medical.html" target="_blank"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/section_01.jpg' ) ); ?>" alt="Medical Beauty" class="wp-image-66"/></a></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"align":"center"} --><span class="category-image-title text-medical">MEDICAL</span><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:image {"id":67,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large">
<a href="category/beauty.html" target="_blank"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/section_03.jpg' ) ); ?>" alt="Esthetic Beauty" class="wp-image-67"/></a></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"align":"center"} --><span class="category-image-title text-beauty">AESTHETIC</span><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group -->
<div class="wp-block-group">
<!-- wp:image {"id":68,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large">
<a href="category/physio.html" target="_blank"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/top/section_02.jpg' ) ); ?>" alt="Physio Sports" class="wp-image-68"/></a></figure>
<!-- /wp:image -->
<!-- wp:paragraph {"align":"center"} --><span class="category-image-title text-physio">PHYSIO Sports</span><!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
