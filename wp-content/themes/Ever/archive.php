<?php get_header(); ?>
<?php
$args = array(
    'post_type' => 'post',
    'post_status'   => 'publish',
    'posts_per_page'    => -1,
);
$query = new WP_Query($args);
$terms = get_queried_object();
?>
<?php $banner_archive = get_field('banner_archive', 'option'); ?>
<section class="block_banner">
    <div class="title">
        <h1><?php echo $terms->name ?></h1>
    </div>

    <div class="banner">
        <div class="d-none d-lg-block">
            <a href="<?php echo !empty($banner_archive['link']['url']) ? $banner_archive['link']['url'] : '#' ?>">
                <img src="<?php echo !empty($banner_archive['banner_mb']) ? $banner_archive['banner_mb']['url'] : get_stylesheet_directory_uri().'/assets/img/banner_product.jpg' ?>" alt="">
            </a>
        </div>
        <div class="d-lg-none">
            <a href="<?php echo !empty($banner_archive['link']['url']) ? $banner_archive['link']['url'] : '#' ?>">
                <img src="<?php echo !empty($banner_archive['banner_pc']) ? $banner_archive['banner_pc']['url'] : get_stylesheet_directory_uri().'/assets/img/banner_product.jpg' ?>" alt="">
            </a>
        </div>

        <div class="content">
            <div class="main"><?php echo $terms->name ?></div>
        </div>
    </div>
</section>

<div class="block_product">
    <div class="title">
        <h2>POST</h2>
        <span class="line sline view"></span>
    </div>
    <?php
    if ($query->have_posts()) { ?>
        <div class="products_slide">
            <div class="row">
                <?php
                while ($query->have_posts()) {
                    $query->the_post();
                ?>
                    <div class="col-6 col-lg-3">
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="image">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
                            </div>
                        </a>
                        <div class="description">
                            <div class="name">
                                <a href="<?php echo get_permalink(); ?>">
                                    <?php echo get_the_title(); ?>
                                </a>
                            </div>
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    <?php
    } else { ?>
        <section class="block_banner">
            <div class="title">
                <h1>기사를 찾지 못했습니다</h1>
            </div>
        </section>
    <?php }
    ?>
</div>

<?php get_footer(); ?>