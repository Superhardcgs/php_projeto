<?php
class ConectaBanco {
    public static $con;

    //Cria um objeto PDO no padrão Singleton
    public static function conexao(){

        if (!isset(self::$con)){
            $host = 'localhost:5432';
            $user = 'postgres';
            $pass = '123456';
            $db = 'postgres';

            try{
                self::$con = new PDO("postgresql:host=$host;dbname=$db", $user, $pass);
                self::$con->exec('SET CHARSET UTF8');
            }
            catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }

    return self::$con;

}
?>