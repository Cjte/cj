<?php

/**contact class */
class Bloger
{
    use Controller;

    public function index()
    {
        $data = [];
        $this->errors=[];
        
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $user = new Post;
            if ($user->validate($_POST)) {
                $user->insert($_POST);

                // Redirect function should be defined elsewhere
                // redirect('blog');
            }

            if (isset($_FILES["fileToUpload"]) && !empty($_FILES["fileToUpload"]["name"])) {
                $targetDirectory = "./public/assets/images/blogersimg/bl"; // Directory where uploaded files will be saved
                $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]); // Path to save the uploaded file

                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension

                // Check if image file is a actual image or fake image
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if ($check !== false) {
                    $this->errors['name'] = 'File chek.';
                    $uploadOk = 1;
                } else {
                    $this->errors['name'] = 'File is not a image.';
                    $uploadOk = 0;
                }

                // Check if file already exists
                if (file_exists($targetFile)) {
                    $this->errors['name'] = 'File alredy exists.';
                    $uploadOk = 0;
                }

                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 5000000) { // 5MB limit
                    $this->errors['name'] = 'File is too big.';
                    $uploadOk = 0;
                }

                // Allow certain file formats
                $allowedFormats = array("jpg", "png", "jpeg");
                if (!in_array($imageFileType, $allowedFormats)) {
                    $this->errors['name'] = 'Sorry, only JPG, JPEG, PNG files are allowed..';
                    $uploadOk = 0;
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    $this->errors['name'] = 'Sorry, your file was not uploaded.';
                    
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                        redirect('blog');
                    } else {
                        $this->errors['name'] = 'Sorry, something went wrong.';
                    }
                }
            }

            $data['errors'] = $user->errors;
            $data["imgc"]=$this->errors;
        }

        // Assuming view() function renders the view
        // Check if 'bloger' view file exists
        $this->view('bloger', $data);
    }
}

