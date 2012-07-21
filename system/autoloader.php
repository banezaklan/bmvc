<?php

/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */
class autoloader {

    static public function loader($className) {

        $folders = array('system', 'controller', 'model', 'view');

        if (class_exists($className, FALSE)) {
            return;
        }
        
        $classFound = false;
        $classLoaded = false;
        
        foreach ($folders as $f) {
            $filename = $f . '/' . $className . '.php';
            if (file_exists($filename)) {
                $classFound = TRUE;
                require_once($filename);
                if (class_exists($className)) {
                    $classLoaded = true;
                    break;
                }
            }
        }

        if (!$classFound) {
            throw new Exception('File '.$filename.' was not found!');
        }
        
        if (!$classLoaded) {
            throw new Exception('Class '.$filename.' was not loaded!');
        }
        
        return FALSE;
    }

}

?>