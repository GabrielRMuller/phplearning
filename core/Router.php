<?php


class Router{
 
    
        public $routes = [

            'GET' => [],
            'POST' => []

        ];


        public function define($routes){


            $this->routes = $routes;


        }

        public function get($uri, $controller){

            $this->routes['GET'][$uri] = $controller;


        }
        
        public function post($uri, $controller){

            $this->routes['POST'][$uri] = $controller;


        }


        public function direct($uri){


           if(array_key_exists($uri, $this->routes)){
               return $this->routes[$uri];
           }

        throw new Exception('Nao achei um URI');
        }
}
