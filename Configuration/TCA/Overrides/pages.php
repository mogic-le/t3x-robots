<?php
/**
 * Pages table: add custom fields
 *
 * @link https://docs.typo3.org/typo3cms/TCAReference/
 */
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}
$tempColumns = array(
	'tx_robots_flags' => array(
		'exclude' => true,
		'label' => 'LLL:EXT:robots/locallang_db.xml:pages.tx_robots_flags',
		'config' => array(
			'type' => 'check',
			'cols' => 2,
			'items' => array(
				array('LLL:EXT:robots/locallang_db.xml:pages.tx_robots_flags.I.0', ''),
				array('LLL:EXT:robots/locallang_db.xml:pages.tx_robots_flags.I.1', ''),
			),
		)
	),
);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'pages', $tempColumns, 1
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages', 'tx_robots_flags;;;;1-1-1', '1,2', 'before:TSconfig'
);
?>
