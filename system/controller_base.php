<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

abstract class controller_base extends bmvc_base {

    public $view = '';
    public $layout = '';
    public $model = null;
    public $request = null;
   
    public function __construct() {
        parent::__construct();
        
    }
    
    public abstract function action_index();
    
    public abstract function render();
        
    public function redirect( $controllerName, $actionName, $params=array() ){
        header( 'Location: '.bmvc_helper::getUrl($controllerName, $actionName, $params) ) ;        
    }



}

?>