<?
    include "lib.php";

    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);

    $query = "select * from bookmark where idx = '$idx' ";
    $result = mysqli_query($connect, $query);

    $data = mysqli_fetch_array($result);

    $tmp = $_COOKIE["url_".$idx];
    echo $tmp;
    if(!$tmp) {
        $query = "update bookmark set cnt=cnt+1 where idx='$idx' ";
        $result = mysqli_query($connect, $query);
    }


    //print_r($data);
    // 쿠키 저장
    setcookie("url_".$idx, time(), time()+86400);   // 현재 시간부터 24시간 저장



    //print_r($_COOKIE);

    Header("Location: {$data['url']}");


