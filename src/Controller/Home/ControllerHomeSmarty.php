<?php

namespace Controller\Home;
use Mpwarfw\Utils\Request;
use Mpwarfw\Utils\ResponseHttp;
use Templates\TemplateSmartyForm;
use Templates\TemplateSmartyHome;

class ControllerHomeSmarty {

    const STATUS_CODE = 200;

    public function index(Request $request){

        $view = new TemplateSmartyHome();
        $view->assignParameters('');
        return new ResponseHttp($view->render(),self::STATUS_CODE);

    }

    public function plantillaInsertar(Request $request){

        $view = new TemplateSmartyForm();
        $view->assignParameters('');
        return new ResponseHttp($view->render(),self::STATUS_CODE);

    }

}