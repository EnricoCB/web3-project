<?php
    spl_autoload_register(function($class_name) {

        // Define an array of directories in the order of their priority to iterate through.
        $dirs = array(
            'controllers/', // controladores
            'models/', // modelos
            'system/',   // classes do sistema
        );

        // Looping through each directory to load all the class files. It will only require a file once.
        // If it finds the same class in a directory later on, IT WILL IGNORE IT! Because of that require once!
        foreach( $dirs as $dir ) {
            if (file_exists($dir.$class_name.'.php')) {
                require_once($dir.$class_name.'.php');
                return;
            }
        }
    });
?>