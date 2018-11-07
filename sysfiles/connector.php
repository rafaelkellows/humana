<?php
class Conn {
    public $pdo = NULL;
    private $sql = NULL;
    
    public function SQLselector($identifiers,$table,$conditions,$orderby) {
        $pdo = mysql_connect('db_humanamagna.mysql.dbaas.com.br','db_humanamagna', 'Humana1@2Magna') or die ('Falha ao conectar no Servidor!');
        mysql_select_db('db_humanamagna', $pdo);
        
        //$pdo = mysql_connect('127.0.0.1','root', '') or die ('Falha ao conectar no Servidor!');
        //mysql_select_db('db_humanamagna', $pdo);
        
        // String de Ação
        $sqlWhere = ($conditions!='') ? 'WHERE ' . $conditions : '';
        $sqlOrderby = ($orderby!='') ? 'ORDER BY ' . $orderby : '';
        $sql = "SELECT {$identifiers} FROM {$table} ".$sqlWhere.' '.$sqlOrderby;

        $all = mysql_query($sql);
        return $all;        
    }
    public function SQLupdater($table,$identifiers,$conditions){
        $pdo = mysql_connect('db_humanamagna.mysql.dbaas.com.br','db_humanamagna', 'Humana1@2Magna') or die ('Falha ao conectar no Servidor!');
        mysql_select_db('db_humanamagna', $pdo);
        
        //$pdo = mysql_connect('127.0.0.1','root', '') or die ('Falha ao conectar no Servidor!');
        //mysql_select_db('db_humanamagna', $pdo);
        
        // String de Ação
        $sql = "UPDATE {$table} SET {$identifiers} WHERE {$conditions}";

        $all = mysql_query($sql);
        return $all;
    }
    public function SQLinserter($table,$identifiers,$values){
        $pdo = mysql_connect('db_humanamagna.mysql.dbaas.com.br','db_humanamagna', 'Humana1@2Magna') or die ('Falha ao conectar no Servidor!');
        mysql_select_db('db_humanamagna', $pdo);
        
        //$pdo = mysql_connect('127.0.0.1','root', '') or die ('Falha ao conectar no Servidor!');
        //mysql_select_db('db_humanamagna', $pdo);
        
        // String de Ação
        $sql = ("INSERT INTO $table ({$identifiers}) VALUES ({$values})");
        
        $all = mysql_query($sql);
        return $all;
    }
    public function SQLdeleter($table,$conditions){
        
        $pdo = mysql_connect('db_humanamagna.mysql.dbaas.com.br','db_humanamagna', 'Humana1@2Magna') or die ('Falha ao conectar no Servidor!');
        mysql_select_db('db_humanamagna', $pdo);
        
        //$pdo = mysql_connect('127.0.0.1','root', '') or die ('Falha ao conectar no Servidor!');
        //mysql_select_db('db_humanamagna', $pdo);
        
        // String de Ação
        $sql = "DELETE FROM {$table} WHERE {$conditions}";
        //$all = $pdo->query($sql);
        $all = mysql_query($sql);
        return $all;
    }
}
?>