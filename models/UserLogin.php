<?php

namespace BeveiligingApp\Models\UserLogin;

use BeveiligingApp\Models\Model;

class UserLogin extends Model
{
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