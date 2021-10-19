<?php
//Diretorios raizes(interno e servidor)
$pasta_interna="framework";
define('DIRPAGE',"http://{$_SERVER['HTTP_HOST']}/{$pasta_interna}");

if(substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){
    define('DIRRZ',"{$_SERVER['DOCUMENT_ROOT']}{$pasta_interna}");
}else{
    define('DIRRZ',"{$_SERVER['DOCUMENT_ROOT']}/{$pasta_interna}/");
}
//Estilizacao
define('DIRCSS',"http://{$_SERVER['HTTP_HOST']}/{$pasta_interna}/css/");
define('DIRPLUG',"http://{$_SERVER['HTTP_HOST']}/{$pasta_interna}/admin/");
//Js
define('DIRJS',"http://{$_SERVER['HTTP_HOST']}/{$pasta_interna}/js/");
//imagens
define('DIRIMG',"http://{$_SERVER['HTTP_HOST']}/{$pasta_interna}/img/");
//video
define('DIRVID',"http://{$_SERVER['HTTP_HOST']}/{$pasta_interna}/video/");
//config acesso ao banco de dados
define('HOST', 'localhost');
define('DB', 'prestativ');
define('USER', 'root');
define('PASSWORD', '');

