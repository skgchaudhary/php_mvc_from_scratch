<?php
    spl_autoload_register(function($class) {
        require "../app/models/$class.php";
    });
    require "functions.php";
    require "config.php";
    require "Database.php";
    require "Controller.php";
    require "Model.php";
    require "App.php";    
    