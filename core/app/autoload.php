<?php
// autoload.php
// 10 octubre del 2014
// esta funcion elimina el hecho de estar agregando los modelos manualmente


spl_autoload_register(function($classname) {
    $paths = [
        __DIR__ . "/app/",
        __DIR__ . "/controller/",
        __DIR__ . "/model/",
    ];
    foreach ($paths as $path) {
        $file = $path . $classname . ".php";
        if (file_exists($file)) {
            include_once $file;
            return;
        }
    }
});




?>