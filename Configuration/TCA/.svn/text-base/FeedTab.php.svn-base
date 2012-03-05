<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_wecfeedbuilder_domain_model_feedtab'] = array(
	'ctrl' => $TCA['tx_wecfeedbuilder_domain_model_feedtab']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'type,url,name,posturl'
	),
	'types' => array(
    '1' => array('showitem' => 'type,url,name,posturl'),
    'Tx_WecFeedbuilder_Domain_Model_AboutTab' => array(
      'showitem' => 'type,url,name'
    ),
    'Tx_WecFeedbuilder_Domain_Model_AudioSermonTab' => array(
      'showitem' => 'type,url,name'
    ),
    'Tx_WecFeedbuilder_Domain_Model_BlogTab' => array(
      'showitem' => 'type,url,name'
    ),
    'Tx_WecFeedbuilder_Domain_Model_NewsTab' => array(
      'showitem' => 'type,url,name'
    ),
    'Tx_WecFeedbuilder_Domain_Model_PrayerTab' => array(
      'showitem' => 'type,url,name'
    ),
    'Tx_WecFeedbuilder_Domain_Model_WebsiteTab' => array(
      'showitem' => 'type,url,name'
    ),
    'Tx_WecFeedbuilder_Domain_Model_VideoSermonTab' => array(
      'showitem' => 'type,url,name'
    )
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_wecfeedbuilder_domain_model_feedtab',
				'foreign_table_where' => 'AND tx_wecfeedbuilder_domain_model_feedtab.uid=###REC_FIELD_l18n_parent### AND tx_wecfeedbuilder_domain_model_feedtab.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'url' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:wec_feedbuilder/Resources/Private/Language/locallang_db.xml:tx_wecfeedbuilder_domain_model_feedtab.url',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'classname' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:wec_feedbuilder/Resources/Private/Language/locallang_db.xml:tx_wecfeedbuilder_domain_model_feedtab.classname',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'name' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:wec_feedbuilder/Resources/Private/Language/locallang_db.xml:tx_wecfeedbuilder_domain_model_feedtab.name',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'posturl' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:wec_feedbuilder/Resources/Private/Language/locallang_db.xml:tx_wecfeedbuilder_domain_model_feedtab.posturl',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
		'banner' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:wec_feedbuilder/Resources/Private/Language/locallang_db.xml:tx_wecfeedbuilder_domain_model_feedtab.banner',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			)
		),
	),
);
?>
