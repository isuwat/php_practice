<?
    error_reporting(1);
    ini_set("display_errors", 1);

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .item{
            width:14%; 
            height:100px; 
            border:1px solid #aaa; 
            float: left;
            margin-left:-1px;
            margin-bottom:-1px;
        }
    </style>
</head>
<body>
<?
    $year = $_GET['year'];
    $month = $_GET['month'];
?>

<form action="calender.php">
<div style="text-align:center;">
    <select>
        <? for($i=2024; $i<=2025; $i++) { ?>
            <option value="<?=$i?>" <? if($year==$i) echo "selected"; ?> > <?=$i?>년 </option>
        <? } ?>
    </select>
    <select>
        <? for($i=1; $i<=12; $i++) { ?>
            <option value="<?=$i?>" <? if($month==$i) echo "selected"; ?> > <?=$i?>월 </option>
        <? } ?>
    </select>
    <button type="submit">이동</button>
</div>
</form>

<?

               // 0: 일요일 ~
        //$a = time();
        //$b = date("w", $a);
        //echo "date result: $b"."<br>";

        if(!$year) $year = date("Y");
        if(!$month) $month = date("m");

        // 이번 년
        //$year = date("Y");
        //$month = date("m");
        $tm = $year ."-".$month."-01";
        echo $tm ."<br>";
        

        // 이번달
        //$tm = date("Y-m-");
        //$tm .= "01";
        //echo $tm . "<br>";

        // 이번달 시작일 타임스탬프
        $a = strtotime($tm);
        echo $a ."<br>";
        $blank = date("w", $a); // 시작일이 4값이면  0,1,2,3이 빈 칸이어야 된다.
        echo $blank ."<br>";

        $days = date("t", $a);
        echo $days;
    ?>
    <hr>

    <?
        for($i = 0; $i < $blank; $i++) { ?> 
            <div class="item"> </div>
    <? } ?>
    

    <?
        for($i=1; $i<=$days; $i++) { ?>

            <div class="item">
                <?=$i?>
            </div>

        <? } ?>

</body>
</html>