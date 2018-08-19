<?php

return [
    '__name' => 'cli-app-model',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/cli-app-model.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/cli-app-model' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'cli-app' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'CliAppModel\\Library' => [
                'type' => 'file',
                'base' => 'modules/cli-app-model/library'
            ],
            'CliAppModel\\Controller' => [
                'type' => 'file',
                'base' => 'modules/cli-app-model/controller'
            ]
        ],
        'files' => []
    ],
    'routes' => [
        'tool-app' => [
            'toolAppMigrateTest' => [
                'info' => 'Test application database migrate',
                'path' => [
                    'value' => 'migrate test'
                ],
                'handler' => 'CliAppModel\\Controller\\Migrate::test'
            ],
            'toolAppMigrateStart' => [
                'info' => 'Start application database migrate',
                'path' => [
                    'value' => 'migrate start'
                ],
                'handler' => 'CliAppModel\\Controller\\Migrate::start'
            ],
            'toolAppMigrateScheme' => [
                'info' => 'Test application database migrate and create sync sql',
                'path' => [
                    'value' => 'migrate scheme (:file)',
                    'params' => [
                        'file' => 'any'
                    ]
                ],
                'handler' => 'CliAppModel\\Controller\\Migrate::scheme'
            ]
        ]
    ],
    'cli' => [
        'autocomplete' => [
            '!^app migrate( .*)?$!' => [
                'priority' => 6,
                'handler' => [
                    'class' => 'CliAppModel\\Library\\Autocomplete',
                    'method' => 'command'
                ]
            ],
            '!^app migrate scheme( .*)?$!' => [
                'priority' => 7,
                'handler' => [
                    'class' => 'Cli\\Library\\Autocomplete',
                    'method' => 'files'
                ]
            ]
        ]
    ]
];