<?
    date_default_timezone_set("Asia/Seoul");
    
    $comment_array = array();
    //$pdo = null;
    //$stmt = null;
    $error_message = array();

    // DB접속
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=bbs', "root");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    
    // form이 눌렸을때 insert 실행
    if(!empty($_POST["submitButton"])) {

        // name 체크
        if(empty($_POST['username'])) {
            echo "name을 입력해주세요.";
            $error_message["username"] = "이름을 입력해주세요";
        }
        // comment 체크
        if(empty($_POST['comment'])) {
            echo "comment를 입력해주세요.";
            $error_message["comment"] = "내용을 입력해주세요";
        }

        if (empty($error_message)) {
            $postDate = date("Y-m-d H:i:s");

            try {
                $stmt = $pdo->prepare("INSERT INTO `bbs-table` (`username`, `comment`, `postDate`) VALUES (:username, :comment, :postDate)");
                $stmt->bindParam(':username', $_POST['username'], PDO::PARAM_STR);
                $stmt->bindParam(':comment', $_POST['comment'], PDO::PARAM_STR);
                $stmt->bindParam(':postDate', $postDate, PDO::PARAM_STR);

                $stmt->execute();
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        //echo $_POST["username"];
        //echo $_POST["comment"];

        
        //Header("Location: index.php");
    }

    // 현재 페이지에서 글목록 보여주기
    $sql = "SELECT `id`, `username`, `comment`, `postDate` FROM `bbs-table`;";
    $comment_array = $pdo->query($sql);

    $pdo = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="title">PHP게시판 앱</h1>
    <hr>
    <div class="boardWrapper">
    <section>
        <? foreach ($comment_array as $comment) : ?>
        <article>
            <div class="wrapper">
                <div class="nameArea">
                    <span> 이름 : </span>
                    <p class="username"> <?=$comment['username']?> </p>
                    <time> <?=$comment['postDate']?> </time>
                </div>
                <p class="comment"> <?=$comment['comment']?> </p>
            </div>
        </article>
        <? endforeach; ?>
    </section>
    <form class="formWrapper" method="POST">
        <div>
            <input type="submit" value="저장" name="submitButton">
            <label for="">이름 : </label>
            <input type="text" name="username">
        </div>
        <div>
            <textarea class="commentTextArea" name="comment"></textarea>
        </div>
    </form>
    </div>
</body>
</html>