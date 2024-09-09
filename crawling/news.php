<table border=1>

<?
    $subject = file("subject.txt");
    $imgs = file("imgs.txt");

    foreach($subject as $key=>$title) { ?>

    <? $img_name = "data/" ?>
    <tr>
        <td> <?=$title?> </td>
        <!-- <td> <img src="<?=$imgs[$key]?>"> </td> -->
        <? $img_name = $img_name .$key .".jpg" ?>
        <td> <img src="<?=$img_name?>"></td>
    </tr>

    <? }

    //print_r($subject);
?>

</table>


<?
    $arr[] = 1;
    $arr[] = 2;
    $arr[] = 3;
    $arr[] = 4;
    $arr[] = 5;
    
    foreach($arr as $i) {
        $arr2[] = $i;
    }
    echo "<br>";
    print_r($arr2);
?>

