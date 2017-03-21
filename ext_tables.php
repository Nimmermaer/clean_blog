<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'Mb.' . $_EXTKEY,
	'Social',
	'Social Links'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Clean Blog');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cleanblog_domain_model_network', 'EXT:clean_blog/Resources/Private/Language/locallang_csh_tx_cleanblog_domain_model_network.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cleanblog_domain_model_network');

$GLOBALS['TCA']['tx_cleanblog_domain_model_network']['ctrl']['requestUpdate'] = 'icon';
