<?php

return [
    'production' => false,
    'baseUrl' => 'https://rimsim.com',
    'site' => [
        'title' => 'Rimsim',
        'description' => 'Save Money! Get Best Deals.',
        'image' => 'default-share.png',
    ],
    'owner' => [
        'name' => 'mio',
    ],
    'links' => [
        'twitter' => 'https://twitter.com/rimsimofficial',
        'github' => 'https://github.com/',
    ],
    'services' => [
        'cmsVersion' => '~2.10',
        'analytics' => '',
        'disqus' => 'artisanstatic',
        'formcarry' => 'XXXXXXXXXXXX',
        'cloudinary' => [
            'cloudName' => 'dbetxxtoj',
            'apiKey' => '921427943564381',
        ],
    ],
    'collections' => [
        'posts' => [
            'path' => 'posts/{filename}',
            'sort' => '-date',
            'extends' => '_layouts.post',
            'section' => 'postContent',
            'isPost' => true,
            'comments' => true,
            'tags' => [],
            'hasTag' => function ($page, $tag) {
                return collect($page->tags)->contains($tag);
            },
            'prettyDate' => function ($page, $format = 'M j, Y') {
                return date($format, $page->date);
            },
        ],
        'tags' => [
            'path' => 'tags/{filename}',
            'extends' => '_layouts.tag',
            'section' => '',
            'name' => function ($page) {
                return $page->getFilename();
            },
        ],
    ],
];
