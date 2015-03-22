<?php

namespace Templates;
use Mpwarfw\Template;

class TemplateSmartyShowUser {

    public $loader;
    const ROUTE_fILE= '../src/Templates';

    public function __construct(){

        $this->loader= new \Smarty();
    }

    public function render(){

        $this->loader->setTemplateDir(self::ROUTE_fILE);
        $this->loader->display('TemplateSmartyShowUser.tpl');

    }

    public function assignParameters($values){

        $this->loader->assign('users',$values);

    }

}