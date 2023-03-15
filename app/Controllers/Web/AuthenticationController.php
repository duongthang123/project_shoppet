<?php

require_once("app/Model/User.php");
require_once("app/requests/web/AuthenticationRequest.php");


class AuthenticationController
{

    private $user;

    public function __construct()
    {
        $this->user = new User();
    }


    public function showlogin()
    {
        require "views/web/authentication/login.php";
    }

    public function login() {
        if(isset($_POST['btn_login'])) {
            $loginRequest = new AuthenticationRequest();
            $loginErrors = $loginRequest->VilidateLogin($_POST);

            if(count($loginErrors) == 0) {
                $usersResponstory = new User();

                $email = $_POST['email'];
                $password = $_POST['password'];
                $user = $usersResponstory->getUserByEmailPassword($email, $password);
                
                if($user) {
                    $_SESSION['user'] = $user;
                    header("location: index.php?controller=homepage&action=index&module=web");
                }else {
                    $loginErrors['error'] = "Bạn đã điền sai email hoặc mật khẩu. Vui lòng nhập lại!";
                    require_once "views/web/authentication/login.php";
                }
                
            } else {
                require_once "views/web/authentication/login.php";
            }
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        unset($_SESSION['user']);
        header("location: index.php?controller=authentication&action=showlogin&module=web");
    }

    public function showregister()
    {
        require "views/web/authentication/resgister.php";
    }
}