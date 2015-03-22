<?php
/**
 * Created by PhpStorm.
 * User: katiusca
 * Date: 22/03/15
 * Time: 12:32
 */

namespace Templates;


class TemplateSmartyMessege {

    public $loader;
    const ROUTE_fILE= '../src/Templates';

    public function __construct(){

        $this->loader= new \Smarty();
    }

    public function render(){

        $this->loader->setTemplateDir(self::ROUTE_fILE);
        $this->loader->display('TemplateSmartyMessege.tpl');

    }

    public function assignParameters($values){

        $this->loader->assign('mensaje',$values);

    }
}