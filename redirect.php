<?php
require_once('DataBase.php');
$db = new DB;
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$key = explode("/", $url);
$select = $db->query("SELECT * FROM `url-shortener` WHERE `short_url` = 'http://mendeleev/$key[3]'");
print_r($select);
if($select){
    $result = [
        'url' => $select['short_url'],
    ];
    header('location: '.$select[0]['link']);
}
?>
