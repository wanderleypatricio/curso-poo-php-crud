<?php
spl_autoload_register(function ($class_name) {
    $rotas = ["./app/db/", "./app/DAO/", "./app/Controllers/", "./app/Models/"];
    foreach($rotas as $rota){
        if(file_exists($rota."".$class_name.'.php')){
            require_once $rota."".$class_name . '.php';
        }
        
    }    
});

spl_autoload_register();
?>