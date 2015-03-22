<?php
/**
 * Created by PhpStorm.
 * User: katiusca
 * Date: 17/03/15
 * Time: 14:59
 */

namespace Templates\Twig;
use Mpwarfw\Template;

class TemplateTwigHome implements Template\Template{

    public $loader;
    public $twig;
    public $parameters;
    const FILE_ROUTE_CACHE = '../src/Config/compilation_cache';
    const FILE_ROUTE_DIRECTORY = '../src/Templates/Twig';

    public function __construct(){

        $this->loader = new \Twig_Loader_Filesystem(self::FILE_ROUTE_DIRECTORY);
    }

    public function render(){

        $this->twig   = new \Twig_Environment($this->loader,array(
            'cache' => self::FILE_ROUTE_CACHE));
       echo $this->twig->render('TemplateTwigHome.html.twig');
    }

    public function assignParameters($values){

        $this->parameters ='';
    }

}