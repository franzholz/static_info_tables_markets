<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

// Static markets from ISO 10383
$TCA['static_markets'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:static_info_tables_markets/locallang_db.xml:static_markets.title',
		'label'     => 'institution_description',
		'readOnly' => 1,
		'adminOnly' => 1,
		'rootLevel' => 1,
		'is_static' => 1,
		'default_sortby' => 'ORDER BY institution_description',
		'dynamicConfigFile' => t3lib_extMgm::extPath('static_info_tables_markets') . 'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath('static_info_tables_markets') . 'icon_static_markets.gif',
	),
	'interface' => Array (
		'showRecordFieldList' => 'country,mic,institution_description,acronym,city,url',
	)
);

$TCA['static_markets']['ctrl']['readOnly'] = 0;

?>