<header id="header">
    <div class="inner">
        <div class="logo">
            <a href="<?php echo home_url(); ?>">
            </a>
        </div>
        <div id="hamburger">
            <div class="line-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="smartphone">
            <nav id="navi" class="navi" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <div id="navi-in" class="navi-in">
                    <?php
                    wp_nav_menu(array(
                        //カスタムメニュー名
                        'theme_location' => 'header-navi',
                        //コンテナを表示しない
                        'container' => false,
                        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
                        'fallback_cb' => false,
                        //出力されるulに対して idや classを表示しない
                        'items_wrap' => '<ul class="navi">%3$s</ul>',
                    ));
                    ?>
                </div>
                <!--/#navi-in-->
            </nav>
        </div>
        <div class="computer">
            <nav id="navi" class="navi" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
                <div id="navi-in" class="navi-in">
                    <?php
                    wp_nav_menu(array(
                        //カスタムメニュー名
                        'theme_location' => 'header-navi',
                        //コンテナを表示しない
                        'container' => false,
                        //カスタムメニューを設定しない際に固定ページでメニューを作成しない
                        'fallback_cb' => false,
                        //出力されるulに対して idや classを表示しない
                        'items_wrap' => '<ul class="navi">%3$s</ul>',
                    ));
                    ?>
                </div>
                <!--/#navi-in-->
            </nav>
        </div>
        <div class="header-icons">
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_login.svg"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_line.svg"></a>
            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/icon_contact.svg"></a>
        </div>
    </div>
</header>
<div id="fixed">
    <div class="primary">
        <a href="#">
            <p>X</p>
        </a>
    </div>
</div>