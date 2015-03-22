<?php

namespace Controller\Home;
use Mpwarfw\Utils\Request;
use Mpwarfw\Utils\ResponseHttp;
use Templates\TemplateTwigHome;

class ControllerHomeTwig {

    const STATUS_CODE = 200;

    public function index(Request $request){
        $twig = new TemplateTwigHome();
        $twig->assignParameters('');
        return new ResponseHttp($twig->render(),self::STATUS_CODE);

    }

    public function plantillaInsertar(Request $request){

        $view = new TemplateSmartyInsert();
        $view->assignParameters('');
        return new ResponseHttp($view->render(),self::STATUS_CODE);

    }

}