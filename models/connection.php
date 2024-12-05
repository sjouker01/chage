<?php
namespace BeveiligingApp\Models\Connection;

use mysqli;

/**
 * Class Database
 * 
 * Deze class verzorgt de verbinding met de database.
 * * @package BeveiligingApp\Models\Connection
 */
class Database {

    /**
     * @var string naam van server
     */
    private $servername = "localhost";
    
    /**
     * 
     * @var string naam gebruikersnaam van database
     */
    private $username = "root";

    /**
     * 
     * @var string wachtwoord database
     */
    private $password = "Welkom01";
    /**
     * 
     * @var string database name
     */
    private $dbname = "LMS_Veiligheid";

    /**
     * 
     * @var mysqli 
     */
    public $conn;
    public $error;

    /**
     * Constructor
     * 
     * Maakt een nieuwe databaseverbinding aan.
     */
    public function __construct() {
        // Maak verbinding
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Controleer verbinding
        if ($this->conn->connect_error) {
            $this->error = "Verbinding mislukt: " . $this->conn->connect_error;
        }
    }

    /**
     * Destructor
     * 
     * Sluit de databaseverbinding.
     */
    public function __destruct() {
        // Sluit de verbinding
        if ($this->conn) {
            $this->conn->close();
        }
    }

    /**
     * Controleer de verbindingsstatus
     * 
     * @return bool True als de verbinding succesvol is, anders false.
     */
    public function isConnected() {
        return $this->conn && !$this->conn->connect_error;
    }

    /**
     * Haal de foutmelding op
     * 
     * @return string De foutmelding als de verbinding mislukt is.
     */
    public function getError() {
        return $this->error;
    }
}
