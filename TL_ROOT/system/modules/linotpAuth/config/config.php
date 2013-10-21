<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * @copyright  2013, Cornelius Kölbel
 * @author     Cornelius Kölbel <corny@cornelinux.de>
 * @package    linotpAuth
 * @license    GPLv3
 * @filesource
 */

// hooks
$GLOBALS['TL_HOOKS']['checkCredentials'][] = array('LinOTPAuth', 'authenticate');

// predefine system setting defaults
$GLOBALS['TL_CONFIG']['linotpAuth_URL'] = 'https://localhost/validate/check';
$GLOBALS['TL_CONFIG']['linotpAuth_Realm'] = "";
$GLOBALS['TL_CONFIG']['linotpAuth_verifySSL'] = FALSE;
$GLOBALS['TL_CONFIG']['linotpAuth_verifyHost'] = FALSE;
$GLOBALS['TL_CONFIG']['linotpAuth_timeout'] = 5;


?>
