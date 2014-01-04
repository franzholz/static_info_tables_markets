<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['static_markets'] = array (
	'ctrl' => $TCA['static_markets']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'country,mic,institution_description,acronym,city,url'
	),
	'feInterface' => $TCA['tx_staticmarkets_markets']['feInterface'],
	'columns' => array (
		'country' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:static_info_tables/locallang_db.xml:static_markets.country',
			'config' => Array (
				'type' => 'select',
				'foreign_table' => 'static_countries',
				'foreign_table_where' => 'AND static_countries.pid=###SITEROOT### ORDER BY static_countries.uid',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
			)
		),
		'mic' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:static_info_tables/locallang_db.xml:static_markets.mic',
			'config' => Array (
				'type' => 'input',
				'size' => '5',
				'max' => '4',
				'eval' => 'trim',
			)
		),
		'institution_description' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:static_info_tables/locallang_db.xml:static_markets.institution_description',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '90',
				'eval' => 'trim',
			)
		),
		'acronym' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:static_info_tables/locallang_db.xml:static_markets.acronym',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'city' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:static_info_tables/locallang_db.xml:static_markets.city',
			'config' => Array (
				'type' => 'input',
				'size' => '30',
				'max' => '30',
				'eval' => 'trim',
			)
		),
		'url' => Array (
			'exclude' => 1,
			'label' => 'LLL:EXT:static_info_tables/locallang_db.xml:static_markets.url',
			'config' => Array (
				'type' => 'input',
				'size' => '48',
				'max' => '90',
				'eval' => 'trim',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'country;;;;1-1-1, mic, institution_description, acronym, city, url')
	),
);

?>