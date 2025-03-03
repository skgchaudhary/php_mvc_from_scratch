<?php
    trait Database {
        function connect() {
            return new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
        }
    }