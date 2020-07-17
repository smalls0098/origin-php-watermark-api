<?php
/**
 * Created By 1
 * 努力努力再努力！！！！！
 * Author：smalls
 * Email：smalls0098@gmail.com
 * Date：2020/7/17 - 17:54
 **/
header("content:application/json; charset=uft-8");
require_once __DIR__ . '/../vendor/autoload.php';

use smalls\app\controller\WatermarkController;

/**
 * @Author Smalls
 * 我这边做了很简单的一些制作
 * 只是很简单的操作，而且我们网站的根目录要设置到public里面，防止vendor、app直接暴露导致程序遭到非法攻击
 */
$url = $_POST['url'];
//$_POST | $_GET
//这边要进行$url逻辑判断，判断是否是url地址等等，而且不能含有中文、违规的标点符号、表情等等
if ($url == '') {
    $url = 'https://v.douyin.com/JeoLRe4/';
}
$watermarkObj = new WatermarkController();
$result       = $watermarkObj->parseVideo($url);

echo json_encode($result);