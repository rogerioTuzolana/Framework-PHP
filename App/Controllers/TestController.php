<?php

namespace App\Controllers;

class TestController{

    public function __construct(){

    }

    public function index(){
        $arr=array("j","a","a","b","c");
        print_r($arr);
        echo "<br>Val: ".array_search("c",$arr);
    }
    

    public function store(){

    }

}