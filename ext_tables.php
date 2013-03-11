<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');


Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY, // The name of the extension in UpperCamelCase
	'Jpfaq', // A unique name of the plugin in UpperCamelCase
	'jpFAQ plugin'  // A title shown in the backend dropdown field
);

// flexform
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_jpfaq'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_jpfaq', 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform.xml');
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY . '_jpfaq'] = 'layout,select_key,recursive,pages';
 



t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'jpFAQ');




t3lib_extMgm::addLLrefForTCAdescr('tx_jpfaq_domain_model_question', 'EXT:jpfaq/Resources/Private/Language/locallang_csh_tx_jpfaq_domain_model_question.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_jpfaq_domain_model_question');
$TCA['tx_jpfaq_domain_model_question'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:jpfaq/Resources/Private/Language/locallang_db.xml:tx_jpfaq_domain_model_question',
		'label' 			=> 'question',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
            'sortby' => 'sorting',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Question.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_jpfaq_domain_model_question.gif'
	)
);

t3lib_extMgm::addLLrefForTCAdescr('tx_jpfaq_domain_model_category', 'EXT:jpfaq/Resources/Private/Language/locallang_csh_tx_jpfaq_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_jpfaq_domain_model_category');
$TCA['tx_jpfaq_domain_model_category'] = array (
	'ctrl' => array (
		'title'             => 'LLL:EXT:jpfaq/Resources/Private/Language/locallang_db.xml:tx_jpfaq_domain_model_category',
		'label' 			=> 'category',
		'tstamp' 			=> 'tstamp',
		'crdate' 			=> 'crdate',
		'versioningWS' 		=> 2,
		'versioning_followPages'	=> TRUE,
		'origUid' 			=> 't3_origuid',
		'languageField' 	=> 'sys_language_uid',
		'transOrigPointerField' 	=> 'l18n_parent',
		'transOrigDiffSourceField' 	=> 'l18n_diffsource',
            'sortby' => 'sorting',
		'delete' 			=> 'deleted',
		'enablecolumns' 	=> array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
		'iconfile' 			=> t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_jpfaq_domain_model_category.gif'
	)
);


?>