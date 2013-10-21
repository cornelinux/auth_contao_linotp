<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * @copyright  2013, Cornelius Kölbel
 * @author     Cornelius Kölbel <corny@cornelinux.de>
 * @package    linotpAuth
 * @license    GPLv3
 * @filesource
 */


// Add to palette
$paletteMatch = 0;
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace(
  '{backend_legend', 
  '{linotpAuth_legend:hide},linotpAuth_URL,linotpAuth_Realm,linotpAuth_timeout,linotpAuth_verifySSL,linotpAuth_verifyHost;{backend_legend', 
  $GLOBALS['TL_DCA']['tl_settings']['palettes']['default'],
  $paletteMatch
  );
if($paletteMatch != 1) {
  $GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{linotpAuth_legend:hide},linotpAuth_URL,linotpAuth_Realm,linotpAuth_timeout,linotpAuth_verifySSL,linotpAuth_verifyHost';
} 

// Add to fields
$GLOBALS['TL_DCA']['tl_settings']['fields']['linotpAuth_URL'] = array
(
  'label'       =>  &$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_URL'],
  'default'     =>  '',
  'exclude'     =>  true,
  'inputType'   =>  'text',
  'eval'       => array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['linotpAuth_timeout'] = array
(
  'label'       =>  &$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_timeout'],
  'default'     =>  '5',
  'exclude'     =>  true,
  'inputType'   =>  'text',
  'eval'          => array('rgxp'=>'digit', 'maxlength'=>3, 'tl_class'=>'w50')

);
$GLOBALS['TL_DCA']['tl_settings']['fields']['linotpAuth_Realm'] = array
(
  'label'       =>  &$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_Realm'],
  'default'     =>  '',
  'inputType'   =>  'text',
  'eval'       => array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['linotpAuth_verifySSL'] = array
(
  'label'       =>  &$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_verifySSL'],
  'inputType'   =>  'checkbox',
  'eval'       => array('tl_class'=>'w50')
);
$GLOBALS['TL_DCA']['tl_settings']['fields']['linotpAuth_verifyHost'] = array
(
  'label'       =>  &$GLOBALS['TL_LANG']['tl_settings']['linotpAuth_verifyHost'],
  'inputType'     =>  'checkbox',
  'eval'       => array('tl_class'=>'w50')
);
?>
