<?php 

namespace  App\Controllers;

use Models\Login\LoginCheck;



class AcountControllor {

public function __construct() {
}public function showAccountPage($loginCheck) {
    // Implement the function logic here
    return "Account Page for user";
}

public function CheckLogin() {
    $loginCheck = new LoginCheck();
    $loginCheck->CheckLogin();
    return $loginCheck->CheckLogin();
}
  
} 
