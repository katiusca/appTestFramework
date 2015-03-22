<?php
/**
 * Created by PhpStorm.
 * User: katiusca
 * Date: 22/03/15
 * Time: 22:20
 */

namespace Templates\twig;


class TemplateTwigMessege {

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
        echo $this->twig->render('TemplateTwigMessege.html.twig',array('users'=>$this->parameters));

    }

    public function assignParameters($values){

        $this->loader->assign('mensaje',$values);

    }

}