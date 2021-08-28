<?php
$post_hll = get_hightlightleft();
$wrapper_top__left = '';
foreach ($post_hll as $item) {
    $id = $item['FK_category'];
    $sql = "select * from category where id = $id";

    $category_id = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($category_id);

    $wrapper_top__left .= '
        <div class="left-cell">
            <div class="cell_title">
                <a href="#" title="' . $row['title'] . '">
                    ' . $row['title'] . '
                </a>
            </div>
            <div class="left-cell__content">
                <a href="#" title="' . $item['title'] . '">
                ' . $item['title'] . '
                </a>
            </div>
        </div>
    ';
}

$post_hl = get_hightlight();
$wrapper_top__center = '';
foreach ($post_hl as $item) {
    // get category for post in hightlight
    $id = $item['FK_category'];
    $sql = "select * from category where id = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    // get image for post in hightlight
    $id = $item['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/';
    $url .= $img['imgurl'];

    $wrapper_top__center = '
            <a href="#" title="' . $item['title'] . '">
                <img src="' . $url . '" alt="">
            </a>
            <div class="wrapper-top__center-content">
                <div class="cell_title">
                    <a href="#" title="' . $row['title'] . '">
                        ' . $row['title'] . '
                    </a>
                </div>

                <div class="wrapper-top__center-title">
                    <a href="#" title="' . $item['title'] . '">
                        ' . $item['title'] . '
                    </a>
                </div>
                <div class="wrapper-top__center-news">
                    ' . $item['brief'] . '
                </div>
            </div>
    ';
}

$post_hlr = get_hightlightright();
$wrapper_top__right = '';
foreach ($post_hlr as $item) {
    // get category for post in hightlightright
    $id = $item['FK_category'];
    $sql = "select * from category where id = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    // get image for post in hightlight
    $id = $item['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/';
    $url .= $img['imgurl'];

    $wrapper_top__right .= '
        <div class="right-cell">
                <div class="right-cell__title">
                    <a href="#" title="' . $item['title'] . '">
                        ' . $item['title'] . '
                    </a>
                </div>
                <div class="right-cell__content">
                    <a href="#" title="' . $item['title'] . '">
                        <img src="' . $url . '" alt="">
                    </a>
                    <div class="right-cell__news">
                        <div class="cell_title">
                            <a href="#" title="' . $row['title'] . '">
                                ' . $row['title'] . '
                            </a>
                        </div>
                        <div class="right-cell__news-a">
                            ' . $item['brief'] . '
                        </div>

                    </div>
                </div>
        </div>
    ';
}

$post_mr = get_marketingnews();
$mr = '';
foreach ($post_mr as $item) {
    $id = $item['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/';
    $url .= $img['imgurl'];

    $mr .= '
        <div class="marketing-content__block">
            <a href="#" title="' . $item['title'] . '">
                <img src="' . $url . '" alt="">
            </a>
            <div class="marketing-content__block-text">
                <h2>
                    <a href="#" title="' . $item['title'] . '">
                        ' . $item['title'] . '
                    </a>
                </h2>
            </div>
        </div>

    ';
}

$post_mainnews1 = get_mainnews1();
$social = '';
foreach ($post_mainnews1 as $item) {
    $id = $item['FK_category'];
    $sql = "select * from category where id = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    $id = $item['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/';
    $url .= $img['imgurl'];

    $social .= '
        <div class="social-block">
            <div class="social-block__content">
                <div class="social-block__content-img">
                    <a href="#" title="' . $item['title'] . '">
                        <img src="' . $url . '" alt="">
                    </a>
                </div>
                <div class="social__news">
                    <div class="social__news-title">
                        <a href="#" title="' . $item['title'] . '">
                            <h2>
                                ' . $item['title'] . '
                            </h2>
                        </a>
                    </div>
                    <div class="cell_title">
                        <a href="#" title="' . $row['title'] . '">
                            ' . $row['title'] . '
                        </a>
                    </div>

                    <div class="social__news-content">
                        ' . $item['brief'] . '
                    </div>
                </div>
            </div>
            <div class="social-line"></div>
        </div>
    ';
}

$post_emagazine = get_emagazine();
$emagazine = '';
foreach ($post_emagazine as $item) {
    $id = $item['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/';
    $url .= $img['imgurl'];
    $emagazine .= '
        <div class="block__normal-form">
            <div class="card">
                <a href="#" title="' . $item['title'] . '">
                    <img src="' . $url . '" alt="">
                    <span class="card__background">
                        <img src="../libs/img/magazine_normal_111.png" alt="">
                        <span class="card__title">
                            <img src="../libs/img/magazine_normal_11.png" alt="">
                        </span>
                    </span>
                </a>

            </div>
            <div class="block__normal-content">
                <h2>
                    <a href="#" title="' . $item['title'] . '">
                        ' . $item['title'] . '
                    </a>
                </h2>
            </div>
        </div>
    ';
}

$post_mostreading = get_mostreading();
$mostreading = '';
for ($i= 0; $i<5; $i++) {
    $id = $post_mostreading[$i]['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/';
    $url .= $img['imgurl'];

    $num = $i + 1;
    $mostreading .= '
        <div class="interest-block">
            <div class="number">'.$num.'. </div>
            <a href="#" title="' . $post_mostreading[$i]['title'] . '">
                ' . $post_mostreading[$i]['title'] . '
            </a>
            <a class="interest-block__img" href="#" title="' . $post_mostreading[$i]['title'] . '">
                <img src="' . $url . '">
            </a>
        </div>
    ';
}

$post_mainnews2 = get_mainnews2();
$mainnews2 = '';
foreach ($post_mainnews2 as $item) {
    $id = $item['FK_category'];
    $sql = "select * from category where id = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    $id = $item['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/';
    $url .= $img['imgurl'];
    $mainnews2 .= '
        <div class="social-block">
            <div class="social-block__content">
                <div class="social-block__content-img">
                    <a href="#" title="' . $item['title'] . '">
                        <img src="' . $url . '" alt="">
                    </a>
                </div>
                <div class="social__news">
                    <div class="social__news-title">
                        <a href="#" title="' . $item['title'] . '">
                            <h2>
                                ' . $item['title'] . '
                            </h2>
                        </a>
                    </div>
                    <div class="cell_title">
                        <a href="#" title="' . $row['title'] . '">
                            ' . $row['title'] . '
                        </a>
                    </div>

                    <div class="social__news-content">
                        ' . $item['brief'] . '
                    </div>
                </div>
            </div>
            <div class="social-line"></div>
        </div>
    ';
}

$video_left = '';
$sql = "select post.* from post, video where post.id = video.FK_post";
$query = mysqli_query($conn, $sql);
$result = mysqli_fetch_array($query);

$id = $result['id'];
$sql = "select * from image where FK_post = $id";
$query = mysqli_query($conn, $sql);
$img = mysqli_fetch_array($query);

$url = '../libs/img/video_left/';
$url .= $img['imgurl'];
$video_left .= '
                <div class="video-bottom__left">
                    <div class="video-bottom__left-img">
                        <a href="#" title="' . $result['title'] . '">
                            <div class="left-img__video">
                                <img src="' . $url . '">
                                <span class="left-img__video-background">
                                    <img src="../libs/img/video_left/Group 7.png">
                                </span>
                                <span class="left-img__video-time">
                                    03:20
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="video-bottom__left-text">
                        <h2>
                            <a href="#" title="' . $result['title'] . '">
                            ' . $result['title'] . '
                            </a>
                        </h2>
                    </div>
                </div>
        ';

$video_right = '';
$result = get_video();
for ($i = 1; $i < 5; $i++) {
    $id = $result[$i]['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/video_right_'.$i.'/';
    $url .= $img['imgurl'];
    $video_right .= '
        <div class="video-bottom__right-little">
            <a href="#" title="'.$result[$i]['title'].'">
                <div class="right-little__img">
                    <img src="'.$url.'">
                    <span class="right-little__img-background">
                        <img src="../libs/img/video_right_1/Group 2593.png">
                    </span>
                    <span class="right-little__img-time">
                        03:20
                    </span>
                </div>
            </a>
            <div class="right-little__text">
                <h2>
                    <a href="#" title="'.$result[$i]['title'].'">
                        '.$result[$i]['title'].'
                    </a>
                </h2>
            </div>
        </div>
    ';
}

$categorynews = '';
$result = get_categorynews();

$arr = array('sukien.png', 'doanhnghiep_icon.png', 'kinhte_icon.png', 'xahoi_icon.png', 'Law.png', 'quocte.png');
for ($i = 0; $i < 36; $i+=6) {
    $id = $result[$i]['FK_category'];
    $sql = "select * from category where id = $id";
    $query = mysqli_query($conn, $sql);
    $cate = mysqli_fetch_array($query);

    $categorynews .= '
            <div class="last-left__line"></div>
            <div class="last-left__title">
                <div class="last-left__title-icon">
                    <a href="#" title="'.$cate['title'].'">
                        <img src="../libs/img/'.$arr[$i/6].'" alt="">
                    </a>
                    <a href="#" title="'.$cate['title'].'" class="last-left__title-icon-text">
                        '.$cate['title'].'
                    </a>
                </div>
                <ul>
                    <li><a href="#" title="TRỊ - XÃ HỘI">TRỊ - XÃ HỘI</a></li>
                    <li><a href="#" title="CẢI CÁCH TÀI CHÍNH">CẢI CÁCH TÀI CHÍNH</a></li>
                    <li><a href="#" title="TIÊU ĐIỂM">TIÊU ĐIỂM</a></li>
                    <li>
                        <a href="#" title="XEM THÊM"><img src="../libs/img/3cham.png" alt=""></a>
                    </li>
                </ul>
            </div>
    ';

    $categorynews .= '
        <div class="last-left__content">
            <div class="event">
    ';
    for ($j = $i; $j < $i+2; $j++) {
        $id = $result[$j]['id'];
        $sql = "select * from image where FK_post = $id";
        $query = mysqli_query($conn, $sql);
        $img = mysqli_fetch_array($query);

        $url = '../libs/img/';
        $url .= $img['imgurl'];
        $categorynews .= '
            <div class="event__col">
                <a href="#" title="'.$result[$j]['title'].'">
                    <img src="'.$url.'" alt="">
                </a>
                <div class="event__col-title">
                    <a href="#" title="'.$result[$j]['title'].'">
                        '.$result[$j]['title'].'
                    </a>
                </div>
                <div class="event__col-news">
                    '.$result[$j]['brief'].'
                </div>
            </div>
        ';
    }

    $categorynews .= '
        </div>
    <div class="list">
    ';

    for ($x = $i+2; $x < $i+6; $x++) {
        $categorynews .= '
            <a href="#" title="'.$result[$x]['title'].'">
                '.$result[$x]['title'].'
            </a>
        ';
        if($x != $i+5) {
            $categorynews .= '
                <div class="list__line"></div>
            ';
        }
    }
    $categorynews .= '
        </div>
    </div>
    ';
}
?>

<!-- wrapper -->
<div class="wrapper">
    <!-- wrapper-top -->
    <div class="wrapper-top">
        <!-- wrapper-top__left -->
        <div class="wrapper-top__left">
            <?php echo $wrapper_top__left ?>
        </div>
        <div class="wrapper-top__line"></div>
        <!-- wrapper-top__center -->
        <div class="wrapper-top__center">
            <?php echo $wrapper_top__center ?>
        </div>
        <div class="wrapper-top__line"></div>
        <!-- wrapper-top_-right -->
        <div class="wrapper-top__right">
            <?php echo $wrapper_top__right ?>
        </div>
    </div>
    <!-- list-boder -->
    <ul class="list-boder">
        <li class="boder"></li>
        <li class="boder"></li>
        <li class="boder"></li>
        <li class="boder"></li>
        <li class="boder"></li>
    </ul>
    <!-- wrapper-bottom -->
    <div class="wrapper-bottom">
        <!-- wrapper-bottom__left -->
        <div class="wrapper-bottom__left">
            <!-- marketing -->
            <div class="marketing">
                <div class="marketing-title">
                    <h2>
                        <a href="#" title="TIẾP THỊ">TIẾP THỊ</a>
                    </h2>
                    <ul>
                        <li><a href="#" title="THƯƠNG MẠI">THƯƠNG MẠI</a></li>
                        <li><a href="#" title="VĂN HÓA TIẾP THỊ">VĂN HÓA TIẾP THỊ</a></li>
                        <li><a href="#" title="HỘI NHẬP">HỘI NHẬP</a></li>
                        <li><a href="#" title="MARKETING 4.0">MARKETING 4.0</a></li>
                    </ul>
                </div>
                <div class="marketing-content">
                    <?php echo $mr ?>
                </div>
            </div>
            <div class="marketing__line"></div>
            <!-- social -->
            <div class="social">
                <?php echo $social ?>
            </div>
            <!-- magazine -->
            <div class="magazine">
                <!-- block normal -->
                <div class="magazine-block">
                    <div class="magazine-block__title">
                        <a href="#" title="EMAGAZINE">EMAGAZINE</a>
                    </div>
                    <div class="block__normal">
                        <?php echo $emagazine ?>
                    </div>
                </div>
                <!-- block interest -->
                <div class="magazine-interest">
                    <div class="magazine-interest__title">
                        <a href="#" title="TIN ĐỌC NHIỀU">TIN ĐỌC NHIỀU</a>
                    </div>
                    <div class="magazine-interest__content">
                        <?php echo $mostreading ?>
                    </div>
                </div>
            </div>
            <!-- news -->
            <div class="social">
                <?php echo $mainnews2 ?>
            </div>
            <!-- button -->
            <div class="button-add">
                <a href="#" title="Xem thêm">
                    <div class="button-add__1">Xem thêm</div>
                    <div class="button-add__2">
                        <div class="button-add__2-1"></div>
                        <div class="button-add__2-2"></div>
                    </div>
                </a>
            </div>
        </div>
        <!-- wrapper-bottom__right -->
        <div class="wrapper-bottom__right">
            <div class="wrapper-bottom__right-i">
                <div class="wrapper-bottom__right-title">
                    <a href="#" title="Ngoại hối">Ngoại hối</a>
                    <a href="#" title="Trái phiếu">Trái phiếu</a>
                    <a href="#" title="Các chỉ số">Các chỉ số</a>
                </div>
                <ul>
                    <li>
                        <div class="foreign-ex">
                            <div>EURO...</div>
                            <div class="foreign-ex__down">Euro / Đô...</div>
                        </div>
                        <div class="bond">1.12633</div>
                        <div class="indexs">
                            <div>-0.27%</div>
                            <div>-0.00306</div>
                        </div>
                    </li>
                    <li>
                        <div class="foreign-ex">
                            <div>GBPU...</div>
                            <div class="foreign-ex__down">Bảng Anh...</div>
                        </div>
                        <div class="bond">1.26722</div>
                        <div class="indexs">
                            <div>-0.39%</div>
                            <div>-0.00500</div>
                        </div>
                    </li>
                    <li>
                        <div class="foreign-ex">
                            <div>USDJPY...</div>
                            <div class="foreign-ex__down">Đô La Mỹ...</div>
                        </div>
                        <div class="bond">107.843</div>
                        <div class="indexs">
                            <div>-0.54%</div>
                            <div>-0.583</div>
                        </div>
                    </li>
                    <li>
                        <div class="foreign-ex">
                            <div>USDCHF...</div>
                            <div class="foreign-ex__down">Đô La Mỹ...</div>
                        </div>
                        <div class="bond bond-red">0.95537</div>
                        <div class="indexs">
                            <div>-0.23%</div>
                            <div>-0.00220</div>
                        </div>
                    </li>
                    <li>
                        <div class="foreign-ex">
                            <div>AUDU...</div>
                            <div class="foreign-ex__down">Đô La Úc...</div>
                        </div>
                        <div class="bond">0.69235</div>
                        <div class="indexs">
                            <div>-1.38%</div>
                            <div>-0.00970</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="wrapper-bottom__right-background"></div>
        </div>
    </div>
    <!-- video -->
    <div class="video">
        <!-- line -->
        <div class="video__line"></div>
        <div class="video-title">
            <a href="#" title="VIDEO">
                <img src="../libs/img/video_icon_1.png">
            </a>
            <a href="#" title="VIDEO">
                Video
            </a>
        </div>
        <div class="video-bottom">
            <!-- bottom-left -->
            <?php echo $video_left ?>
            <!-- bottom right -->
            <div class="video-bottom__right">
                <?php echo $video_right ?>
            </div>
        </div>
    </div>
    <!-- last -->
    <div class="last">
        <!-- last-left -->
        <div class="last-left">
            <!-- sự kiện -->
            <?php echo $categorynews ?>
        </div>
        <!-- last right -->
        <div class="last-right">
        </div>
    </div>
</div>