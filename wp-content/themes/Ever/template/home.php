<?php

/**
 * Template Name: Home
 */
?>
<?php get_header(); ?>
<?php
$groups_banner = get_field('groups_banner');
if (!empty($groups_banner['list_banner'])) {
?>
    <section>
        <div class="swiper main_slide" id="main_slide">
            <div class="swiper-wrapper">
                <?php
                foreach ($groups_banner['list_banner'] as $itemBanner) { ?>
                    <div class="swiper-slide">
                        <a>
                            <img class="d-none d-md-block" src="<?php echo $itemBanner['banner']['url'] ?>" alt="" />
                            <img class="d-md-none" src="<?php echo $itemBanner['banner_mobile']['url'] ?>" alt="" />
                        </a>
                        <div class="content left top">
                            <div class="title"></div>
                            <div class="main"><?php echo $itemBanner['title'] ?></div>
                            <div class="sub"><?php echo $itemBanner['description'] ?><br /></div>
                            <div class="button wrap_more">
                                <a href="<?php echo !empty($itemBanner['link']['url']) ? $itemBanner['link']['url'] : '#' ?>"><?php echo !empty($itemBanner['link']['title']) ? $itemBanner['link']['title'] : '제품보러가기' ?></a>
                            </div>
                        </div>
                    </div>
                <?php }
                ?>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
<?php } ?>
<?php $groups_category = get_field('groups_category'); ?>
<!-- Type -->
<section class="block_type">
    <div class="title">
        <h2><?php echo !empty($groups_category['title']) ? $groups_category['title'] : '카테고리' ?></h2>
        <span class="line sline view"></span>
    </div>
    <?php
    if (!empty($groups_category['list_category'])) { ?>
        <div class="swiper custom_swiper_pagination list_slide">
            <div class="swiper-wrapper">
                <?php foreach ($groups_category['list_category'] as $itemCat) { ?>
                    <div class="swiper-slide">
                        <a href="<?php echo !empty($itemCat['link']['url']) ? $itemCat['link']['url'] : '#' ?>">
                            <img src="<?php echo $itemCat['banner']['url'] ?>" alt="" />
                        </a>
                        <span class="main"><?php echo $itemCat['title'] ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php }
    ?>
</section>
<?php $groups_benefit = get_field('groups_benefit'); ?>
<!-- Benefit -->
<section class="block_benefit">
    <div class="title">
        <h2><?php echo !empty($groups_benefit['title']) ? $groups_benefit['title'] : '쇼핑혜택' ?></h2>
        <span class="line sline view"></span>
    </div>
    <?php if (!empty($groups_benefit['list_benefit'])) { ?>
        <div class="swiper custom_swiper_pagination benefit_slide">
            <div class="swiper-wrapper">
                <?php foreach ($groups_benefit['list_benefit'] as $itemBenefit) { ?>
                    <div class="swiper-slide">
                        <a href="<?php echo !empty($itemBenefit['link']['url']) ? $itemBenefit['link']['url'] : '#' ?>">
                            <img src="<?php echo $itemBenefit['image']['url'] ?>" />
                        </a>
                    </div>
                <?php } ?>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    <?php } ?>
</section>
<?php $groups_bestchoice = get_field('groups_bestchoice'); ?>
<!-- Best Choice -->
<section class="block_bestchoice">
    <div class="title">
        <h2><?php echo !empty($groups_bestchoice['title']) ? $groups_bestchoice['title'] : '베스트 랭킹' ?></h2>
        <span class="line sline view"></span>
    </div>
    <div class="swiper bestchoice_slide">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bestchoice1.jpg" alt="브랜드쿠폰" />
                </a>
                <div class="description">
                    <div class="name">
                        <a href=""> [4차 예약판매] 온목(ONMOK) 건식 반신욕기 좌식사우나 (2/5~ 순차배송) </a>
                    </div>
                    <div class="price">959,000원 <span>1,390,000원</span></div>
                </div>
            </div>
            <div class="swiper-slide">
                <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bestchoice4.jpg" alt="브랜드쿠폰" />
                </a>
                <div class="description">
                    <div class="name">
                        <a href=""> [4차 예약판매] 온목(ONMOK) 건식 반신욕기 좌식사우나 (2/5~ 순차배송) </a>
                    </div>
                    <div class="price">959,000원 <span>1,390,000원</span></div>
                </div>
            </div>
            <div class="swiper-slide">
                <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bestchoice2.jpg" alt="브랜드쿠폰" />
                </a>
                <div class="description">
                    <div class="name">
                        <a href=""> [4차 예약판매] 온목(ONMOK) 건식 반신욕기 좌식사우나 (2/5~ 순차배송) </a>
                    </div>
                    <div class="price">959,000원 <span>1,390,000원</span></div>
                </div>
            </div>
            <div class="swiper-slide">
                <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bestchoice1.jpg" alt="브랜드쿠폰" />
                </a>
                <div class="description">
                    <div class="name">
                        <a href=""> [4차 예약판매] 온목(ONMOK) 건식 반신욕기 좌식사우나 (2/5~ 순차배송) </a>
                    </div>
                    <div class="price">959,000원 <span>1,390,000원</span></div>
                </div>
            </div>
            <div class="swiper-slide">
                <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bestchoice3.jpg" alt="브랜드쿠폰" />
                </a>
                <div class="description">
                    <div class="name">
                        <a href=""> [4차 예약판매] 온목(ONMOK) 건식 반신욕기 좌식사우나 (2/5~ 순차배송) </a>
                    </div>
                    <div class="price">959,000원 <span>1,390,000원</span></div>
                </div>
            </div>
            <div class="swiper-slide">
                <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bestchoice4.jpg" alt="브랜드쿠폰" />
                </a>
                <div class="description">
                    <div class="name">
                        <a href=""> [4차 예약판매] 온목(ONMOK) 건식 반신욕기 좌식사우나 (2/5~ 순차배송) </a>
                    </div>
                    <div class="price">959,000원 <span>1,390,000원</span></div>
                </div>
            </div>
            <div class="swiper-slide">
                <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bestchoice2.jpg" alt="브랜드쿠폰" />
                </a>
                <div class="description">
                    <div class="name">
                        <a href=""> [4차 예약판매] 온목(ONMOK) 건식 반신욕기 좌식사우나 (2/5~ 순차배송) </a>
                    </div>
                    <div class="price">959,000원 <span>1,390,000원</span></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $groups_story = get_field('groups_story'); ?>
<!-- Story -->
<section class="block_story">
    <div id="parallax" class="area"></div>
    <div class="title">
        <h2><?php echo !empty($groups_story['title']) ? $groups_story['title'] : '브랜드 스토리' ?></h2>
        <span class="line sline view"></span>
    </div>
    <div class="brand_story d-lg-flex">
        <div class="img">
            <img src="<?php echo !empty($groups_story['image']) ? $groups_story['image']['url'] : get_stylesheet_directory_uri() . '/assets/img/Brand_Story.jpg' ?>">
        </div>
        <div class="txt">
            <h3><?php echo !empty($groups_story['sub_title']) ? $groups_story['sub_title'] : '타협하지 않는 목공의 마음' ?></h3>
            <p>
                <?php echo !empty($groups_story['description']) ? $groups_story['description'] : '' ?>
            </p>
            <a href="<?php echo !empty($groups_story['link_button']['url']) ? $groups_story['link_button']['url'] : '#' ?>" class="btn_black"> <?php echo !empty($groups_story['title_button']) ? $groups_story['title_button'] : '더 알아보기' ?> </a>
        </div>
    </div>
</section>
<?php $groups_review = get_field('groups_review'); ?>
<section class="block_review">
    <div class="title">
        <h2><?php echo !empty($groups_review['title']) ? $groups_review['title'] : '리뷰' ?></h2>
        <span class="line sline view"></span>
    </div>
    <div class="filter text-right">
        <select name="soft" id="soft">
            <option value="audi">최신 리뷰순</option>
            <option value="saab">리뷰 평점순</option>
            <option value="mercedes">리뷰 추천순</option>
        </select>
    </div>
    <?php if (!empty($groups_review['list_review'])) { ?>
        <div class="row">
            <?php
            foreach ($groups_review['list_review'] as $itemReview) { ?>
                <?php
                $product_review = get_field('product_review', $itemReview);
                $thumbnail = get_the_post_thumbnail_url($itemReview);
                $title = get_the_title($itemReview);
                $places = get_field('places', $itemReview);
                $count_review = get_field('count_review', $itemReview);
                $titleProduct = $product_review->post_title;
                $thumbnailProduct = get_the_post_thumbnail_url($product_review);
                $nameReview = get_field('name_review', $itemReview);
                $linkProduct = get_permalink($itemReview);
                ?>
                <div class="col-6 col-lg-3">
                    <div class="box_review" data-toggle="modal" data-target="#image_zoom">
                        <div class="image">
                            <img src="<?php echo $thumbnail ?>" alt="" />
                        </div>
                        <div class="detail_review">
                            <div class="review_count">
                                <span class="star pin_custom_font_color">★★★★★</span>
                            </div>
                            <div class="review_text">
                                <p>
                                    <?php echo $title ?>
                                </p>
                            </div>
                            <div class="name_reviewer"><?php echo $nameReview ?></div>
                        </div>
                        <div class="box_review_sub d-flex">
                            <div class="image">
                                <a href="<?php echo $linkProduct ?>"><img src="<?php echo $thumbnailProduct ?>" alt="" /></a>
                            </div>
                            <div class="txt">
                                <p><?php echo $titleProduct ?></p>
                                <div class="rating d-flex">
                                    <div class="item_rating">
                                        <p class="value_text">
                                            평점
                                            <span class="value"><?php echo $places ?></span>
                                        </p>
                                    </div>
                                    <div class="rating_count">
                                        <p class="value_text">
                                            리뷰
                                            <span class="value"><?php echo $count_review ?></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    <?php } ?>
    
</section>
<?php get_footer(); ?>