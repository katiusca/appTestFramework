<?php
/**
 * Created by PhpStorm.
 * User: katiusca
 * Date: 20/03/15
 * Time: 23:48
 */

namespace Controller\Home;
use Mpwarfw\Component\Container;
use Mpwarfw\Utils\Request;
use Mpwarfw\Utils\ResponseHttp;
use Templates\TemplateSmartyMessege;
use Templates\TemplateSmartyShowUser;


class ControllerUser {

    const STATUS_CODE = 200;

    public function mostrar (Request $request){

        $userService =  Container::getService("userService");
        $result = $userService->listAllUsers();
        $view = new TemplateSmartyShowUser();
        $view->assignParameters($result);
        return new ResponseHttp($view->render(),self::STATUS_CODE);

    }

    public function agregar (Request $request){

        $userService =  Container::getService("userService");
        $result = $userService->insertUser($request->getParametersPost());
        $view = new TemplateSmartyMessege();
        $view->assignParameters($result);
        return new ResponseHttp($view->render(),self::STATUS_CODE);

    }
}