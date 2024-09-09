<?
    include "dbClass.php";

    print_r($_POST);

    $data = array($_POST['user_id'], $_POST['pwd'], $_POST['name'], $_POST['email']);

    $data[] = date("Y-m-d H:i:s");
    $data[] = $_SERVER['REMOTE_ADDR'];
    print_r($data);

    $query = "insert into uni_member(user_id, pwd, name, email, regdate, ip) values(?,password(?),?,?,?,?) ";
    $result = $db->query($query, $data);
    echo $result->affectedRows();
    $cnt = $result->affectedRows();

    if($cnt!=1) {
        echo $cnt;
        exit;
    }

    Header("Location: index.php");