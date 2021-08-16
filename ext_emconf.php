<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'CKEditor Rich Text Editor',
    'description' => 'Integration of CKEditor as Rich Text Editor.',
    'category' => 'be',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'author' => 'TYPO3 Core Team',
    'author_email' => 'typo3cms@typo3.org',
    'version' => '11.3.4',
    'constraints' => [
        'depends' => [
            'typo3' => '11.3.4',
        ],
        'conflicts' => [],
        'suggests' => [
            'setup' => '11.3.4',
        ],
    ],
];
