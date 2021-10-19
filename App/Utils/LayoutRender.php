<?php

namespace App\Utils;
use App\Utils\View;

class LayoutRender{
    
    public function getLayout($dir,$title,$content){
        return View::render("{$dir}",[
        "URL"=>DIRPAGE,
        "title"=>$title,
        "content"=>$content,
        ]);
    }

    public function getLayout2($dir,$title,$arry_contents=[]){

        return View::render("{$dir}",[
            "URL"=>DIRPAGE,
            "title"=>$title,
            "endereco"=>$arry_contents['endereco'],
            "telefone1"=>$arry_contents['telefone1'],
            "telefone2"=>$arry_contents['telefone2'],
            "twitter"=>$arry_contents['twitter'],
            "facebook"=>$arry_contents['facebook'],
            "instagram"=>$arry_contents['instagram'],
            "linkedin"=>$arry_contents['linkedin'],
            "email"=>$arry_contents['email'],
            "about"=>$arry_contents['about'],
            "services"=>$arry_contents['services'],
            "services2"=>$arry_contents['services2'],
            "slide"=>$arry_contents['slide'],
            "portfolio"=>$arry_contents['portfolio'],
            "team"=>$arry_contents['team'],
            "contacts"=>$arry_contents['contacts']
        ]);
    }

}