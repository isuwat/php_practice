<?php

    include "lib.php";

    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    echo "$uid / $pwd";

    $uid = mysqli_real_escape_string($connect, $uid);
    $pwd = mysqli_real_escape_string($connect, $pwd);

    $query = "select * from members where uid='$uid' and pwd=password('$pwd') ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);

    print_r($data);

    if($data) {
        $_SESSION['isLogin'] = time();
?>
    <script>
        location.href='list.php';
    </script>
<?
    }else {

        echo "로그인 정보가 올바르지 않습니다.";
    }

?>


