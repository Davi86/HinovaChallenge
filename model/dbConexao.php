<?php
    namespace Models;

    abstract class dbConexao{

        #Connect to database
        protected function conectaDB(){
            try{
                return $con= new \PDO(dsn:"mysql:host=".HOST.";dbname=".DB."",username:USER, password: PASS);
            }catch(\PDOException $erro){
                return $erro->getMessage();
            }
        }
    }
