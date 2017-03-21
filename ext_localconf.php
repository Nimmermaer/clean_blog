<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Mb.' . $_EXTKEY,
	'Social',
	array(
		'Network' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Network' => 'create, update, delete',
		
	)
);
if (TYPO3_MODE === 'BE') {
	$backendLayoutFileProviderDirectory = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName(
		'EXT:'.$_EXTKEY.'/Configuration/TypoScript/Setup/Backendlayouts'
	);
	$beFiles                            = \TYPO3\CMS\Core\Utility\GeneralUtility::getFilesInDir($backendLayoutFileProviderDirectory,
		'ts');
	foreach ($beFiles as $beLayoutFileName) {
		$beLayoutPath = $backendLayoutFileProviderDirectory . DIRECTORY_SEPARATOR . $beLayoutFileName;
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(file_get_contents($beLayoutPath));
	}

}
