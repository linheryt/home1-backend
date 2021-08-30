<title>Detail | DN&TT</title>
<link rel="stylesheet" href="../libs/css/style-detail.css">
<link href="../libs/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">

<?php
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

$post_social34 = get_mainnews1();
$social34 = '';
for ($i = 2; $i < 4 ; $i++) {
    $id = $post_social34[$i]['FK_category'];
    $sql = "select * from category where id = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    $id = $post_social34[$i]['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/';
    $url .= $img['imgurl'];

    $social34 .= '
        <div class="social-block">
            <div class="social-block__content">
                <div class="social-block__content-img">
                    <a href="#" title="' . $post_social34[$i]['title'] . '">
                        <img src="' . $url . '" alt="">
                    </a>
                </div>
                <div class="social__news">
                    <div class="social__news-title">
                        <a href="#" title="' . $post_social34[$i]['title'] . '">
                            <h2>
                                ' . $post_social34[$i]['title'] . '
                            </h2>
                        </a>
                    </div>
                    <div class="cell_title">
                        <a href="#" title="' . $row['title'] . '">
                            ' . $row['title'] . '
                        </a>
                    </div>

                    <div class="social__news-content">
                        ' . $post_social34[$i]['brief'] . '
                    </div>
                </div>
            </div>
            <div class="social-line"></div>
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


$news = '';
    $sql = "select post.* from post, businesscate where post.id = businesscate.FK_post";
    $query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_array($query);

    $id = $result['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/';
    $url .= $img['imgurl'];
    $news .= '
        <a href="#" title="'.$result['title'].'">
            <img src="'.$url.'" alt="">
        </a>
        <div class="news-left__title">
            <a href="#" title="'.$result['title'].'">
                '.$result['title'].'
            </a>
        </div>
        <div class="news-left__content">
            '.$result['brief'].'
        </div>
    ';

$news_right = '';
$result = get_businessright();
    $id = $result[0]['id'];
    $sql = "select * from image where FK_post = $id";
    $query = mysqli_query($conn, $sql);
    $img = mysqli_fetch_array($query);

    $url = '../libs/img/category/';
    $url .= $img['imgurl'];
    $news_right .= '
        <a href="#" title="'.$result[0]['title'].'">
            <img src="'.$url.'">
        </a>
        <div class="news-right__1">
            <a href="#" title="'.$result[0]['title'].'">
                '.$result[0]['title'].'
            </a>
        </div>
    ';
for ($i=1; $i<3; $i++){
    $news_right .= '
        <div class="news-right__2">
            <a href="#" title="'.$result[$i]['title'].'">
                '.$result[$i]['title'].'
            </a>
        </div>
    ';
}

$sql = "select * from post, news where  post.id = news.FK_post";
$query = mysqli_query($conn, $sql);
$news_detail = mysqli_fetch_array($query);
?>
<!-- main -->
<div class="main">
    <!-- main left -->
    <div class="main-left">
        <!-- left title -->
        <div class="main-left__title">
            <?php echo $news_detail['title'] ?>
        </div>
        <!-- left block 1-->
        <div class="main-left__block-1">
            <div class="block-1__1">
                <a href="#" title="DOANH NGHIỆP">DOANH NGHIỆP</a>
            </div>
            <div class="block-1__2">
                <i class="far fa-clock"></i>
                <span>04:10 PM 21/02/2020</span>
            </div>
        </div>
        <!-- left block 2 -->
        <div class="main-left__block-2">
            <h2>
                <?php echo $news_detail['brief'] ?>
            </h2>
            <div class="main-left__like">
                <div class="like">
                    <a href="#" title="Thích">
                        <i class="fas fa-thumbs-up"></i>
                        <p>Thích</p>
                    </a>
                </div>
                <div class="share">
                    <a href="#" title="Chia sẻ">
                        <i class="fab fa-facebook fa-lg"></i>
                        <p>Chia sẻ</p>
                    </a>
                </div>

            </div>
        </div>
        <!-- ul li -->
        <ul class="main-left__block-ul">
            <li>
                <a href="#" title="Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện ">
                    Hà Nội thúc đẩy quan hệ thương mại đầu tư với Nhật Bản trong điều kiện
                </a>
            </li>
            <li>
                <a href="#" title="Nhiều khả năng Triệu Quân Sự đã trốn thoát khỏi đèo Hải Vân">
                    Nhiều khả năng Triệu Quân Sự đã trốn thoát khỏi đèo Hải Vân
                </a>
            </li>
            <li>
                <a href="#" title="Quảng Nam xây dựng chiến lược phát triển cho cây sâm Ngọc Linh ">
                    Quảng Nam xây dựng chiến lược phát triển cho cây sâm Ngọc Linh
                </a>
            </li>
        </ul>
        <!-- p -->
        <div class="main-left__block-p">
            <?php echo $news_detail['content']?>
            <p class="p6"><?php echo $news_detail['author']?></p>
        </div>
        <!-- end of p -->
        <div class="main-left__block-endp">
            <div class="like margin10">
                <a href="#" title="Thích">
                    <i class="fas fa-thumbs-up"></i>
                    <p>Thích</p>
                </a>
            </div>
            <div class="share margin10">
                <a href="#" title="Chia sẻ">
                    <i class="fab fa-facebook fa-lg"></i>
                    <p>Chia sẻ</p>
                </a>
            </div>
            <div class="line"></div>
            <div class="twitter">
                <a href="#" title="Twitter">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            <div class="zalo">
                <a href="#" title="Zalo">Z</a>
            </div>
            <div class="email">
                <a href="#" title="E-mail">
                    <i class="far fa-envelope"></i>
                </a>
            </div>
        </div>
        <!-- p key -->
        <div class="main-left__block-keyp">
            <b>
                Từ khóa:
            </b>
            <a href="#" title="gây tiếng ồn vượt ngưỡng">gây tiếng ồn vượt ngưỡng, </a>
            <a href="#" title="xả khói đen">xả khói đen, </a>
            <a href="#" title="di dời khỏi nội đô">di dời khỏi nội đô, </a>
            <a href="#" title="mùi hóa chất phát tán">mùi hóa chất phát tán</a>
        </div>
        <!-- list-boder -->
        <ul class="list-boder">
            <li class="boder"></li>
            <li class="boder"></li>
            <li class="boder"></li>
            <li class="boder"></li>
            <li class="boder"></li>
        </ul>
        <!-- marketing -->
        <div class="marketing">
            <div class="marketing-title">
                <h2>
                    <a href="#" title="TIN CÙNG CHUYÊN MỤC">TIN CÙNG CHUYÊN MỤC</a>
                </h2>
            </div>
            <div class="marketing-content">
                <?php echo $mr ?>
            </div>
        </div>
        <div class="marketing__line"></div>
        <!-- news -->
        <div class="news__title">
            <a href="#" title="TIN NỔI BẬT">TIN NỔI BẬT</a>
        </div>
        <div class="container-left__news">
            <div class="container-left__news-left">
                <?php echo $news ?>
            </div>
            <div class="container-left__news-right">
                <?php echo $news_right ?>
            </div>
        </div>
        <!-- list social -->
        <div class="marketing__line"></div>
        <div class="social__title">
            <a href="#" title="ĐỌC THÊM">ĐỌC THÊM</a>
        </div>
        <!-- social -->
        <?php echo $social ?>
        <!-- list news -->
        <?php echo $mainnews2 ?>
        <!-- social 34 -->
        <?php echo $social34 ?>
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
    <!-- main right -->
    <div class="main-right"></div>
    </div>
</div>
