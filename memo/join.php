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
    <script>
        function chkFrm() {
            var a = document.getElementById("name").value;
            if(a == "") {
                alert('이름을 입력해주세요.');
                document.getElementById("name").focus();
                return false;
            }

            return true;
        }
    </script>

</head>

<body>
<form action="joinProc.php" method="post" onsubmit="return chkFrm();">
    <div>
        id : <input type="text" name="user_id" placeholder="아이디">
    </div>
    <div>
        pw : <input type="text" name="pwd" placeholder="패스워드">
    </div>
    <div>
        name : <input type="text" name="name" id="name" placeholder="이름">
    </div>
    <div>
        email : <input type="text" name="email" placeholder="email">
    </div>

    <button type="submit">회원가입</button>
</form>


</body>
</html>

