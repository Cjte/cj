<?php

class User
{
    use Model;

    protected $table = 'connect';

    protected $allowdColumns = [
        'name',
        'phone',
        'email',
        'message',
    ];

    public function validate($data)
    {
        $this->errors = [];


     
      


        if (empty($data["name"])) {
            $this->errors['name'] = 'name is requred.';
        } else if (!filter_var($data["name"], FILTER_SANITIZE_SPECIAL_CHARS)) {
            $this->errors['name'] = 'Enter valid charucters only.';
        }
        if (empty($data["email"])) {
            $this->errors['email'] = 'email is requred.';
        } else if (!filter_var($data["email"], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'Email is not valid.';
        }

        if (empty($data["phone"])) {
            $this->errors['phone'] = 'Phone Number is requred.';
        } else if (!filter_var($data["name"], FILTER_SANITIZE_SPECIAL_CHARS)) {
            $this->errors['phone'] = 'Enter valid pnone numbers.';
        }

        if (empty($data["message"])) {
            $this->errors['message'] = 'you cannot send blank message.';
        }


        if (empty($this->errors)) {
            return true;
        } else {
            return false;
        }
    }
}



