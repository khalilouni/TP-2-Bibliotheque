<?php

class ControllerHome{

    public function index(){
       return Twig::render('livre-index.php');
    }

    public function error(){
        return Twig::render('error.php');
    }
    
}