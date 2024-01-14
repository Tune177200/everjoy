<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<section class="block_detail_product">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="preview">
                    <?php
                    $post_thumbnail_id = wp_get_attachment_url($product->get_image_id());
                    $gallery_ids = $product->get_gallery_image_ids();
                    ?>
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper preview_slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($post_thumbnail_id) ?>" />
                            </div>
                            <?php
                            if (!empty($gallery_ids)) {
                                foreach ($gallery_ids as $gallery_id) {
                                    $image_url = wp_get_attachment_url($gallery_id); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo esc_url($image_url) ?>" />
                                    </div>

                            <?php }
                            }
                            ?>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div thumbsSlider="" class="swiper thumb_slide">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url($post_thumbnail_id) ?>" />
                            </div>
                            <?php
                            if (!empty($gallery_ids)) {
                                foreach ($gallery_ids as $gallery_id) {
                                    $image_url = wp_get_attachment_url($gallery_id); ?>
                                    <div class="swiper-slide">
                                        <img src="<?php echo esc_url($image_url) ?>" />
                                    </div>

                            <?php }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                /**
                 * Hook: woocommerce_single_product_summary.
                 *
                 * @hooked woocommerce_template_single_title - 5
                 * @hooked woocommerce_template_single_rating - 10
                 * @hooked woocommerce_template_single_price - 10
                 * @hooked woocommerce_template_single_excerpt - 20
                 * @hooked woocommerce_template_single_add_to_cart - 30
                 * @hooked woocommerce_template_single_meta - 40
                 * @hooked woocommerce_template_single_sharing - 50
                 * @hooked WC_Structured_Data::generate_product_data() - 60
                 */
                do_action('woocommerce_single_product_summary');

                $coupon = get_field('coupon');
                if (!empty($coupon['list_coupon'])) { ?>
                    <div class="swiper voucher_slider custom_swiper_pagination">
                        <div class="swiper-wrapper">
                            <?php foreach ($coupon['list_coupon'] as $itemCoupon) { ?>
                                <div class="swiper-slide">
                                    <img src="<?php echo $itemCoupon['coupon']['url'] ?>" />
                                </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                <?php }
                ?>
            </div>
        </div>
        <div class="content-product">
            <?php 
            the_content();
            ?>
        </div>
        <?php $billing_information = get_field('billing_information', 'option');
        if (!empty($billing_information['list_contact'])) { ?>
            <div class="box_info_prod">
                <div class="accordion" id="accordionExample">
                    <?php
                    foreach ($billing_information['list_contact'] as $itemKey => $itemContact) { ?>
                        <div class="card">
                            <div class="card-header" id="headingOne<?php echo $itemKey; ?>">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left collapsed toggle-button" type="button" data-toggle="collapse" data-target="#collapseOne<?php echo $itemKey; ?>" aria-expanded="true" aria-controls="collapseOne">
                                        <?php echo $itemContact['title'] ?>
                                    </button>
                                </h2>
                                <div class="title"></div>
                            </div>

                            <div id="collapseOne<?php echo $itemKey; ?>" class="collapse" aria-labelledby="headingOne<?php echo $itemKey; ?>" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?php echo $itemContact['description'] ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>

            </div>
        <?php }
        ?>

    </div>
</section>

<?php do_action('woocommerce_after_single_product'); ?>