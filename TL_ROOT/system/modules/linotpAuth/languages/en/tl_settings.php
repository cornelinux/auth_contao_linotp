<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * @copyright  2013, Cornelius Kölbel
 * @author     Cornelius Kölbel <corny@cornelinux.de>
 * @package    linotpAuth
 * @license    GPLv3
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_legend'] = 'LinOTP Authentication';

// fields
$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_URL'] = array('URL', 'The URL of the LinOTP-Server. (E.g. https://localhost/validate/check)');
$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_Realm'] = array('Realm', 'The Realm of the user.');
$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_timeout'] = array('Timeout', 'Timeout of the authentication request.');
$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_verifySSL'] = array('check SSL certificate', 'The validity of the SSL certificate is checked. If the certificate is not valid authentication fails!');
$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_veriifyHost'] = array('check hostname', 'The correct hostname in the SSL certificate is checked. If the hostname is not correct authentication fails!');

