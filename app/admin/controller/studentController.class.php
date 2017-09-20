<?php
namespace app\admin\controller;
use core\Controller;
class studentController extends Controller {
    public function insertPage(){

        $this->display('insert.html');
    }
    public function listPage(){
        $mysql=\core\App::singleFactory('app\model\studentModel');
        $rows=$mysql->selectRows('*','tb_student','1');
        $this->assign('rows',$rows);
        $this->display('list.html');
    }
    public function changePage(){

        $this->display('change.html');
    }
}