<style>
    .txt{
        width:500px; 
        height:300px; 
        background-color: #eee;
        padding: 5px;}
</style>

<form action="addProc.php" method="post">
    <table border = 1>
        <tr>
            <th>북마크 주소를 입력해 주세요</th>
        </tr>
        <tr>
            <td><textarea name="memo" class="txt"></textarea></td>
        </tr>
    </table>
    <button type="submit">저장하기</button>
</form>
