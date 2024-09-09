<?
    include "lib.php";
    
    print_r($_POST);
    echo "<br>";

    $memo = $_POST['memo'];
    $memo = mysqli_real_escape_string($connect, $memo);

    print_r($_POST);
    echo "<br>";

    //$list = explode("\r\n", $memo);
    $list = explode('\r\n', $memo);

    print_r($list);

    echo $list[0];

    foreach($list as $url) {
        
        // 공백 라인 체크하기
        $url = trim($url);
        if(!$url) continue;

        // 같은 url 체크하기
        $query = "select * from bookmark where url = '$url' ";
        $result = mysqli_query($connect, $query);
        $data = mysqli_fetch_array($result);    // 배열로 가져온다.

        if($data['idx']) {
            continue;
        }

        //print_r($data);
        exit;



        echo "<li> ";
        echo $url;

        $query = "insert into bookmark(url, regdate) values('$url', now()) ";
        $result = mysqli_query($connect, $query);
        //print_r($result);
    }


//성공시 고 홈
Header("Location: index.php");
