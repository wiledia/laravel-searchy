<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Search Driver
    |--------------------------------------------------------------------------
    */
    'default' => 'fuzzy',

    /*
    |--------------------------------------------------------------------------
    | Field Name
    |--------------------------------------------------------------------------
    */
    'fieldName' => 'relevance',

    /*
    |--------------------------------------------------------------------------
    | Search Drivers
    |--------------------------------------------------------------------------
    */
    'drivers' => [
        'fuzzy' => [
            'class' => 'Wiledia\Searchy\SearchDrivers\FuzzySearchDriver',
        ],
        'ufuzzy' => [
            'class' => 'Wiledia\Searchy\SearchDrivers\FuzzySearchUnicodeDriver',
        ],
        'simple' => [
            'class' => 'Wiledia\Searchy\SearchDrivers\SimpleSearchDriver',
        ],
        'levenshtein' => [
            'class' => 'Wiledia\Searchy\SearchDrivers\LevenshteinSearchDriver',
        ],
    ],
];
