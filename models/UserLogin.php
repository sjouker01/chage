<?php

namespace Models\UserLogin;

use Models\Model;

class LoginUser extends Model
{
    public function login($username, $password)
    {
        $stmt = $this->db->conn->prepare('SELECT voor_naam, user_id FROM gebruikers WHERE voor_naam = ? AND wachtwoord = ?');
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