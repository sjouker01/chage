<?php

namespace BeveiligingApp\Models;


/**
 * class login controller 
 * 
 * dit kijkt of er iemand is ingelogd is en zo ja kijkt naar de rol van user 
 * @package loginController
 */
class LoginController {


    /**
     *  kijkt of user is ingelogd 
     * 
     * @return bool true als user is ingelogd , anders is het false
     */
    public static function checkLogin(){
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        return isset($_SESSION['id_user']);
    }


    /**
     * 
     * kijkt naar rol van user en laat pagina zien 
     * en als niet ingelogd is dan terug naar index
     * 
     * @return void
     */

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