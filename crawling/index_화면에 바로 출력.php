<?


    $url = "https://news.daum.net/";

    include "simple_html_dom.php";

    $data = file_get_html($url);
    //echo $data;

?>
    <table border=1>
<!-- 화면에 바로 출력하기  -->
<?    
    foreach($data->find("div.item_issue") as $li) { 
    
         //echo $li;
        $title = $li->plaintext;
        //echo "<li>";
        //echo $title;
        //echo $title;

        $img = $li->find("img", 0)->src;
        //echo $img;
        
        ?>
        <tr>
            <td><?=$title?></td>
            <!-- <td>test</td> -->
             <td> <img src="<?=$img?>"></td>
        </tr>
    <? 

    } 
    
?>

    </table>
   
