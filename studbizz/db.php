<?php
error_reporting(0);
if(!class_exists('Database')){
    class Database{ 
        function Database() {
            return $this->connect();
        } 
        function connect() {
           // $link = mysql_connect('localhost','longshinegroup@localhost','longshine1*');
		   $link = mysql_connect('localhost','jcubitgr_ict','123zxc');
            if (!$link) {
                    die('Could not connect: ' . mysql_error());
            }

            $db_selected = mysql_select_db('jcubitgr_studbiz');

            if (!$db_selected) {
                    die('Can\'t use  project ' . mysql_error());
            }
        }
        function clean($array){
            return array_map('mysql_real_escape_string', $array);
        }
        function select($sql) { 
            return mysql_query($sql);
        }
		function get($sql) {
            $resource = $this->select($sql); 
            while($results[] = mysql_fetch_assoc( $resource ));
            array_pop($results); 
            return $results;
        }
	}
}

$database=new Database;