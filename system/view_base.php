<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

class view_base extends bmvc_base {
    
    public $viewName = '';
    public $data = array();
    
    
    
    public function __construct( $viewName='', array $data=array() ) {
        parent::__construct();
        $this->viewName = $viewName;
        $this->data = $data;
    }
    
    public function render(){
        $retval = '';
        
        ob_start();
            include $this->config->appRoot.'/view/'.$this->viewName.'.php';
            $retval = ob_get_contents();
        ob_end_clean();        
        
        return $retval;
    }
    

}

?>