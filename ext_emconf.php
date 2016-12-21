<?php

/************************************************************************
 * Extension Manager/Repository config file for ext "example_test_extension".
 ************************************************************************/
$EM_CONF[$_EXTKEY] = array(
    'title' => 'example_test_extension',
    'description' => '',
    'category' => 'templates',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.2-8.99.99'
        ),
        'conflicts' => array(
        ),
    ),
    'autoload' => array(
        'psr-4' => array(
            'BK2K\\ExampleTestExtension\\' => 'Classes'
        ),
    ),
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Benjamin Kott',
    'author_email' => 'info@bk2k.info',
    'author_company' => 'private',
    'version' => '7.0.3',
);
