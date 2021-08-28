<title>Category | DN&TT</title>
<link rel="stylesheet" href="../libs/css/style-category.css">


<?php
$title = '';
$result = get_subcategory(2);
foreach ($result as $item) {
    $title .= '
        <li><a href="#" title="'.$item['title'].'">'.$item['title'].'</a></li>
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
?>


<div class="container">
    <div class="container-left">
        <!-- title -->
        <div class="container-left__title">
            <div class="container-left__title-1">
                <a href="?url=detail" title="DOANH NGHIỆP">DOANH NGHIỆP</a>
            </div>
            <ul>
                <?php echo $title ?>
            </ul>
        </div>
        <!-- news -->
        <div class="container-left__news">
            <div class="container-left__news-left">
                <?php echo $news ?>
            </div>
            <div class="container-left__news-right">
                <?php echo $news_right ?>
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
        <!-- list social -->
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
    <div class="container-right">
    </div>
</div>