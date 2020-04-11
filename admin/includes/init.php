<?php 

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

$url = $_SERVER['HTTP_HOST'];
if(strstr($url,'localhost')==true) {

    defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:'. DS . 'xampp' . DS . 'htdocs' . DS . 'gallery' );

} elseif(strstr($url,'punipuni.space')==true) {

    defined('SITE_ROOT') ? null : define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS . 'gallery' );

}

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT . DS . 'admin' . DS . 'includes');

ob_start();

require_once(INCLUDES_PATH.DS."function.php");
require_once(INCLUDES_PATH.DS."database.php");
require_once(INCLUDES_PATH.DS."db_object.php");
require_once(INCLUDES_PATH.DS."user.php");
require_once(INCLUDES_PATH.DS."photo.php");
require_once(INCLUDES_PATH.DS."comment.php");
require_once(INCLUDES_PATH.DS."session.php");
require_once(INCLUDES_PATH.DS."paginate.php");

?>