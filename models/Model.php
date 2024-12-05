<?php 
namespace BeveiligingApp\Models;

use BeveiligingApp\Models\Connection\Database;

/**
 * 
 * class baseModel
 * 
 * dit is base model voor data base comunucatie 
 * 
 * 
 * @package BeveiligingApp\Models
 */

class Model 
{   

    /**
     * 
     * @var Database 
     */
    protected $db;


    /**
     * construtor van model
     * 
     * maakt connectie maken met database
     */
    public function __construct()
    {
        $this->db = new Database();
    }


    /**
     * get the database connection 
     * 
     * @return mixed
     */

    public function getConnection()
    {
        return $this->db->conn;
    }
}