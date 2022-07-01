<?php
// Redirection function:
    function redirect($url)
    {
        header("Location: $url");
        exit;
    }

// Validation Function

    function validate_input($inputs){
        if (empty($inputs['name'])) {
            $error = 'name is required';
        }
        if (empty($inputs['email'])) {
            $error = 'email is required';
        }
        if (empty($inputs['comment'])) {
            $error = 'comment is required';
        }
    }




?>

