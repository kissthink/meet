<?php
/**
 * Shop 统一入口
 */

require_once dirname(__FILE__) . '/../init.php';

//装载你的接口
DI()->loader->addDirs('Shop');

DI()->request = new Common_Request_Ch1();

DI()->_formatterEmail = 'Common_Request_Email';

// 微信签名验证服务
//DI()->filter = 'Common_Request_WeiXinFilter';

//DI()->response = 'Common_Response_XML';

$config = array('domain' => '.phalapi.net');
DI()->cookie = new PhalApi_Cookie($config);
$config = array('domain' => '.phalapi.net', 'crypt' => new Common_Crypt_Base64());
DI()->cookie = new PhalApi_Cookie_Multi($config);

/** ---------------- 响应接口请求 ---------------- **/

$api = new PhalApi();
$rs = $api->response();
$rs->output();

