<?php
require './include/sql.php';
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="utf-8">
    <title>Home | DN&TT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="báo điện tử, tin tức, luật pháp,">
    <meta name="description" content="">
    <link rel="stylesheet" href="../libs/css/style-home.css">
</head>
<body>
    <?php
        include_once('./layouts/header.php');
        if(isset($_GET['url'])){
            $tam = $_GET['url'];
        }else{
            $tam = '';
        }
        if($tam=='category'){
            include_once('./layouts/category.php');
        }elseif($tam=='detail') {
            include('./layouts/detail.php');
        }elseif($tam=='home'){
            include_once('layouts/home.php');
        }else{
            include_once('layouts/home.php');
        }
        include_once('./layouts/footer.php');
    ?>
</body>
</html>