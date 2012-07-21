<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

class model_base extends bmvc_base {
    
    
    private $dbConnection = null;
    public $db = null;
    
    public function __construct() {
        parent::__construct();
        $this->dbConnection = db_connection::getInstance();
        
    }
    
    public function query($sql){
        return $this->dbConnection->db->query($sql);
    }
    
        
    
    public function getOne($sql){
        $sth = $this->dbConnection->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function execute($sql){
        $sth = $this->dbConnection->db->prepare($sql);
        $sth->execute();        
    }
    

}

?>