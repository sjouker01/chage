<?php

namespace BeveiligingApp\Models\UserLogin;

use BeveiligingApp\Models\Model;

/**
 * Class UserLogin
 * 
 * dit is is class voor login 
 * 
 * @package BeveiligingApp\Models\UserLogin
 */
class UserLogin extends Model
{
    /**
     * Logs in a user with the provided username and password.
     *
     * @param string $username The username of the user.
     * @param string $password The password of the user.
     * @return void
     */
    public function login($username, $password)
    {
        $stmt = $this->db->conn->prepare('SELECT voor_naam FROM gebruikers WHERE voor_naam =? AND Wachtwoord =?');
        if ($stmt){
            $stmt->bind_param('ss', $username, $password);
            $stmt->execute();
            $result = $stmt->get_result();
            $userdata = $result->fetch_assoc();

            if ($userdata){
                $_SESSION['voor_naam'] = $userdata['voor_naam'];
                $_SESSION['loggedin'] = true;
                $_SESSION['id_user'] = $userdata['user_id'];
                echo "Login successful";
                sleep(1);
                header("Location: #");
            } else{
                echo "Login failed. Email or password is incorrect.";
            }
            $stmt->close();
        }
    }
}