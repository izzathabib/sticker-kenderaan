<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        // Access model created and assign it to $model variable
        $model = new \App\Models\User_model();
        // Retrieve value from button name="login"
        $login = $this->request->getPost('login');
        //  Check if there is value from button "login"
        // Then execute line within it
        if ($login) {
            $username = $this->request->getPost('username');
            $password= $this->request->getPost('password');
 
            /* If there is no value from either one of both, then it will display the error message */
            if ($username=="" or $password=="") {
                $err = "Sila masukkan username dan password";
            }
            if ($err) {
                session()->setFlashData('error', $err);
                // Redirect back to login controller
                return redirect()->to('login');
            }
        }
        return view('Login_view');
    }

}