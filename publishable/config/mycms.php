<?php
return [
    'crud' => [
        'posts' => [
            'fields' => [
                [
                    'name'=>'title',
                    'type'=> 'text'
                ],
                [
                    'name'=>'body',
                    'type'=> 'rich_editor'
                ],
                [
                    'name'=>'featured_image',
                    'type'=> 'featured_image'
                ],

            ],
            'options' => [
                'type' => 'plural'
            ],
            'validations' => [
                'title' => 'required'
            ]
        ],
        'products' => [
            'fields' => [
                [
                    'name'=>'title',
                    'type'=> 'text'
                ],
                [
                    'name'=>'body',
                    'type'=> 'rich_editor'
                ],
                [
                    'name'=>'featured_image',
                    'type'=> 'featured_image'
                ],

            ],
            'options' => [
                'type' => 'plural'
            ]
        ]
    ]
];