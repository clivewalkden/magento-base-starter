<?php
return [
    'backend' => [
        'frontName' => 'sozoadmin'
    ],
    'session' => [
        'save' => 'files'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'db',
                'dbname' => 'database',
                'username' => 'magento',
                'password' => 'magento',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ],
                'profiler' => [
                    'class' => 'Magento\\Framework\\DB\\Profiler',
                    'enabled' => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'translate' => 1,
        'config_webservice' => 1,
        'compiled_config' => 1,
        'customer_notification' => 1,
        'vertex' => 1
    ],
    'install' => [
        'date' => 'Thu, 17 Mar 2022 17:10:55 +0000'
    ],
    'downloadable_domains' => [
        '{{DOMAIN}}'
    ],
    'system' => [
        'default' => [
            'design' => [
                'search_engine_robots' => [
                    'default_robots' => 'NOINDEX,NOFOLLOW'
                ]
            ],
            'dev' => [
                'static' => [
                    'sign' => '0'
                ],
                'template' => [
                    'minify_html' => '0'
                ],
                'css' => [
                    'merge_css_files' => '0',
                    'minify_files' => '0'
                ],
                'js' => [
                    'merge_files' => '0',
                    'minify_files' => '0',
                    'enable_js_bundling' => '0'
                ]
            ],
            'web' => [
                'secure' => [
                    'use_in_adminhtml' => '0',
                    'use_in_frontend' => '0',
                    'base_url' => 'https://{{DOMAIN}}/',
                    'base_link_url' => 'https://{{DOMAIN}}/'
                ],
                'unsecure' => [
                    'base_url' => 'https://{{DOMAIN}}/',
                    'base_link_url' => 'https://{{DOMAIN}}/'
                ]
            ],
            'smtp' => [
                'developer' => [
                    'developer_mode' => 0
                ]
            ],
            'googletagmanager' => [
                'general' => [
                    'account' => ''
                ]
            ],
            'googletagmanager2' => [
                'settings' => [
                    'enabled' => '0',
                    'id' => ''
                ]
            ],
            'google' => [
                'adwords' => [
                    'active' => '0'
                ],
                'analytics' => [
                    'active' => '0',
                    'account' => ''
                ]
            ],
            'mailchimp' => [
                'general' => [
                    'active' => '0',
                    'apikey' => ''
                ],
                'ecommerce' => [
                    'active' => '0'
                ],
                'abandonedcart' => [
                    'active' => '0'
                ]
            ],
            'msp_securitysuite_twofactorauth' => [
                'general' => [
                    'enabled' => '0'
                ]
            ],
            'search' => [
                'engine' => [
                    'engine' => 'mysql2'
                ]
            ],
            'paypal' => [
                'wpp' => [
                    'sandbox_flag' => '1'
                ]
            ],
            'sagepaycw' => [
                'general' => [
                    'operation_mode' => 'test'
                ]
            ]
        ]
    ]
];
