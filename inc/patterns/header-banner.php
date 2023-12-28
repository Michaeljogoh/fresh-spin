<?php 
/**
 * Default Header Banner
 */
return array(
	'title'      => esc_html__( 'Header Banner', 'freshspin-fse' ),
	'categories' => array( 'freshspin-fse', 'Header Banner' ),
	'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"0px"}},"className":"HeaderBanner","layout":{"type":"default"}} -->
<div class="wp-block-group HeaderBanner" style="min-height:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()).'/assets/images/header-banner.jpg","id":20,"dimRatio":0,"minHeight":565,"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"className":"hdrbanner-BX"} -->
<div class="wp-block-cover hdrbanner-BX" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40);min-height:565px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-20" alt="" src="'.esc_url(get_template_directory_uri()).'/assets/images/header-banner.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"className":"bannerInfo","layout":{"type":"constrained","wideSize":"1170px","justifyContent":"center","contentSize":"1170px"}} -->
<div class="wp-block-group bannerInfo" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"500","fontSize":"22px","lineHeight":"1.0"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"foreground","fontFamily":"playfair-display"} -->
<h5 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-playfair-display-font-family" style="margin-bottom:var(--wp--preset--spacing--40);font-size:22px;font-style:normal;font-weight:500;line-height:1.0;text-transform:none">The Best solution for laundry</h5>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"52px","textTransform":"none","fontStyle":"normal","fontWeight":"500","lineHeight":"1.0"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"textColor":"foreground","fontFamily":"playfair-display"} -->
<h3 class="wp-block-heading has-text-align-center has-foreground-color has-text-color has-playfair-display-font-family" style="margin-bottom:var(--wp--preset--spacing--60);font-size:52px;font-style:normal;font-weight:500;line-height:1.0;text-transform:none">We Care for the Clothes<br>You Wear</h3>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"foreground","style":{"color":{"text":"#171717"},"typography":{"fontSize":"20px","textTransform":"none","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"radius":"40px"}},"className":"is-style-fill","fontFamily":"playfair-display"} -->
<div class="wp-block-button has-custom-font-size is-style-fill has-playfair-display-font-family" style="font-size:20px;font-style:normal;font-weight:600;text-transform:none"><a class="wp-block-button__link has-foreground-background-color has-text-color has-background has-text-align-center wp-element-button" style="border-radius:40px;color:#171717;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--60)">Read More</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->',
);