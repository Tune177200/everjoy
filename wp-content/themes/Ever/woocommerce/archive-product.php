<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header('shop');

?>
<section class="block_banner">
    <div class="title">
        <h1><?php woocommerce_page_title(); ?></h1>
    </div>

    <div class="banner">
        <div class="d-none d-lg-block">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/banner_product.jpg" alt="">
            </a>
        </div>
        <div class="d-lg-none">
            <a href="">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/banner_product_sp.jpg" alt="">
            </a>
        </div>

        <div class="content">
            <div class="main"><?php woocommerce_page_title(); ?></div>
            <div class="sub">
                <?php
                /**
                 * Hook: woocommerce_archive_description.
                 *
                 * @hooked woocommerce_taxonomy_archive_description - 10
                 * @hooked woocommerce_product_archive_description - 10
                 */
                do_action('woocommerce_archive_description');
                ?>
            </div>
        </div>
    </div>
</section>

<div class="block_product">
    <div class="title">
        <h2>PRODUCT</h2>
        <span class="line sline view"></span>
    </div>


    <?php
    if (woocommerce_product_loop()) {

        /**
         * Hook: woocommerce_before_shop_loop.
         *
         * @hooked woocommerce_output_all_notices - 10
         * @hooked woocommerce_result_count - 20
         * @hooked woocommerce_catalog_ordering - 30
         */
        echo '<div class="d-flex align-items-center justify-content-between">';
        do_action('woocommerce_before_shop_loop');
        echo '</div>';
        woocommerce_product_loop_start();

        if (wc_get_loop_prop('total')) {
            while (have_posts()) {
                the_post();

                /**
                 * Hook: woocommerce_shop_loop.
                 */
                do_action('woocommerce_shop_loop');

                wc_get_template_part('content', 'product');
            }
        }

        woocommerce_product_loop_end();

        /**
         * Hook: woocommerce_after_shop_loop.
         *
         * @hooked woocommerce_pagination - 10
         */
        do_action('woocommerce_after_shop_loop');
    } else {
        /**
         * Hook: woocommerce_no_products_found.
         *
         * @hooked wc_no_products_found - 10
         */
        do_action('woocommerce_no_products_found');
    }

    /**
     * Hook: woocommerce_after_main_content.
     *
     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
     */
    do_action('woocommerce_after_main_content');

    /**
     * Hook: woocommerce_sidebar.
     *
     * @hooked woocommerce_get_sidebar - 10
     */
    do_action('woocommerce_sidebar');
    ?>
</div> <?php
        get_footer('shop');
