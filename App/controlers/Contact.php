<?php


/**contact class */
class Contact
{
    use Controller;
    public function index()
    {

        
        $data = [];
        $this->success=0;
        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            $user = new User;
            if ($user->validate($_POST)) {
           

                $user->insert($_POST);
                redirect('contact');
                $this->success['success'] = 1;
            }
           
           
            







            $data['errors'] = $user->errors;
            $data['success']=$this->success;
        }



        $this->view('contact', $data);
    }
}
