<?php
/**
 * Created by PhpStorm.
 * User: katiusca
 * Date: 18/03/15
 * Time: 11:01
 */

namespace Templates;
use Mpwarfw\Template;


class TemplateSmartyHome implements Template\Template{

    public $loader;
    const ROUTE_fILE= '../src/Templates';

    public function __construct(){

        $this->loader= new \Smarty();
    }

    public function render(){

        $this->loader->setTemplateDir(self::ROUTE_fILE);
        $this->loader->display('TemplateSmartyHome.tpl');

    }

    public function assignParameters($values){

        $this->loader->assign('',$values);

    }
}