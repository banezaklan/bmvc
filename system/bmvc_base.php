<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

class bmvc_base {
    
    /**
     *
     * @var bmvc_config
     */
    protected $config = null;
    
    public function __construct() {
        $this->config = bmvc_config::getInstance();
    }

}

?>