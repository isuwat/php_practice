<?
    session_start();
    include "dbClass.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .text-right{
        text-align:right;
        }
    </style>

</head>

<body>
    <?
        echo isset($_SESSION["isLoginId"]) ."<br>";
        //print_r($_SESSION);
    ?>
<div class="text-right">
    <? if(isset($_SESSION['isLoginId'])) { ?>
        <a href="logOut.php">로그아웃</a>
    <? } else { ?>
        <a href="join.php">회원가입</a>
        <a href="login.php">로그인</a>
    <? } ?>

</div>

<? if(isset($_SESSION['isLoginId'])) { ?>

<form action="memoProc.php" method="post">
    <textarea name="memo" placeholder="메모를 입력해주세요" style="width:500px; height:200px"></textarea>
    <br>
    <button type="submit">저장</button>
</form>

<table border = 1>
    <tr>
        <th> 아이디 </th>
        <th> 메모 </th>
        <th> 등록일 </th>
        <?
            $query = "select * from uni_memo where user_id=? order by idx desc";
            $list = $db->query($query, $_SESSION['isLoginId'])->fetchAll();
            //print_r($list);
            foreach($list as $data) { 
        ?>
    <tr>
        <td> <?=$data['user_id']?> </td>
        <td> <?=nl2br($data['memo'])?> </td>
        <td> <?=$data['regdate']?> </td>
    </tr>    
            <? } ?>
        
    </tr>
</table>

<? } ?>

</body>
</html>

