<?php

/*
 * 采集访问的IP、城市等数据
 * */

namespace App\Http\Controllers\Enhance;

use App\Http\Controllers\OpenController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception;
use App\Http\Kit\IpInfo;

final class IpApi extends OpenController {

    final function __construct(Request $request){
        parent::__construct($request);

    }


    /*
     * 获取用户IP接口
     * /public/index.php/enhance/get_that_ip
     * */
    final function get_that_ip(){
        $ip_info = new IpInfo();
        $ip = $ip_info->get_user_ip();

        return json_encode($ip, JSON_UNESCAPED_UNICODE);
    }









}
