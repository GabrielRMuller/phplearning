<?php

    class Connection{


        public static function make($config){
            
            try{
                return new PDO(
                    $config['connection'].';dbname='.$config['name'],
                    $config['username'],
                    $config['password'],
                    $config['options']
                );
            }catch(PDOexcepetion $e){
                die('n deu bao');
            }
        }
    }