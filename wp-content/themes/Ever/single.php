<?php get_header(); ?>
<section class="block_privacy">
    <div class="contents">
        <h1><?php echo get_the_title(); ?></h1>
        <div class="txtarea">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>