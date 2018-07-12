<?php
return [
    'crud' => [
        'posts' => [
            'fields' => [
                'title' => [
                    'type' => 'text',
                    'validation' => [
                        'rule' => 'required'
                    ]
                ],
                'body' => [
                    'type' => 'rich_editor'
                ],
                'featured_image' => [
                    'type' => 'image_from_filemanager'
                ]
            ],
            'options' => [
                'type' => 'plural'
            ]
        ],
        'products' => [
            'fields' => [
                'title' => [
                    'type' => 'text',
                    'validation' => [
                        'rule' => 'required'
                    ]
                ],
                'body' => [
                    'type' => 'rich_editor'
                ],
                'featured_image' => [
                    'type' => 'image_from_filemanager'
                ]
            ],
            'options' => [
                'type' => 'plural'
            ]
        ]
    ]
];