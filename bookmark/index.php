<?
    include "lib.php";


?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <table border=1>
        <tr>
            <th> idx </th>
            <th> 북마크 </th>
            <th> 등록일 </th>
            <th> 방문숫자 </th>
            <th> 삭제 </th>
        </tr>        
        <?
            //$query = "select * from bookmark";
            $query = "select * from bookmark order by idx desc";
            $result = mysqli_query($connect, $query);
            /*
            echo "<tr>";
            foreach($result as $url) {
                echo "<td> $url </td> ";
            }
            echo "</tr>";
            */ 

            while($data = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td> <?=$data['idx']?> </td>
                <!-- <td> <a href="<?=$data['url']?>" target="_blank" > <?=$data['url']?> </a> </td> -->
                <td> <a href="go.php?idx=<?=$data['idx']?>" target="_blank" > <?=$data['url']?> </a> </td> 
                <td> <?=$data['regdate']?> </td>
                <td> <?=$data['cnt']?> </td>
                <td> <a href="del.php?idx=<?=$data['idx']?>" onclick="return confirm('정말 삭제하시겠습니까?')">삭제</a></td>
            </tr>  
        
        <? } ?>



   </table> 
   <a href="add.php">북마크 추가</a>
</body>
</html>