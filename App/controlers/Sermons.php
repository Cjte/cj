<?php


/**home class */
class Sermons
{
    use Controller;
    public function index()
    {



        $this->view('sermons');
    }
}
