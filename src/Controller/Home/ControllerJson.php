<?php
/**
 * Created by PhpStorm.
 * User: katiusca
 * Date: 22/03/15
 * Time: 22:46
 */

namespace Controller\Home;

use Mpwarfw\Utils\ResponseJson;
use Mpwarfw\Utils\UriAnalyzer;
use Mpwarfw\Utils\Request;
use Mpwarfw\Component\Container;

class ControllerJson {

    const STATUS_CODE = 200;

    public function mostrar (Request $request){
        $userService =  Container::getService("userService");
        $result = $userService->listAllUsers();

        return new ResponseJson($result,self::STATUS_CODE);
    }
}