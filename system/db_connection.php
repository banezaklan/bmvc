<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

class db_connection {
    
    private static $m_pInstance;
    
    public function __construct() {
        //Create DB connection
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bmvc";

        try {
            $this->db = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
            //echo "Connected to database"; // check for connection
        } catch (PDOException $e) {
            throw $e;
        }        
    }    
    
    public static function getInstance() {
        if (!self::$m_pInstance) {
            self::$m_pInstance = new db_connection();
        }

        return self::$m_pInstance;
    }    
    
    public function __destruct() {
        $this->db=null;
    }
    
    
    
}

?>
