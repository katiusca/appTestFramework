<?php
/**
 * Created by PhpStorm.
 * User: katiusca
 * Date: 22/03/15
 * Time: 20:44
 */

namespace Templates\Twig;


class TemplateTwigForm {

    public $loader;
    public $twig;
    public $parameters;
    const FILE_ROUTE_CACHE = '../src/Config/compilation_cache';
    const FILE_ROUTE_DIRECTORY = '../src/Templates';

    public function __construct(){

        $this->loader = new \Twig_Loader_Filesystem(self::FILE_ROUTE_DIRECTORY);
    }

    public function render(){
        $this->twig   = new \Twig_Environment($this->loader,array(
            'cache' => self::FILE_ROUTE_CACHE));
        echo $this->twig->render('templateTwigHome.html.twig.twig');

    }

    public function assignParameters($value){

        $this->loader->assign('');

    }

}