<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

class bmvc_config {
    
    private static $m_pInstance;
    public $appRoot = '';
    public $urlRoot = '';
    

    private function __construct() {
        
        $this->appRoot = dirname(__FILE__) . '/..';
        $this->urlRoot = 'http://localhost/bmvc';

    }

    
    public static function getInstance() {
        if (!self::$m_pInstance) {
            self::$m_pInstance = new bmvc_config();
        }

        return self::$m_pInstance;
    }

    

}

?>