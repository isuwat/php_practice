<?


    $url = "https://news.daum.net/";

    include "simple_html_dom.php";

    $data = file_get_html($url);
    //echo $data;


// 서버에 저장해놓기 
    $i = 0;
    foreach($data->find("div.item_issue") as $li) { 
    
        $title = $li->plaintext;
        $img = $li->find("img", 0)->src;

        // php 배열은 static인가?
        //$subject[] = $title;
        $subject[] = trim($title);
        $imgs[] = $img;

        $fn = $i .".jpg";
        echo $fn;

        file_put_contents("./data/".$fn, file_get_contents($img));

        $i++;        
    } 
    // echo "<xmp>";
    // print_r($subject);
    // print_r($imgs);

    file_put_contents("subject.txt", join("\r\n", $subject));
    file_put_contents("imgs.txt", join("\r\n", $imgs));


    

   
