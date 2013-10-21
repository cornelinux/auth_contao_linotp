<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * @copyright  2013, Cornelius Kölbel
 * @author     Cornelius Kölbel <corny@cornelinux.de>
 * @package    linotpAuth
 * @license    GPLv3
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_legend'] = 'LinOTP Authentisierung';

// fields
$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_URL'] = array('URL', 'Die URL, unter der die Validate-API des LinOTP-Servers erreicht wird. (Bspw. https://localhost/validate/check)');
$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_Realm'] = array('Realm', 'Der Realm, in dem der Benutzer authentifiziert wird.');
$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_timeout'] = array('Timeout', 'Timeout der Authentisierungsanfrage');
$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_verifySSL'] = array('SSL Zertifikat überprüfen', 'Die Gültigkeit des SSL-Zertifikats wird überprüft. Wenn es ungültig ist, schlägt die Authentisierung fehlt!');
$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_verifyHost'] = array('Hostname überprüfen', 'Der korrekte Hostname im SSL-Zertifikat wird überprüft. Wenn er nicht passt, schlägt die Authentisierung fehl!');

