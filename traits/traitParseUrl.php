<?php
    namespace Traits;

    trait TraitParseUrl{
        #Cria um array com a url digitada pelo usuário
        public static function parseUrl($par=null){
            $url = explode("/", rtrim($_GET['url'],FILTER_SANITIZE_URL));
            
            if(is_null($par)){
                if(array_key_exists($par, $url)){
                    return $url[$par];
                }else{
                    return false;
                }
            }else{
                return $url;
            }
        }
    }