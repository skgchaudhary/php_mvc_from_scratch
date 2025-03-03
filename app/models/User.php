<?php    
    class User {
        use Model;
        private $object = "user";
        private $allowed_columns = array('email');
    }