<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

Tx_Extbase_Utility_Extension::configurePlugin(
  $_EXTKEY,
  'FeedTab',
  array(
    'FeedTab' => 'toXML,index, show, new, create, edit, update, delete, createvideo',
  ),
  array(
    'FeedTab' => 'toXML',
  )
);

$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/realurl/class.tx_realurl_autoconfgen.php']['extensionConfiguration']['wec_feedbuilder'] = 'EXT:wec_feedbuilder/Classes/Hooks/class.tx_wecfeedbuilder_realurl.php:&tx_wecfeedbuilder_realurl->addRealURLConfig';

?>
