<?php
namespace core;
class App{
    private static $obj=array();
    public static function  singleFactory($className){
        $_className=strrchr($className,'\\');
        if(!isset(self::$obj[$_className])){
            self::$obj[$_className]=new $className;
        }
        return self::$obj[$_className];
    }
    public static function  autoload($className){
        $fileName=ROOT.'\\'.$className.'.class.php';
        if(file_exists($fileName)){
            include_once $fileName;
        }elseif(preg_match('/^Smarty/',$className)){

        }else{
            echo "找不到 $fileName 这个文件";
        }
    }
    public static function run(){
        $obj=\core\App::singleFactory('app\\'.$GLOBALS['plat'].'\\controller\\'.$GLOBALS['module'].'Controller');
        $obj->$GLOBALS['action']();
    }
}