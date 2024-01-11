<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;300;400;500;700&display=swap" rel="stylesheet" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <?php 
        $header = get_field('header', 'option');
        ?>
        <nav class="main-menu navbar navbar-expand-lg navbar-light bg-light justify-content-between align-items-center">
            <a class="navbar-brand" href="#">
                <img src="<?php echo !empty($header['logo']) ? $header['logo']['url'] : get_stylesheet_directory_uri().'/assets/img/everjoy_logo1.png' ?>" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse menu-custom" id="navbarNav">
                <?php ever_menu('main-menu', 'navbar-nav menu') ?>
                <!-- <ul id="menu-main-menu" class="navbar-nav menu">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="brandDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            브랜드
                        </a>
                        <div class="dropdown-menu" aria-labelledby="brandDropdown">
                            <a class="dropdown-item" href="/brand?section=1">목공의 마음</a>
                            <a class="dropdown-item" href="/brand?section=2">목공의 전문성</a>
                            <a class="dropdown-item" href="/brand?section=3">온열 목공간</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            전체상품
                        </a>
                        <div class="dropdown-menu" aria-labelledby="productsDropdown">
                            <a class="dropdown-item" href="/product/list.html?cate_no=130">족욕기</a>
                            <a class="dropdown-item" href="/product/list.html?cate_no=131">반신욕기</a>
                            <a class="dropdown-item" href="/product/list.html?cate_no=132">홈사우나</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/board/gallery/list.html?board_no=8">이벤트</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/board/faq/list.html?board_no=27">고객센터</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="communityDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            커뮤니티
                        </a>
                        <div class="dropdown-menu" aria-labelledby="communityDropdown">
                            <a class="dropdown-item" href="/board/review/gallery.html">사용후기</a>
                            <a class="dropdown-item" href="/journal">월간저널</a>
                        </div>
                    </li>
                </ul> -->
            </div>

            <?php 
            if(!empty($header['list_icon'])){
                echo '<ul class="navbar-nav icon_header d-none d-lg-flex">';
                    foreach($header['list_icon'] as $icon){ ?>
                            <li>
                                <a href="<?php echo !empty($icon['link']['url']) ? $icon['link']['url'] : '' ?>">
                                    <img src="<?php echo !empty($icon['icon']) ? $icon['icon']['url'] : '' ?>" alt="" />
                                </a>
                            </li>
                    <?php
                       
                    }
                echo '</div>';
            }
            ?>
        </nav>
    </header>
    <main>