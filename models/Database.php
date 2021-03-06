<?php
class Database{
    
    private static $db;

    private function __construct(){
        
        $host='localhost';
        $name='bar';
        $usuario='root';
        $senha='';
        $driver='mysql';

        try{
            #Atribui o objeto PDO a variável estática
            self::$db=new PDO("$driver:host=$host;dbname=$name", $usuario, $senha);
            
            #Garantir que execeções sejam lançadas em caso de erro.
            self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            #Garantir que dados armazenados estejam na codificação UTF8
            self::$db->exec('SET NAMES utf8');
            
        }catch(PDOException $e){
          
            die("connection Error".$e->getMessage());
        }
        

    }
    public static function conexao(){
        if(!self::$db){
            new Database();
        }
        return self::$db;
     
    }
}