<?php
    include "lib.php";
    $idx = $_GET['idx'];
    $idx = mysqli_real_escape_string($connect, $idx);

    echo $idx;

    $query = "select * from sing_board where idx = '$idx' ";
    $result = mysqli_query($connect, $query);
    $data = mysqli_fetch_array($result);

    print_r($data);

?>

<form action="writePost.php" method="post">
    <table width=800 border="1" cellpadding=10 >
        <tr>
            <th> 이름 </th>
            <td> <?=$data['name']?> </td>
        </tr>
        <tr>
            <th> 제목 </th>
            <td> <?=$data['subject']?> </td>
        </tr>
        <tr>
            <th> 내용 </th>
            <td> <?=nl2br($data['memo'])?>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <div style="float:right; ">
                    <!--<a href="del.php?idx=<?=$idx?>" onclick="return confirm('정말 삭제할까요?');">삭제</a>-->
                    <!-- javascript 함수 사용. 프롬프트 입력으로 삭제하는 방법 -->
                    <!-- <a href="#123" onclick="chkPassword();">삭제</a> -->
                    <a href="confirmDel.php?idx=<?=$idx?>">삭제</a>
                    <a href="write.php?idx=<?=$idx?>">수정</a>
                </div>
                <a href="list.php">목록</a>
            </td>
        </tr>

    </table>
</form>

<script>
    function chkPassword() {
        var a = prompt('비밀번호를 입력해 주세요');
        //alert(a);

        if(a) {
            location.href='del.php?idx=<?=$idx?>&pwd='+a;
        }else{
            alert('비밀번호를 입력하셔야 수정 가능합니다');
        }
    }
</script>





