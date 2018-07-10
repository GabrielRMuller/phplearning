<?php


class PageController{

    public function Home(){

        $users = App::get('database')->selectAll('users');

        require 'views/index.view.php';
    }
    
    public function About(){

        require 'views/about.view.php';
    }
    
    public function Contact(){

        require 'views/contact.view.php';
    }



}