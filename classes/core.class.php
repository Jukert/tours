<?php



class Core{

    private $_db = null;

    function __construct($path)
    {
        $this->_db = include($path . "/config/config.php");
    }

    public function connectDB(){
        if ($this->_db == null){
            $ob = new Core();
        }
        R::setup('mysql:host='.$this->_db['db_host'].';dbname='.$this->_db['db_name'], $this->_db['db_user'], $this->_db['db_pass']);
        if (R::testConnection()){
            return;
        }else die("Нет соединения с БД");
}

    public function entryRegistr(){
        $bean = R::dispense('users');
        $bean->login =$_POST['login'];
        $bean->email =$_POST['email'];
        $bean->password =md5($_POST['password']);
        $bean->name =$_POST['name'];
        $bean->surname =$_POST['surname'];
        $bean->sex =$_POST['sex'];
        $bean->birthday =$_POST['birthday'];
        $bean->who =$_POST['user_reg'];
        R::store($bean);
    }

    public function authentication($login,$password){
        $bean = R::find('users','login = ?', array($login));
        foreach ($bean as $value => $item){
            if ($item->password == $password){
                return true;
            }
            else return false;
        }
        return false;
    }

}