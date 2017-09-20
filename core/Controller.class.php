<?php
namespace core;
class Controller extends \Smarty {
    public function __construct(){
        parent::__construct();
        $template=APP.$GLOBALS['config']['scn']['p'].'\\view';
        $this->setTemplateDir($template);
        $compile=APP.$GLOBALS['config']['scn']['p'].'\\view.c';
        $this->setCompileDir($compile);
    }
}