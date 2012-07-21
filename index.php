<?php
/**
 * @author Bane Zaklan, bzaklan@gmail.com
 * @since Jul 16, 2012
 *
 * Decription:
 * 
 */

error_reporting(E_ALL | E_STRICT);
ini_set("display_errors", 1);

$app_root = dirname(__FILE__);

//Class autoloader
include ($app_root.'/system/autoloader.php');
spl_autoload_register('Autoloader::loader');

//Trap non existent class calls
class ClassNotFoundException extends Exception{}


try{
    //Execute the MVC request
    bmvc_router::dispatch($_SERVER['REQUEST_URI']);
    
} catch (ClassNotFoundException $e) {
    echo $e->getMessage();
    exit();
} catch (Exception $e) {
    echo $e->getMessage();
    echo '<br><br>';
    echo $e->getTraceAsString();
    exit();
}



