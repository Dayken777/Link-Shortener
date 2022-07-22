<?php 
    include("./DataBase.php");
    $sql = 'INSERT INTO `url-shortener` ( link, short_url ) VALUES ( :link, :short_url )';
    function generationIniqueCode($length = 6)
    {				
        $chars = 'qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP'; 
        $size = strlen($chars) - 1; 
        $code = ''; 
        while($length--) {
            $code .= $chars[random_int(0, $size)]; 
        }
        return $code;
    }
    $code = generationIniqueCode(6);
    echo $code."|";
    $db = new DB;
    $params = [
		'link' => $_POST['link'], 
		'short_url' => 'http://'.$_SERVER['HTTP_HOST'].'/'.$code,
    ];
    $db->query($sql, $params);
    echo $params['short_url'];
?>
