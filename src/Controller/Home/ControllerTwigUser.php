<?php


namespace Controller\Home;
use Mpwarfw\Component\Container;
use Mpwarfw\Utils\Request;
use Mpwarfw\Utils\ResponseHttp;
use Templates\Twig\TemplateTwigMessege;
use Templates\Twig\TemplateTwigShowUser;

class ControllerTwigUser {

    const STATUS_CODE = 200;

    public function mostrar (Request $request){

        $userService =  Container::getService("userService");
        $result = $userService->listAllUsers();
        $view = new TemplateTwigShowUser();
        $view->assignParameters($result);
        return new ResponseHttp($view->render(),self::STATUS_CODE);
        // return new ResponseHttp($result,self::STATUS_CODE);

    }

    public function agregar (Request $request){

        $userService =  Container::getService("userService");
        $result = $userService->insertUser($request->getParametersPost());
        $view = new TemplateTwigMessege();
        $view->assignParameters($result);
        return new ResponseHttp($view->render(),self::STATUS_CODE);

    }

}