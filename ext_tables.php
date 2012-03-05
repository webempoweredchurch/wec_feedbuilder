<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'FeedTab',
	'WEC FeedBuilder'
);

if (TYPO3_MODE == 'BE') {
	Tx_Extbase_Utility_Extension::registerModule(
		$_EXTKEY,
		'user',       // Make Blank module a submodule of 'user'
		'FeedTab',  // Submodule key
		'',           // Position
		array(
			'FeedTab' => 'index,new,create,delete,show,edit,update,createvideo,createaudio,createblog,createnews,createabout,createwebesite,createprayer',
		),
		array(
			'access' => 'user,group',
      'icon'   => 'EXT:wec_feedbuilder/ext_icon.gif',
			'labels' => 'LLL:EXT:wec_feedbuilder/Resources/Private/Language/locallang_mod.xml',
		)
	);
}
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'FeedBuilder');

//$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
//t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_list.xml');


t3lib_extMgm::addLLrefForTCAdescr('tx_wecfeedbuilder_domain_model_feedtab','EXT:wec_feedbuilder/Resources/Private/Language/locallang_csh_tx_wecfeedbuilder_domain_model_feedtab.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_wecfeedbuilder_domain_model_feedtab');
$TCA['tx_wecfeedbuilder_domain_model_feedtab'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:wec_feedbuilder/Resources/Private/Language/locallang_db.xml:tx_wecfeedbuilder_domain_model_feedtab',
		'label' 			=> 'type',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/FeedTab.php',
    'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_wecfeedbuilder_domain_model_feedtab.gif',
    'type'  => 'classname'
	)
);

$TCA['tx_wecfeedbuilder_domain_model_feedtype'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:wec_feedbuilder/Resources/Private/Language/locallang_db.xml:tx_wecfeedbuilder_domain_model_feedtype',
		'label' 			=> 'type',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/FeedType.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_wecfeedbuilder_domain_model_feedtype.gif'
	)
);
?>
