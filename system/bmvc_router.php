<?php

/**
 * Description of bmvc_router
 * @author Branislav Zaklan bzaklan@gmail.com
 * @since Jul 21, 2012
 */
class bmvc_router {
    
    

    public static function dispatch($uri) {
        
        //Get requested URL and break it a part.
        $url = explode('/', trim($uri,'/') );
        
        array_shift($url);

        //Get controller name, default will be controller_index
        $controller = !empty($url[0]) ? 'controller_'.$url[0]  : 'controller_index';

        //Get action name, default to action_index
        $method = !empty($url[1]) ? 'action_'.$url[1] : 'action_index';

        //Get any parameters, 
        $params = array();
        if (isset($url[2])) {
            for ($i = 2; $i < count($url); $i++) {
                if (isset($url[$i])) {
                    $params[] = $url[$i];
                } else {
                    break;
                }
            }
        }        
        
        //Cerate controller
        /*@var $cont controller_base */
        $cont = new $controller;
        
        //Add request info to the controller.
        if (isset($_REQUEST) && count($_REQUEST)>0) {
            $cont->request = $_REQUEST;
        }
        
        //Execute the action
        $cont->$method($params);
    }

 
}
