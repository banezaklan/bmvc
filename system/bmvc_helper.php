<?php

/**
 * Description of bmvc_helper
 * Class to place all your helper methods.
 * 
 * @author Branislav Zaklan bzaklan@gmail.com
 * @since Jul 21, 2012
 */
class bmvc_helper {
    /**
     *
     * @param string $controller
     * @param string $action
     * @param array $params
     * @throws Exception 
     */
    public static function getUrl( $controllerName, $actionName, $params=null){
        
        if (!isset($controllerName) || $controllerName=='' || !isset($actionName) || $actionName=='') {
            throw new Exception('Bad parameters when requesting URL generation.');
        }
        $config = bmvc_config::getInstance();
        
        
        $url = $config->urlRoot.'/'.$controllerName.'/'.$actionName;
        
        if (isset($params) && count($params)>0) {
            foreach ($params as $param) {
                $url.='/'.$param;
            }
        }
        
        return $url;
    }    
}

?>
