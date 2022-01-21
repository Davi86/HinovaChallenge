<?php

    #Caminhos absolutos

    $pastaInterna="HinovaChallenge/";

    //Caminho URL 
    define('DIRPAGE', "http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");

    $bar=(substr($_SERVER['DOCUMENT_ROOT'], -1)=='/') ? "" : "/";

    //Caminho Indice
    define('DIRREQ',"{$_SERVER['DOCUMENT_ROOT']}{$bar}{$pastaInterna}");

    #Incluir arquivos
    include(DIRREQ.'lib/composer/vendor/autoload.php');

    #Atalhos
    define('DIRIMG', DIRPAGE.'img/');
    define('DIRCSS', DIRPAGE.'lib/css');
    define('DIRJS', DIRPAGE.'lib/js');
    
    #Acesso ao db
    define('HOST',"localhost");
    define('DB',"cadastro");
    define('USER',"root");
    define('PASS',"");

?>