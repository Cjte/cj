<?php
// File: ./App/controllers/HomeController.php

class Leadership
{
    use Controller;

    public function index()
    {
        $this->view('leadership');
    }
}