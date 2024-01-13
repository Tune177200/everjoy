<?php get_header(); ?>
<?php 
$args = array(
    'post_type' => 'product',
    's' => $_GET['s'],
    'post_status'   => 'publish',
    'search_columns' => 'post_title',
);
$query = new WP_Query($args);

if($query->have_posts()){
    while($query->have_posts()){
        $query->the_post();

        echo get_the_title();
    }
}else{
    echo 'không có bài';
}
?>
<?php get_footer(); ?>