<?php

/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => env('APP_NAME', 'Jannatul Ferdus Nizhum'), // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Hello I\'m Jannatul Ferdus Nizhum. I am a content creator, diploma computer engineer, business development intern. I like to learn and teach about new technologies and I like to work on different topics of technology.', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
                'cv', 'resume', 'portfolio', 'nizhum', 'ferdus', 'bd', 'jannatul', 'content creator'
            ],
            'canonical'    => null, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => env('APP_NAME', 'Jannatul Ferdus Nizhum'), // set false to total remove
            'description' => 'Hello I\'m Jannatul Ferdus Nizhum. I am a content creator, diploma computer engineer, business development intern. I like to learn and teach about new technologies and I like to work on different topics of technology.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'Portfolio',
            'site_name'   => env('APP_NAME', 'Jannatul Ferdus Nizhum'),
            'images'      => [
                env('APP_URL') . 'admin-assets/images/logo-dark.png',
                env('APP_URL') . 'admin-assets/images/logo-light.png',
                env('APP_URL') . 'admin-assets/images/logo-sm.png',
            ],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => env('APP_NAME', 'Jannatul Ferdus Nizhum'), // set false to total remove
            'description' => 'Hello I\'m Jannatul Ferdus Nizhum. I am a content creator, diploma computer engineer, business development intern. I like to learn and teach about new technologies and I like to work on different topics of technology.', // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [
                env('APP_URL') . 'admin-assets/images/logo-dark.png',
                env('APP_URL') . 'admin-assets/images/logo-light.png',
                env('APP_URL') . 'admin-assets/images/logo-sm.png',
            ],
        ],
    ],
];
