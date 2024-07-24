<?php

trait Controller
{
    public function view($name, $data = [])
    {
        if (!empty($data)) {
            extract($data);
        }

        $filename = "../App/views/" . $name . ".view.php";
        if (file_exists($filename)) {
            require $filename;
        } else {
            require '../App/views/404.view.php';
        }
    }
}