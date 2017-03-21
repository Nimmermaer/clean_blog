<?php
return array(
    'ctrl'      => array(
        'title'                    => 'LLL:EXT:clean_blog/Resources/Private/Language/locallang_db.xlf:tx_cleanblog_domain_model_network',
        'label'                    => 'title',
        'tstamp'                   => 'tstamp',
        'crdate'                   => 'crdate',
        'cruser_id'                => 'cruser_id',
        'dividers2tabs'            => true,
        'sortby'                   => 'sorting',
        'versioningWS'             => 2,
        'versioning_followPages'   => true,
        'languageField'            => 'sys_language_uid',
        'transOrigPointerField'    => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete'                   => 'deleted',
        'enablecolumns'            => array(
            'disabled'  => 'hidden',
            'starttime' => 'starttime',
            'endtime'   => 'endtime',
        ),
        'searchFields'             => 'title,link,icon,',
        'iconfile'                 => 'EXT:clean_blog/Resources/Public/Icons/tx_cleanblog_domain_model_network.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, link, icon',
    ),
    'types'     => array(
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, title, link, icon,custom_icon,  --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
    ),
    'palettes'  => array(
        '1' => array('showitem' => ''),
    ),
    'columns'   => array(

        'sys_language_uid' => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config'  => array(
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'foreign_table'       => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items'               => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', - 1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                ),
            ),
        ),
        'l10n_parent'      => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config'      => array(
                'type'                => 'select',
                'renderType'          => 'selectSingle',
                'items'               => array(
                    array('', 0),
                ),
                'foreign_table'       => 'tx_cleanblog_domain_model_network',
                'foreign_table_where' => 'AND tx_cleanblog_domain_model_network.pid=###CURRENT_PID### AND tx_cleanblog_domain_model_network.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource'  => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label'      => array(
            'label'  => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max'  => 255,
            )
        ),
        'hidden'           => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config'  => array(
                'type' => 'check',
            ),
        ),
        'starttime'        => array(
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config'    => array(
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime'          => array(
            'exclude'   => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label'     => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config'    => array(
                'type'     => 'input',
                'size'     => 13,
                'max'      => 20,
                'eval'     => 'datetime',
                'checkbox' => 0,
                'default'  => 0,
                'range'    => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'title'            => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:clean_blog/Resources/Private/Language/locallang_db.xlf:tx_cleanblog_domain_model_network.title',
            'config'  => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'custom_icon'      => array(
            'displayCond' => 'FIELD:icon:=:1',
            'exclude'     => 1,
            'label'       => 'LLL:EXT:clean_blog/Resources/Private/Language/locallang_db.xlf:tx_cleanblog_domain_model_network.custom_icon',
            'config'      => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ),
        ),
        'link'             => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:clean_blog/Resources/Private/Language/locallang_db.xlf:tx_cleanblog_domain_model_network.link',
            'config'  => array(
                'type'    => 'input',
                'size'    => 30,
                'eval'    => 'trim,required',
                'wizards' => [
                    'link' => [
                        'type'         => 'popup',
                        'title'        => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                        'icon'         => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_link.gif',
                        'module'       => [
                            'name' => 'wizard_link',
                        ],
                        'params'       => [
                            'blindLinkOptions' => 'mail,spec,folder,media,page,file',
                            'blindLinkFields'  => 'class,params,title'
                        ],
                        'JSopenParams' => 'height=800,width=600,status=0,menubar=0,scrollbars=1'
                    ]
                ],
                'softref' => 'typolink'
            ),
        ),
        'page'             => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        'icon'             => array(
            'exclude' => 1,
            'label'   => 'LLL:EXT:clean_blog/Resources/Private/Language/locallang_db.xlf:tx_cleanblog_domain_model_network.icon',
            'config'  => array(
                'type'       => 'select',
                'renderType' => 'selectSingle',
                'items'      => array(

                    [
                        'Facebook',
                        'fa-facebook'
                    ],
                    [
                        'Google',
                        'fa-google-plus'
                    ],
                    [
                        'Github',
                        'fa-github'
                    ],
                    [
                        'Twitter',
                        'fa-twitter'
                    ],
                    [
                        'Gitlab',
                        'fa-gitlab'
                    ],
                    [
                        'Vine',
                        'fa-vine'
                    ],
                    [
                        'Vimeo',
                        'fa-vimeo'
                    ],
                    [
                        'custom',
                        1
                    ]

                ),
                'size'       => 1,
                'maxitems'   => 1,
                'eval'       => 'required'
            ),
        ),

    ),
);

