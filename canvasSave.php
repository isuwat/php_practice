<?

    //print_r($_POST);
    list($a, $b) = explode(",", $_POST['image']);
    //echo $b;

    $c = base64_decode($b);

    $fp = fopen("a.png", "wb");
    fwrite($fp, $c);
    fclose($fp);

?>
사진이 저장되었습니다. 
<br>
<img src="a.png">