<?

    //$a = 100;
    //phpinfo();
    $msg = "Hello World";
    var_dump($msg);

    //if (strpos('testing', 'test')) {
        // code..
    //    echo "strpos('testing', 'test') == true";
    //}else {
    //    echo "strpos('testing', 'test') == false";
   // }

    //if (strpos('testing', 'test') !== false) {
        // code..
    //    echo "strpos('testing', 'test') !== false => true";
    //}else {
    //    echo "strpos('testing', 'test') == false => false";
   // }
    $val = 0 != false;
    echo "0!==false는? $val";

    //session_start(); 여기서 하면 undefined array error가 나기 때문에 lib.php로 옮긴다.
    
    include "lib.php";

    $isLogin = $_SESSION['isLogin'];
    $isLogin = $_SESSION['isLogin'];

    if(!$isLogin) { ?>
    
        로그인 후 이용해 주세요. <br>
        <a href="login.php">로그인</a>

    <? } ?>