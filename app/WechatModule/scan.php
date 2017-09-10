<?php

try {
    if (!empty($message)) {
        $bookid = str_replace('qrscene_', '', $message->EventKey);
        $openID = $message->FromUserName ;
        $redirect_url = "http://shuxiang.louisian.net/mobile";
        $url = 'http://oauth.craim.net/?url=' . urlencode($redirect_url);
        $weixin_url = 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx8a4a0119a36c75d3&redirect_uri='. urlencode($url) .'&response_type=code&scope=snsapi_base&state=STATE';
        preg_match_all('/(\d+)$/', $bookid, $temp);
        $post_url = "http://shuxiang.louisian.net/mobile/user/scanQRcode?bookid=".$temp[0][0]."&openid=".$openID;
        $result = file_get_contents($post_url);
        $result = json_decode($result, true);
        return "您借的书本是\n《" . $result['data'] . "》\n\n<a href='" . $weixin_url . "'>查看</a>";
    }
    return '扫描二维码时出了点错误';
} catch (Exception $e) {
    return '扫描二维码时出了点错误';
}