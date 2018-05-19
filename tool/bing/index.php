<?php
    $str=file_get_contents('https://www.bing.com/HPImageArchive.aspx?idx=0&n=1&mkt=zh-CN');
    if(preg_match("/<urlBase>(.+?)<\/urlBase>/ies",$str,$matches)){
        $imgurl='https://www.bing.com'.$matches[1].'_1920x1080.jpg';
    }
    if($imgurl){
        header('Content-Type: image/JPEG');
        @ob_end_clean();
        @readfile($imgurl);
        @flush(); @ob_flush();
        exit();
    }else{
        exit('error');
    }
?>
