<?php

namespace core;

class Model{
    private  $pdo;
    public function __construct($type='',$host='',$port='',$charset='',$dbname='',$acc='',$pwd=''){
        $type=isset($type)?$GLOBALS['config']['mysql']['type']:$type;
        $host=isset($host)?$GLOBALS['config']['mysql']['host']:$host;
        $port=isset($port)?$GLOBALS['config']['mysql']['port']:$port;
        $charset=isset($charset)?$GLOBALS['config']['mysql']['charset']:$charset;
        $dbname=isset($dbname)?$GLOBALS['config']['mysql']['dbname']:$dbname;
        $acc=isset($acc)?$GLOBALS['config']['mysql']['acc']:$acc;
        $pwd=isset($pwd)?$GLOBALS['config']['mysql']['pwd']:$pwd;
        $dsn="$type:host=$host;port=$port;charset=$charset;dbname=$dbname";

        $this->pdo= new \PDO($dsn,$acc,$pwd);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
    }
    /* 添加数据
     * 表名 数据内容
     */
    public function insert($tb_name,$content){
        try{
            $sql="insert into $tb_name values ($content)";
            $this->pdo->exec($sql);
        }catch(\PDOException $error){
            echo '插入数据失败<br/>'.$error->getMessage();
            exit;
        }
        return false;
    }
    /* 删除数据
     * 表名 数据内容 条件
     */
    public function update($tb_name,$content,$condition){
        try{
            $sql="update $tb_name set $content where $condition";
            $this->pdo->exec($sql);
        }catch(\PDOException $error){
            echo '更新数据失败<br/>'.$error->getMessage();
            exit;
        }
        return false;
    }
    /* 删除数据
     * 表名 条件
     */
    public function delete($tb_name,$condition){
        try{
            $sql="delete from $tb_name where $condition";
            $this->pdo->exec($sql);
        }catch(\PDOException $error){
            echo '删除数据失败<br/>'.$error->getMessage();
            exit;
        }
        return false;
    }
    /* 查询一条数据
     * 字段列表 表名 条件
     */
    public function selectRow($filed,$tb_name,$condition){
        try{
            $sql="select $filed from $tb_name where $condition limit 1";
            $result=$this->pdo->query($sql);
            $value=$result->fetch(\PDO::FETCH_ASSOC);
        }catch(\PDOException $error){
            echo '查询数据失败<br/>'.$error->getMessage();
            exit;
        }
        return $value;
    }
    /* 查询多条数据
     * 字段列表 表名 条件
     */
    public function selectRows($filed,$tb_name,$condition){
        try{
            $sql="select $filed from $tb_name where $condition";
            $result=$this->pdo->query($sql);
            $values=$result->fetchall();
        }catch(\PDOException $error){
            echo '查询数据失败<br/>'.$error->getMessage();
            exit;
        }
        return $values;
    }
}

$config=array(
    'scn'=>array(
        'p'=>'admin',
        'm'=>'student',
        'a'=>'listPage',
    ),
    'mysql'=>array(
        'type'=>'mysql',
        'host'=>'localhost',
        'port'=>3306,
        'charset'=>'utf8',
        'dbname'=>'db_student',
        'acc'=>'root',
        'pwd'=>'root'
    )
);
