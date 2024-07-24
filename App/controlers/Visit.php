<?php


/**contact class */
class Visit
{
    use Controller;
    public function index()
    {

        
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $visit = new Visitor;
            if ($visit->validate($_POST)) {
           

                $visit->insert($_POST);
                redirect('programme');
            }
           
           







            $data['errors'] = $visit->errors;
        }



        $this->view('visit', $data);
    }
}
