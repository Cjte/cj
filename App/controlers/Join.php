<?php


/**contact class */
class Join
{
    use Controller;
    public function index()
    {

        
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $join = new Member;
            if ($join->validate($_POST)) {
           

                $join->insert($_POST);
                redirect('about');
            }
           
           







            $data['errors'] = $join->errors;
        }



        $this->view('join', $data);
    }
}
