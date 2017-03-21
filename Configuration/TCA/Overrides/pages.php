<?php
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', [
        'tx_clean_blog_networks' => array(
            'label'   => 'LLL:EXT:clean_blog/Resources/Private/Language/locallang_db.xlf:pages.tx_clean_blog_networks',
            'exclude' => 1,
            'config'  => array(
                'type'          => 'inline',
                'foreign_table' => 'tx_cleanblog_domain_model_network',
                'foreign_field' => 'page',
                'maxitems'      => 10,
                'appearance'    => [
                    'collapseAll' => 0
                ],
            )
        )
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages',
    '--div--;CleanBlog, tx_clean_blog_networks', '',
    'after:categories');


$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] .= 'tx_clean_blog_networks';