<?php
$category = get_category();
$nav_before = '';
foreach ($category as $cate) {
    $href = '';
    if($cate['id']==2){
        $href .= 'category';
    }
    $nav_before .= '
        <li><a href="?url='.$href.'" title="'.$cate['title'].'">'.$cate['title'].'</a></li>';
}

$nav_after = '';
foreach ($category as $cate) {
    $nav_after .= '
        <div class="site-top__block">
            <h2>
                <a href="#" title="'.$cate['title'].'">'.$cate['title'].'</a>
            </h2>
            <ul>';
    $subcategory = get_subcategory($cate['id']);
    foreach ($subcategory as $subcate) {
        $nav_after .= '
            <li>
                <a href="#" title="'.$subcate['title'].'">'.$subcate['title'].'</a>
            </li>';    
    }
    $nav_after .='</ul>                   
    </div>';
}
// disconnect_db();
?>
<script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(function () {
            var $button_menu = $('.button-menu'),
                $nav = $('#header-nav__site');
            $button_menu.click(function () {
                $(this).toggleClass('is-active');
                $nav.toggleClass('is-active');
                return false;
            });
        });
</script>
    <!-- header -->
    <header class="header">
        <!-- header top -->
        <div class="header-top">
            <h1 class="header-top__logo">
                <a title="DT&TT" href="./home.php">
                    <img src="../libs/img/logo_header.png" alt="logo_header">
                </a>
            </h1>
            <ul class="header-top__ul">
                <li>
                    <a href="#" title="Tin nổi bật"><img src="../libs/img/header_vector.png" alt="header_vector"></a>
                </li>
                <li><a href="#" title="Biểu tình lan ra tại Mỹ"># Biểu tình lan ra tại Mỹ</a></li>
                <li><a href="#" title="Nhân sự,Đại hội Đảng các cấp"># Nhân sự,Đại hội Đảng các cấp</a></li>
                <li><a href="#" title="Dịch Covid19"># Dịch Covid19</a></li>
            </ul>
        </div>
        <div class="header-nav">
            <!-- nav before -->
            <nav class="header-nav__ul">
                <!-- ul -->
                <ul>
                    <li>
                        <a href="#" title="TRANG CHỦ">
                            <img class="header-nav__img1" src="../libs/img/logo_home.png" alt="logo_home">
                        </a>
                        <a class="header-nav__home" href="#" title="TRANG CHỦ">TRANG CHỦ</a>
                    </li>
                    <?php
                        echo $nav_before;
                    ?>
                    <li><a href="#" title="VIDEO">VIDEO</a></li>
                    <li>
                        <a href="#" title="TÌM KIẾM">
                            <img class="header-nav__img2" src="../libs/img/header_search.png" alt="">
                        </a>
                    </li>
                </ul>
                <!-- button menu-->
                <div class="button-menu">
                    <img src="../libs/img/header_menu.png" alt="">
                    <div class="button-menu__close">
                        <div class="button-menu__close-1"></div>
                        <div class="button-menu__close-2"></div>
                    </div>
                </div>
            </nav>
            <!-- nav after -->
            <nav id="header-nav__site">
                <div class="header-nav__site-content">
                    <!-- nav after top -->
                    <div class="header-nav__site-top">
                        <?php
                            echo $nav_after;
                        ?>
                    </div>
                    <!-- nav after bottom -->
                    <div class="header-nav__site-bottom">
                        <div class="site-bottom__block">
                            <div class="site-content__block-icon">
                                <img src="../libs/img/nar_after_1.png" alt="">
                            </div>
                            <h2>
                                <a href="#" title="VIDEO">VIDEO</a>
                            </h2>
                        </div>
                        <div class="site-bottom__block">
                            <div class="site-content__block-icon">
                                <img src="../libs/img/nav_after_2.png" alt="">
                            </div>
                            <h2>
                                <a href="#" title="ẢNH">ẢNH</a>
                            </h2>
                        </div>
                        <div class="site-bottom__block">
                            <div class="site-content__block-icon">
                                <img src="../libs/img/nav_after_3.png" alt="">
                            </div>
                            <h2>
                                <a href="#" title="INFOGRAPHIC">INFOGRAPHIC</a>
                            </h2>
                        </div>
                        <div class="site-bottom__block">
                            <div class="site-content__block-icon">
                                <img src="../libs/img/nav_after_4.png" alt="">
                            </div>
                            <h2>
                                <a href="#" title="EMAGAZINE">EMAGAZINE</a>
                            </h2>
                        </div>
                        <div class="site-bottom__block">
                            <div class="site-content__block-icon">
                                <img src="../libs/img/nav_after_5.png" alt="">
                            </div>
                            <h2>
                                <a href="#" title="TẠP CHÍ IN">TẠP CHÍ IN</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>