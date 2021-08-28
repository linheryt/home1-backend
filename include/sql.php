<?php
    require_once('config.php');
    global $conn;

    //ham ket noi database
    function connect_db(){
        global $conn;
        //neu chua ket noi thi thuc hien ket noi
        if(!$conn){
            $conn = mysqli_connect(DB_HOST, DB_USER, '', DB_NAME, DB_POST)
            or die(' Not connect database ');
            //thiet lap font chu ket noi
            mysqli_set_charset($conn, 'utf8');
        }
    }

    //ham ngat ket noi datatbase
    function disconnect_db(){
        global $conn;
        if($conn){
            mysqli_close($conn);
        }
    }
    // get category
    function get_category() {
        global $conn;
        connect_db();
        $sql = "select * from category";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;   
    }
    // get subcategory
    function get_subcategory($id_category) {
        global $conn;
        connect_db();
        $sql = "select * from subcategory where FK_category = $id_category";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;   
    }
    // get hightlightleft
    function get_hightlightleft() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, hightlightleft where post.id = hightlightleft.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }
    // get hightlight
    function get_hightlight() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, hightlight where post.id = hightlight.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }
    // get hightlightright
    function get_hightlightright() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, hightlightright where post.id = hightlightright.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }
    // get marketingnews
    function get_marketingnews() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, marketingnews where post.id = marketingnews.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }
    // get mainnews1
    function get_mainnews1() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, mainnews1 where post.id = mainnews1.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }
    // get emagazine
    function get_emagazine() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, emagazine where post.id = emagazine.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }
    // get mostreading
    function get_mostreading() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, mostreading where post.id = mostreading.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }
    // get mainnews2
    function get_mainnews2() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, mainnews2 where post.id = mainnews2.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }

    // get video
    function get_video() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, video where post.id = video.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }

    // get categorynews
    function get_categorynews() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, categorynews where post.id = categorynews.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }
    // get businessright
    function get_businessright() {
        global $conn;
        connect_db();
        $sql = "select post.* from post, businessright where post.id = businessright.FK_post";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if($query) {
            while($row = mysqli_fetch_assoc($query)){
                $result[] = $row;
            }
        }
        return $result;
    }
?>