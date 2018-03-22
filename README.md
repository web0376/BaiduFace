# baidu_Face
百度人脸识别SDK for php
百度在线文档：[https://cloud.baidu.com/doc/FACE/Face-PHP-SDK.html](https://cloud.baidu.com/doc/FACE/Face-PHP-SDK.html)  

### 安装 

```php
composer require web0376/baidu-face dev-master
```
### DEMO

```php

require_once __DIR__ . '/vendor/autoload.php';  
use baidu_face\Api\AipFace;  
 
const APP_ID = '11111';
const API_KEY = '22222';
const SECRET_KEY = '333333';
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
var_dump($res);   

```
