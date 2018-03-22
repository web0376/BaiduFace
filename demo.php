<?php  
require_once __DIR__ . '/vendor/autoload.php';  
 
use BaiduFace\Api\AipFace;  
 
const APP_ID = '1111';
const API_KEY = '222222';
const SECRET_KEY = '3333333';

$client = new AipFace(APP_ID, API_KEY, SECRET_KEY);

$image = file_get_contents('mayun.jpg');

// 调用人脸检测
$client->detect($image);

// 如果有可选参数
$options = array();
$options["max_face_num"] = 1;
$options["face_fields"] = "age,gender";

// 带参数调用人脸检测
$res = $client->detect($image, $options);
//echo '<pre>';
var_dump($res);   
