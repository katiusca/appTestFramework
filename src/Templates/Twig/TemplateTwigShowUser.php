<?php
/**
 * Created by PhpStorm.
 * User: katiusca
 * Date: 22/03/15
 * Time: 21:04
 */

namespace Templates\Twig;


class TemplateTwigShowUser {

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
        echo $this->twig->render('TemplateTwigShowUser.html.twig',array('users'=>$this->parameters));


    }

    public function assignParameters($values){

        $this->parameters =$values;

    }

}