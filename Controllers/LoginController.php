<?php

namespace App\Controllers;


use Models\UserLogin\UserLogin;



class LoginController
{
    
    /**
     * Summary of handleRequest
     * @return mixed
     */
    public function handleRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();

            $username = $_POST['email'];
            $password = $_POST['password'];

            $userLogin = new UserLogin();
            $userLogin->login($username, $password);
        }
    }
}