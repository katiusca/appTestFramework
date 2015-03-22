<?php
/**
 * Created by PhpStorm.
 * User: katiusca
 * Date: 22/03/15
 * Time: 11:58
 */

namespace Templates;
use Mpwarfw\Template;

class TemplateSmartyForm implements Template\Template {
    public $loader;
    const ROUTE_fILE= '../src/Templates';

    public function __construct(){

        $this->loader= new \Smarty();
    }

    public function render(){

        $this->loader->setTemplateDir(self::ROUTE_fILE);
        $this->loader->display('TemplateSmartyInsert.html');

    }

    public function assignParameters($value){

        $this->loader->assign('');

    }

}