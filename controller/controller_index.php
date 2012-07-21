<?php

/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

class controller_index extends controller_main_layout {
    
    
    
    public function __construct() {
        parent::__construct();
        $this->pageTitle = "Home";
        
    }

    public function action_index() {
        //parent::action_index();
        //Default action (if not index)
        $this->action_welcome();
    }
    
    public function action_welcome() {

        $this->view = new view_base('view_index_welcome', array());
        $this->render();        

    }
    
    public function action_testing(){
        $this->view = new view_base('view_index_welcome', array());
        $this->render();
    }
    
    
    public function render() {
        parent::render();
    }
}

?>