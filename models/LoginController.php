<?php

namespace BeveiligingApp\Models;

class LoginController {
    public static function checkLogin(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION['id_user']);
    }

    public static function showAccountPage(){
        if (self::checkLogin()) {
            $userid = $_SESSION['id_user'];
            if ($userid == 1) {
                include 'template_admin.php';
            } else {
                include 'template_user.php';
            }
        } else {
            header('Location: index.php');
            exit();
        }
    }
}