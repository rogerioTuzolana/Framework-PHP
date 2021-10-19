<?php

namespace App\Utils;

class View{

    public static function getContentView($view){
        $file=DIRRZ."../Src/Views/".$view.".phtml";
        //echo $file;
        return file_exists($file)? file_get_contents($file):'';
    }

    public static function render($view, $vars=[]){
        $contentView=self::getContentView($view);
        //Pegar as chaves do array
        $keys=array_keys($vars);
        $keys=array_map(function($item){
            return '{{'.$item.'}}';
        },$keys);
        //Substituir dados na views

        return str_replace($keys,array_values($vars),$contentView);
    }

}