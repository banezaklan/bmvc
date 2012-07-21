<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

class controller_main_layout extends controller_base {

    public $pageTitle = "";
    public $topMenuUrls = array();
    
    public function __construct() {
        parent::__construct();
        
        $this->layout = new view_base('layout_main');
        
    }
    
    public function action_index() {
        
    }
    
    
    public function render(){
        
        if (isset($this->layout) && $this->layout!='') {
            $this->layout->data['page_title'] = $this->pageTitle;
            $this->layout->data['content'] = $this->view->render();
            echo $this->layout->render();
        }

    }

    
}

?>