<?php
    class App {
        private $controller = "Home";
        private $method = "index";
        private function splitURL() {
            return explode("/", $_GET['url'] ?? 'home');
        }
        public function loadController() {
            $URL = $this->splitURL();
            $filename = "../app/controllers/" . ucfirst($URL[0]) . ".php";
            if(file_exists($filename)) {
                require $filename;
                $this->controller = ucfirst($URL[0]);
            } else {
                require "../app/controllers/_404.php";
                $this->controller = "_404";
            }
            $this->controller = new $this->controller;
            call_user_func_array([$this->controller, $this->method], []);
        }       
    }