<?php wp_footer(); ?>
</main>
<?php
$footer_infor = get_field('footer_infor', 'option');
$footer_order = get_field('footer_order', 'option');
$footer_bank = get_field('footer_bank', 'option');
$footer_company = get_field('footer_company', 'option');
$footer_copy_right = get_field('footer_copy_right', 'option');

?>
<footer>
    <div class="block_footer">
        <div class="row">
            <div class="col-lg-3">
                <div class="title"><?php echo !empty($footer_infor['title_column']) ? $footer_infor['title_column'] : 'INFO' ?></div>
                <?php
                if (!empty($footer_infor['list_link'])) {
                    echo '<div class="contents">';
                    foreach ($footer_infor['list_link'] as $itemLink) { ?>
                        <div>
                            <a href="<?php echo !empty($itemLink['link_item']['url']) ? $itemLink['link_item']['url'] : '#' ?>"><?php echo !empty($itemLink['link_item']['title']) ? $itemLink['link_item']['title'] : '' ?></a>
                        </div>
                <?php }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-lg-3">
                <div class="title"><?php echo !empty($footer_order['title_column']) ? $footer_order['title_column'] : '전화주문' ?></div>
                <div class="contents">
                    <div class="call"><?php echo !empty($footer_order['hotline']) ? $footer_order['hotline'] : '' ?></div>
                    <div class="time"><?php echo !empty($footer_order['time']) ? $footer_order['time'] : '' ?></div>
                    <div class="lunch"><?php echo !empty($footer_order['lunch']) ? $footer_order['lunch'] : '' ?></div>
                    <div class="off"><?php echo !empty($footer_order['off']) ? $footer_order['off'] : '' ?></div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="title"><?php echo !empty($footer_bank['title_column']) ? $footer_bank['title_column'] : 'BANK' ?></div>
                <?php
                if (!empty($footer_bank['list_bank'])) {
                    echo '<div class="contents">';
                    foreach ($footer_bank['list_bank'] as $itemBank) { ?>
                        <div>
                            <?php echo !empty($itemBank['bank']) ? $itemBank['bank'] : '' ?>
                        </div>
                <?php }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-lg-3">
                <div class="title"><?php echo !empty($footer_company['title_column']) ? $footer_company['title_column'] : 'COMPANY' ?></div>
                <div class="contents">
                    <div class="company"><?php echo !empty($footer_company['name_company']) ? $footer_company['name_company'] : '주식회사 에버조이' ?></div>
                    <?php
                    if (!empty($footer_company['list_contact'])) {
                        echo '<div class="contents">';
                        foreach ($footer_company['list_contact'] as $itemContact) { ?>
                            <div>
                                <?php echo !empty($itemContact['contact']) ? $itemContact['contact'] : '' ?>
                            </div>
                    <?php }
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <?php
        if (!empty($footer_copy_right['list_coppy_right'])) {
            echo '<div class="cpr_area">';
            foreach ($footer_copy_right['list_coppy_right'] as $itemCPR) { ?>
                <div class="copy">
                    <?php echo !empty($itemCPR['coppy_right']) ? $itemCPR['coppy_right'] : '' ?>
                </div>
        <?php }
            echo '</div>';
        }
        ?>
    </div>
</footer>
</body>

</html>