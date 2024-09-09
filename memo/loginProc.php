<?
    session_start();
    
    include "dbClass.php";

    $user_id = $_POST['user_id'];
    $pwd = $_POST['pwd'];

    $query = " select * from uni_member where user_id = ? ";

    $data = $db->query($query, $user_id)->fetchArray();

    if(!$data['idx']) {
        echo "존재하지 않는 회원입니다.";
    }

    //print_r($data);

    $q = " select password(?) AS pwd ";
    $tmp = $db->query($q, $pwd)->fetchArray();

    if($data['pwd'] != $tmp['pwd']) {
        echo '비밀번호가 맞지 않습니다.';
    }

    $_SESSION['isLoginId'] = $user_id;

    Header("Location: index.php");

    //print_r($tmp);