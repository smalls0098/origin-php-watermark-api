## 短视频去水印接口

* 采用composer的自动加载类机制去注册app\controller
* 我个人比较喜欢对象，不太喜欢什么都放在一个文件里面，所以可以根据我写的去写原生的会更简单

## 作者声明
* github上面的代码仅供参考，请不要进行商业交易等等，如有发现后果自负
* 作者开源不易，真心只需要一个star，就是你们给我的支持
* 既然我开源的，那么即使缘分，给一个star吧

## 安装方法

* 1、全部源码直接下载，放到自己配置环境里面去
* 2、绑定网站目录到public【为了更加安全的体验防止vendor和app直接暴露】
* 3、index.php里面直接获取$_POST或者$_GET这样是不可取的，安全性低，自己可以使用一些htmlspecialchars等一些过滤器


## 代码实现：(可以参考app\controller\WatermarkController.php)
````
try {
    if (strpos($url, "douyin.com") || strpos($url, "iesdouyin.com")) {
        $result = VideoManager::DouYin()->start($url);
    } elseif (strpos($url, "huoshan.com")) {
        $result = VideoManager::HuoShan()->start($url);
    } elseif (strpos($url, "ziyang.m.kspkg.com") || strpos($url, "kuaishou.com") || strpos($url, "gifshow.com") || strpos($url, "chenzhongtech.com")) {
        $result = VideoManager::KuaiShou()->start($url);
    } elseif (strpos($url, "www.pearvideo.com")) {
        $result = VideoManager::LiVideo()->start($url);
    } elseif (strpos($url, "www.meipai.com")) {
        $result = VideoManager::MeiPai()->start($url);
    } elseif (strpos($url, "immomo.com")) {
        $result = VideoManager::MoMo()->start($url);
    } elseif (strpos($url, "ippzone.com")) {
        $result = VideoManager::PiPiGaoXiao()->start($url);
    } elseif (strpos($url, "pipix.com")) {
        $result = VideoManager::PiPiXia()->start($url);
    } elseif (strpos($url, "longxia.music.xiaomi.com")) {
        $result = VideoManager::QuanMingGaoXiao()->start($url);
    } elseif (strpos($url, "shua8cn.com")) {
        $result = VideoManager::ShuaBao()->start($url);
    } elseif (strpos($url, "toutiaoimg.com") || strpos($url, "toutiaoimg.cn")) {
        $result = VideoManager::TouTiao()->start($url);
    } elseif (strpos($url, "weishi.qq.com")) {
        $result = VideoManager::WeiShi()->start($url);
    } elseif (strpos($url, "mobile.xiaokaxiu.com")) {
        $result = VideoManager::XiaoKaXiu()->start($url);
    } elseif (strpos($url, "xigua.com")) {
        $result = VideoManager::XiGua()->start($url);
    } elseif (strpos($url, "izuiyou.com")) {
        $result = VideoManager::ZuiYou()->start($url);
    } else {
        return [
            'status'  => false,
            'data' => '您输入的链接错误！'
        ];
    }
    if (!$result) {
        return [
            'status'  => false,
            'data' => '您输入的链接错误！'
        ];
    }
    return [
        'status'  => true,
        'data' => $result
    ];
} catch (\Exception $e) {
    return [
        'status'  => false,
        'data' => $e->getMessage()
    ];
}
````



