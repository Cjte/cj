<?php
class App
{
    private $controller = 'Home';
    private $method = 'index';
    private function spliturl()
    {
        $URL = $_GET['url'] ?? 'home';
        
        
        $URL = explode("/", trim($URL, '/'));
        
        return $URL;
    }
    public function loadcntroller()
    {
        $URL = $this->spliturl();
        

       
        /**select cotroller */

        $filename = "../App/controlers/" . ucfirst(end($URL)) . ".php";
        if (file_exists($filename)) {
            require $filename;
            $this->controller = ucfirst(end($URL));
            unset($URL[0]);
        } else {
            require '../App/controlers/_404.php';
            $this->controller = "_404";
            
        }
        $controller = new $this->controller;

        /**select method */
        if (!empty($URL[1])) {
            # code...
            if (method_exists($controller, $URL[1])) {
                $this->method = $URL[1];
                unset($URL[1]);
            }
        }


        call_user_func_array([$controller, $this->method], $URL);
    }
}
